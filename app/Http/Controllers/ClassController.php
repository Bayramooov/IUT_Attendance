<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\TClass;
use DB;
class ClassController extends Controller
{
	public $list;
	public function __construct()
		{
			$this->middleware('auth');
			$cls=DB::table('base')->get();
		    	 $tc[]=DB::table('base')->first()->st_group;
		    	 foreach ($cls as $cl) 
		    	 {
		    	 	$bool=true;
			    	 	foreach ($tc as $t) 
				    	 	{
				    	 		if($t==$cl->st_group){$bool=false; break;}
				    	 	}
				    	 	//
			    	 	if($bool)
				    	 	{
				    	 		$tc[]=($cl->st_group);
				    	 	}
		    	 }
		    	 $n=explode("-", $tc[0]);
		    	 $num=$n[1];
		    	 $sortedList=array();
		    	 $length=sizeof($tc);
		    	 $x=0;
		    	 for ($i=0; $i <$length; $i++) 
		    	 {
			    	 	for ($z=0; $z<$length; $z++) 
			    	 		{
				    	 			if(isset($tc[$z]))
						    	 	{
						    	 		$tp=explode("-",$tc[$z]);
		 					    	 	if($num>$tp[1])
		 						    	 	{
		 						    	 		$num=$tp[1];
		 						    	 		$x=$z;
		 						    	 	}
						    	 	}
					    	 }
				    $sortedList[$i]=$tc[$x];
				    unset($tc[$x]);
				    $num=100;
		    	 }
		    	 $this->list=$sortedList;
		}
		
    public function create()
	    {
	    	return view('class.create')->with('list',$this->list);
	    }
	    //Create new class table and store it 
    public function store(Request $request)
	    {
	    	$this->validate($request,[
           	'cl_name'=>'required',
           	'cl_description'=>'required',
           	'inv_groups'=>'required',
           	'num_of_lessons'=>'required',
              ]);
	    	$class_name=strtolower($request->input('cl_name'));
	    	$raw=explode(" ",$class_name);
	    	$class_name=implode("-",$raw);
	    	$numofcourses=(integer)($request->input('num_of_lessons')*14);
	    	$groups=$request->input('inv_groups');

	    	Schema::create($class_name,function(Blueprint $table)
				{
					$table->increments('id');
		            $table->string('st_id');
		            $table->string('st_name');
		            $table->string('st_group');
				});
	    	for ($i=0; $i <$numofcourses; $i++) 
	    		{ 
	    			$col_name="lesson_".($i+1);
	    	   		$qry=sprintf("ALTER TABLE `%s` ADD COLUMN %s INT DEFAULT 0",$class_name,$col_name);
	    	   		// return $qry;
	    	   		DB::select($qry);
	    		}
	    	 foreach ($groups as $group)
		    	{
		    	  $students=DB::table('base')->where('st_group',$group)->get();
		    		  foreach ($students as $student) 
		    		    {
		    				DB::table($class_name)->insert([
		    					'st_id'=>$student->st_id,
		    					'st_name'=>$student->st_name,
		    					'st_group'=>$student->st_group
		    				]);
		    		    }
		    	 }
            $newclass=new TClass;
            $newclass->teacher_id=auth()->user()->id;
            $newclass->cl_name=$class_name;
            $newclass->cl_description=$request->input('cl_description');
            $newclass->inv_groups=implode('|',$groups);
            $newclass->num_of_st=DB::table($class_name)->count();
            $newclass->num_of_lessons=(integer)($request->input('num_of_lessons')*14);
			$newclass->save();
            return redirect('/dashboard')->with('success','Class successfully created');
	    }
	    //Display a list of students of class
	public function show($user_name,$id)
		{
			$class=TClass::find($id);
			// dd($class);
			$str=strtolower($class->cl_name);
			$students=DB::table($str)->get();
			return view('class.show',['students'=>$students,'class'=>$class]);
		}  
	//Add new student to existing class
	public function  addStudent(Request $request,$id)
		{
			$this->validate($request,[
				'st_id'=>'required',
				'st_name'=>'required',
				'st_group'=>'required',
			]);

			$raw=explode(" ",auth()->user()->name);
            $user_name=strtolower(implode('-', $raw));
            $name=auth()->user()->name;
            $class=TClass::find($id);
			$cl_name=strtolower($class->cl_name);
				DB::table($cl_name)->insert([
					'st_id'=>$request->input('st_id'),
					'st_name'=>$request->input('st_name'),
					'st_group'=>$request->input('st_group')
				]);
		    $class->num_of_st=DB::table($cl_name)->count();
		    $class->save(); 
			
		  return redirect()->route('class_edit',['user_name'=>$name,'id'=>$id])->with('success','Added one student');
		}
	//Delete student from class table
	public function deleteStudent($cl_id,$id)
		{
			$raw=explode(" ",auth()->user()->name);
            $user_name=strtolower(implode('-', $raw));
			$class=TClass::find($cl_id);
			DB::table($class->cl_name)->where('id',$id)->delete();
 			$class->num_of_st=DB::table($class->cl_name)->count();
		    $class->save();
			return redirect()->route('class_edit',['user_name'=>$user_name,'id'=>$cl_id])->with('success','Student deleted');
		}
	//add new group
	public function addGroup(Request $request,$cl_id)
		 {
			$this->validate ($request,[
				'inv_groups'=>'required',
			]);
			$req_grs=$request->input('inv_groups');
			$cl=TClass::find($cl_id);
			$cl_name=strtolower($cl->cl_name);
			$rw=explode(" ",auth()->user()->name);
			$user_name=strtolower(implode("-", $rw));
			//
            $pre_inv_grs=$cl->inv_groups;
            $grs=($pre_inv_grs!="" || $pre_inv_grs!=null)?$grs=explode("|",
            	$pre_inv_grs):array();
            // return $grs;
            $new_grs= array();

             foreach ($req_grs as $req_gr)
	             {
	             	$bool=true;
	            	foreach ($grs as $gr) 
		            	{
		            		($req_gr==$gr)?($bool=false):($bool);
		            	}
		            ($bool) ? $new_grs[]=$req_gr : $new_grs;
	             }
	             // return $new_grs;
	             // return $grs;
	             $grs[]=implode("|",$new_grs);
	          	 $grs=implode("|", $grs);
            	 $pre_inv_grs==$grs?$bool=false:$bool=true;
            if($bool)
            {
				foreach ($new_grs as $group) 
					{
					  $students=DB::table('base')->where('st_group',$group)->get();
						foreach ($students as $student) 
							{
								DB::table($cl_name)->insert([
									'st_id'=>$student->st_id,
					    			'st_name'=>$student->st_name,
					    			'st_group'=>$student->st_group
								]);
							}
					}
			}
			$cl->inv_groups=$grs;
			$cl->num_of_st=DB::table($cl_name)->count();
			$cl->save();
			return redirect()->route('class_edit',['user_name'=>$user_name,'id'=>$cl_id])->with('success','Added one group');
		 }
	 //delete group
	 public function deleteGroup($cl_id,$gr_name)
		 {
		 	$rw=explode(" ",auth()->user()->name);
			$user_name=strtolower(implode("-", $rw));
			$cl=TClass::find($cl_id);
			$cl_name=$cl->cl_name;
			DB::table($cl_name)->where('st_group',$gr_name)->delete();
			$pre_inv_grs=$cl->inv_groups;
            $grs=explode("|",$pre_inv_grs);
            foreach ($grs as $key => $gr) {
            	if($gr==$gr_name)
	            	{
	            		unset($grs[$key]);
	            	}
            }
            // return implode("|",$grs);
            $cl->inv_groups=implode("|",$grs);
            $cl->num_of_st=DB::table($cl_name)->count();
            $cl->save();
		 	return redirect()->route('class_edit',['user_name'=>$user_name,'id'=>$cl_id])->with('success','Group deleted');
		 }
	//delete class
	public function dropClass($user_name,$cl_name)
		{
			$raw=explode(" ",$cl_name);
	    	$cl_name=strtolower(implode("",$raw));
			$course=Tclass::where('cl_name',$cl_name);
			$course->delete();
			Schema::dropIfExists($cl_name);
			return redirect('/dashboard')->with('success','Class deleted');
		}
//
		public function edit($user_name,$id)
			{
				$list=$this->list;
				$class=TClass::find($id);
				$str=strtolower($class->cl_name);
				$exs_grs=explode("|",$class->inv_groups);
				foreach ($exs_grs as $gr) {
					foreach ($list as $k=>$lt) 
					{
						if($gr==$lt)
						{
							unset($list[$k]);
						}
					}	
				}
				$students=DB::table($str)->get();
				return view('class.edit',['students'=>$students,
					'class'=>$class,'list'=>$list]);
			}

