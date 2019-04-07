@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Create new class</div>
				<div class="row justify-content-center">
					{{Form::open(['action'=>['ClassController@store'],'method'=>'POST','class'=>'form'])}}
				<div class="form-group">
					<div class="my-form-group">
						{{Form::text('cl_name','',['placeholder'=>'Enter Class name'])}}
					<br>
					<textarea placeholder="Enter Class description" name="cl_description" cols="50" rows="3"></textarea>
					</div>
					
					<br>
					<br>
					<form>
						<div class="editPage_groups">
							<?php foreach ($list as $l) {
								echo '<div class="editPage_groups-each">'.$l.'<input type="checkbox" name="inv_groups[]" value="'.$l.'"></div>';
							}?>
						</div>
					</form>
					<br>
					<div class="my-form-group">
						{{Form::number('num_of_lessons','',['placeholder'=>'Enter number of lessons of your course in a week'])}}
					<br>
					{{Form::submit('Submit')}}
					</div>
					
				</div>
				{{Form::close()}}
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection