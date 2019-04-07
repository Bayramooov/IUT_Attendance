<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use DB;
use App\TClass;
class AttendanceController extends Controller
{

    public function __construct()
        {
            $this->middleware('auth',['except'=>['index','activate','success']]);
        }

    public function index ()
    	{
    		return	view('attendance.index');
    	}
//     generate temporary registration code
    public function start ($cl_id,$cl_name)
	    {
             $raw=explode(" ",$cl_name);
             $cl_name=strtolower(implode("",$raw));
           // id  class_id    class_name  temp_password 
	    	 $randnum=random_int(100000,1000000);
             $randnumhashed=password_hash($randnum,PASSWORD_DEFAULT);
             $class=TClass::find($cl_id);
             DB::table('temp')->insert ([
                'class_id'=>$cl_id,
                'class_name'=>$cl_name,
                'temp_password'=>$randnumhashed
                    ]);
             return view('attendance.showcode',['cl_id'=>$cl_id,'randnum'=>
                $randnum,'class'=>$class]);
	    }
// handle student attendance
    public function activate (Request $request)
    	{
            $this->validate($request,[
                'password'=>'required',
                 'st_id'=>'required'
            ]);
            $password=$request->input('password');
            $st_id=$request->input('st_id');
            $bool=false;
            $ids=DB::table('temp')->pluck('id');
            foreach ($ids as $id ) 
                {
                 $temp=DB::table('temp')->where('id',$id)->first();
                   // return dd($temp->temp_password);
                   if(password_verify($password,$temp->temp_password))
                    {
                         $cl_id=$temp->class_id;
                         $class=TClass::find( $cl_id);
                         $class_name=$temp->class_name;
                         $st=DB::table($class_name)->where('st_id',$st_id)->first();
                          ($st)?$bool=true : $bool;
                          break;
                    }
                }
            if($bool)
                {
                    $done_attendances=$class->done_attendences;
                    $column_name="lesson_".($done_attendances+1);
                    $db=DB::table($class_name)->where('st_id',$st_id)->
                     update([$column_name=>1]);

                $id=base64_encode($st_id);
                $cl_name=base64_encode($column_name);
                $c_id=base64_encode($cl_id);
                // return var_dump($st_id);

                // $id=Crypt::encryptString($st_id);
                // $cl_name=Crypt::encryptString($column_name);
                // $c_id=Crypt::encryptString($cl_id);

    return redirect()->route('att_suc',['cl_id'=>$c_id, 'st_id'=>$id ,
             'column_name'=>$cl_name]);
                }
            else
                {
                    return redirect()->route('attendance')->with('success','Wrong password or student id');
                }
    	}
//      confirmation success
        public function success($cl_id,$st_id,$column_name)
            {
              
                $id=base64_decode($st_id);
                $cl_name=base64_decode($column_name);
                $c_id=base64_decode($cl_id);

                //  $id=Crypt::decryptString($st_id);
                // $cl_name=Crypt::decryptString($column_name);
                // $c_id=Crypt::decryptString($cl_id);

                $class=TClass::find($c_id);
                $class_name=$class->cl_name;
                $st=DB::table($class_name)->where('st_id',$id)->first();
                // return $st_id;
                return view('attendance.success',['cl_id'=>$c_id,
     'st_id'=>$id,'column_name'=>$cl_name,'cl'=>$class,'st'=>$st]);
                    
            }

        public function finish($cl_id)
            {
                $raw=strtolower(auth()->user()->name);
                $raw=explode(" ", $raw);
                $user_name=implode("-",$raw);
                $cl=TClass::find($cl_id);
                DB::table('temp')->where('class_id',$cl_id)->delete();
                $cl->done_attendences= $cl->done_attendences+1;
                $cl->save();
                return redirect()->route('class_show',['user_name'=>$user_name,
                    'id'=>$cl_id ]);
            }
//      
        public function undo($cl_id)
        {
            // return "done";
            $cl=TClass::find($cl_id);
            $d_a=$cl->done_attendences;
            $class_name=$cl->cl_name;
            $column_name="lesson_".($d_a);
            $ids=DB::table($class_name)->pluck('id');
            foreach ($ids as $id)
                 {
                    DB::table($class_name)->where('id',$id)->update([
                        $column_name=>0
                    ]);
                 }
            $cl->done_attendences=$d_a-1;
            $cl->save();
            $raw=strtolower(auth()->user()->name);
            $raw=explode(" ",$raw);
            $user_name=implode("-",$raw);

            return redirect()->route('class_show',['user_name'=>$user_name,'id'=>$cl_id]);
        }

 }
