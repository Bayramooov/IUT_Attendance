
@extends('layouts.transition')

@section('content')
<?php
    $num=(string)($randnum);
    $temp1=substr($num, 0,2);
    $temp2=substr($num, 2,2);
    $temp3=substr($num, 4,2);
?>
<script type="text/javascript">
setInterval(click, 11800);
function click()
	{
		document.getElementById('finish').click();
	}
</script>

<h2>Verification Code:</h2>
<h1><?php echo "<span>".$temp1."</span>"." - "."<span>".$temp2."</span>"." - "."<span>".$temp3."</span>"?></h1><br>

<p><a href="{{route('attendance_finish',['cl_id'=>$cl_id])}}" id="finish"></a></p>
@endsection