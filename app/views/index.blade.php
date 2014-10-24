@extends('base')

@section('content')
<p>Lorem Ipsum is a tool that developers use in order to produce placeholder text to test the layout of a page or document.
   This page has tools for both generating lorem ipsum text as well as creating random users which you could test our a database, for example.</p>
<br />
<h3><a href="{{ url('lorem') }}">Lorem Ipsum</a></h3>
<p>Link to the Lorem Ipsum generator. Specify the number of paragraphs you want.</p>
<br />
<h3><a href="{{ url('users') }}">Users</a></h3>
<p>Random user generator. Specify number of users and if you want a birthdate and/or "bio" (random text).</p>
@stop
