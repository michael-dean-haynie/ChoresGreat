<?php

?>

@extends('Shared/Layouts/master')

@section('main-content')
	<a href="https://www.google.com" class="btn btn-default">Search on Google!</a>
	<script>console.log($('body'));</script>
	<p>{{\App\Custom\CGAPI::test()}}</p>
@endsection