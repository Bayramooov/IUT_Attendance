@extends('layouts.app')
<?php

$class_name=strtoupper($cl->cl_name);
$d_a=$cl->done_attendences;
?>
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card successPage">
				<div class="card-header">{{$class_name}}</div>
				<h2 align="center">{{$st->st_name}}</h2>
				<h3 align="center">Attandance verified!</h3>
				<h3 align="center">{{$class_name}}: {{$column_name}}</h3>
				<a href="/">Home</a>
			</div>
		</div>
	</div>
	<!-- <h2>Current Status</h2>
	<table>
		<tr>
			<?php for ($i=0; $i <$d_a ; $i++) {
				$str="lesson_".($i+1); 
				echo "<th>".strtoupper($str)."</th>";
			} ?>
		</tr>
		<tr>
			
			<?php for ($i=0; $i <$d_a ; $i++) {
				$str="lesson_".($i+1);
				 $val=$st->$str;
				echo "<td>".$val."</td>";
			} ?>
		</tr>
	</table> -->
</div>
@endsection