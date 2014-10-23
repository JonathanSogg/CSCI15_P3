@extends('base')

@section('content')
<p>This has links to the other stuff</p>
<h3><a href="{{ url('lorem') }}">Lorem Ipsum</a></h3>
<h3><a href="{{ url('users') }}">Users</a></h3>
@stop
