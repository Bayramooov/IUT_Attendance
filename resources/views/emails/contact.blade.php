@component('mail::message')
# From : {{$full_name}} 

<h2>Subject : {{$subject}}</h2>
<h3>{{$message}}</h3>
<br>
<h4>Email : {{$email}}</h4>
@endcomponent
