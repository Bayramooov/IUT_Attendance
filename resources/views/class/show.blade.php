@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Student list<p><a class="dashboard_create" href="{{route('attendance_start',['cl_id'=>$class->id,'cl_name'=>$class->cl_name])}}">Start</a></p></div>
					@if(count($students)>0)
						<div class="status-tables">
							<div class="status_header-table">
								<table class="attandance-table_1">
								<tr>
									<th>Student ID</th>
									<th>Student name</th>
									<th>Student Group</th>
								</tr>
								@foreach($students as $student)
								<tr>
									<td>{{$student->st_id}}</td>
									<td>{{$student->st_name}}</td>
									<td>{{$student->st_group}}</td>
								</tr>
								@endforeach
							</table>
							</div>	
							<div class="status_inner-table">
								<table class="attandance-table_2">
									<tr>
										<?php $i=0; $d_a=$class->done_attendences; while ($i<$d_a) {
											$t_str="lesson_".($i+1);
											echo "<th>".strtoupper($t_str)."</th>";
											$i++;
										}?>
									</tr>
									@foreach($students as $student)
										<tr>
											<?php $i=0; while ($i<$d_a) {
												$t_str="lesson_".($i+1);
												$temp=$student->$t_str;
												if($temp==0)
												{
												echo '<td><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; width: 20px; height: auto;" xml:space="preserve"><circle style="fill:#E21B1B;" cx="256" cy="256" r="256"/><path style="fill:#C40606;" d="M510.28,285.304L367.912,142.936L150.248,368.608l140.928,140.928
	C406.352,493.696,497.056,401.288,510.28,285.304z"/><g><path style="fill:#FFFFFF;" d="M354.376,371.536c-5.12,0-10.232-1.952-14.144-5.856L146.408,171.848
		c-7.816-7.816-7.816-20.472,0-28.28s20.472-7.816,28.28,0L368.52,337.4c7.816,7.816,7.816,20.472,0,28.28
		C364.608,369.584,359.496,371.536,354.376,371.536z"/><path style="fill:#FFFFFF;" d="M160.544,371.536c-5.12,0-10.232-1.952-14.144-5.856c-7.816-7.816-7.816-20.472,0-28.28
		l193.832-193.832c7.816-7.816,20.472-7.816,28.28,0s7.816,20.472,0,28.28L174.688,365.68
		C170.784,369.584,165.664,371.536,160.544,371.536z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></td>';
												}
												else
												{
													echo '<td><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667; width: 20px; height: auto;" xml:space="preserve"><path style="fill:#6AC259;" d="M213.333,0C95.518,0,0,95.514,0,213.333s95.518,213.333,213.333,213.333
	c117.828,0,213.333-95.514,213.333-213.333S331.157,0,213.333,0z M174.199,322.918l-93.935-93.931l31.309-31.309l62.626,62.622
	l140.894-140.898l31.309,31.309L174.199,322.918z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></td>';
												}
												$i++;
											}?>
										</tr>
									@endforeach
								</table>
							</div>
						</div>
						<!-- @if($d_a>0)<a href="{{route('attendance_undo',['cl_id'=>$class->id])}}">Undo({{$t_str}})</a>@endif -->
					@else
                        <p>No Students to show</p>
					@endif
				</div>
			</div>
		</div>
	</div>

@endsection