	public function update(Request $request,$id)
		{
			$this->validate($request,[
			'cl_name'=>'required',
           	'cl_description'=>'required',
           	'num_of_lessons'=>'required',
			]);
            $exsclass=TClass::find($id);
            //details
            $defNumOfLes=$exsclass->num_of_lessons;
            $class_name=strtolower($exsclass->cl_name);
            $exsclass->cl_name=$request->input('cl_name');
            $exsclass->cl_description=$request->input('cl_description');
            $exsclass->num_of_lessons=(integer)($request->input('num_of_lessons')*14);
			$exsclass->save();
				if($defNumOfLes!=$exsclass->num_of_lessons)
				{
						$colnum=$defNumOfLes;
					if($defNumOfLes-$exsclass->num_of_lessons<0)
					{
						$num=$exsclass->num_of_lessons-$defNumOfLes;
						$colnum++;
						for ($i=0; $i < $num; $i++) { 
							$column="lesson_".($colnum);
							$query=sprintf("ALTER TABLE `%s` ADD COLUMN %s INT DEFAULT 0",$class_name,$column);
							DB::select($query);
							$colnum++;
						}
					}
					else
					{
						$num=($defNumOfLes-$exsclass->num_of_lessons);
						for ($i=0; $i<$num; $i++) 
						{ 
							$column="lesson_".($colnum);
							$query=sprintf("ALTER TABLE `%s` DROP COLUMN %s",
								$class_name,$column);
							DB::select($query);
							$colnum--;
						}
					}
				}
			if($class_name!=strtolower($exsclass->cl_name))
				{
					$cl_nm=strtolower($exsclass->cl_name);
					$query=sprintf("RENAME TABLE `%s` TO `%s`",$class_name,$cl_nm);
					DB::select($query);
			    }		
			     return redirect('/dashboard')->with('success','Class successfully updated');
	}
}