@component('mail::message')
# Introduction

Welcome to our IUTAssistant App {{$teacher_name}}!
The body of your message.{{$message}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
<?php
// @component('mail::button', ['url' => ''])
// Button Text
// @endcomponent
?>