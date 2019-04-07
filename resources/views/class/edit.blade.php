@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card_margin_bottom">
                <div class="card-header">Edit Class <b>{{$class->cl_name}}</b></div>
                <div class="editPage_body">
                    {{Form::open(['action'=>['ClassController@update','id'=>$class->id],'method'=>'POST'])}}
                    {{Form::text('cl_name',$class->cl_name)}}
                    <textarea placeholder="Enter Class description"  name="cl_description" cols="60" rows="5">{{$class->cl_description}}</textarea>
                    <?php $d_a=$class->done_attendences; $nm_of_ls=($class->num_of_lessons/14);
                        $groups=explode("|",$class->inv_groups);
                        foreach ($groups as $key => $group)
                        {
                            if($group==null || $group=="")
                            {
                                unset($groups[$key]);
                            }
                        } ?>
                    {{Form::number('num_of_lessons',$nm_of_ls)}}	
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Save changes')}}
                    {{Form::close()}}
                    <br>

                    @if(count($groups)>0)
                    @foreach($groups as $group)
                    {{Form::open(['action'=>['ClassController@deleteGroup','cl_id'=>$class->id,'gr_name'=>$group],'method'=>'POST'])}}
                    <p>{{Form::submit('Delete')}}{{$group}}</p>
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::close()}}
                    @endforeach
                    @endif
                    <br>
                    
                    {{Form::open(['action'=>['ClassController@addGroup','cl_id'=>$class->id],'method'=>'POST'])}}
                    <div class="editPage_groups">
                        <?php foreach ($list as $l) {
                            echo '<div class="editPage_groups-each">'.$l.'<input type="checkbox" name="inv_groups[]" value="'.$l.'"></div>';
                        }?>
                    </div>
                    
                    <br>
                    {{Form::submit('Add')}}
                    {{Form::close()}}
                </div>
            </div>
                
            <div class="card card_margin_bottom">
                <div class="card-header">Student list</div>
                <div class="editPage_body">
                @if(count($students)>0)
                    <table>
                        <tr>
                            <th></th>
                            <th>Student ID</th>
                            <th>Student name</th>
                            <th>Student Group</th>
                        </tr>
                
                        @foreach($students as $student)
                            <tr>
                                <td>
                                    {{Form::open(['action'=>['ClassController@deleteStudent','cl_id'=>$class->id,'id'=>$student->id],'method'=>'POST','onSubmit'=>'Are You Sure'])}}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete Student')}}
                                    {{Form::close()}}
                                </td>
                                <td>{{$student->st_id}}</td>
                                <td>{{$student->st_name}}</td>
                                <td>{{$student->st_group}}</td>
                            </tr>
                        @endforeach
                    </table>
                    <br><hr>
                    <p>Add new Student</p>
                    {{Form::open(['action'=>['ClassController@addStudent','id'=>$class->id],'method'=>'POST'])}}
                    {{Form::text('st_id','',['placeholder'=>'Student ID'])}}
                    {{Form::text('st_name','',['placeholder'=>'Student Name'])}}
                    {{Form::text('st_group','',['placeholder'=>'Student Group'])}}
                    {{Form::submit('Submit')}}
                    {{Form::close()}}
                @else
                    <p>No Students to show</p>
                    {{Form::open(['action'=>['ClassController@addStudent','id'=>$class->id],'method'=>'POST'])}}
                    {{Form::text('st_id','',['placeholder'=>'Student ID'])}}
                    {{Form::text('st_name','',['placeholder'=>'Student Name'])}}
                    {{Form::text('st_group','',['placeholder'=>'Student Group'])}}
                    {{Form::submit('Submit')}}
                    {{Form::close()}}
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection