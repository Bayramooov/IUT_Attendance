<?php
// use	Illuminate\Support\Facades\URL;
// $route=URL::temporarySignedRoute('attendance', now()->addSeconds(12));
// route('attendance')
?>

@extends('layouts.app')

@section('content')
<div>
	<h2>Please fill form the for below by given code and your student id </h2>
</div>
<div>
	{{Form::open(['action'=>'AttendanceController@activate','method'=>'POST'])}}
	{{Form::text('password','',['placeholder'=>'Enter The Code'])}}
	{{Form::text('st_id','',['placeholder'=>'Student ID'])}}
	{{Form::submit('Submit')}}
	{{Form::close()}}
</div>
@endsection