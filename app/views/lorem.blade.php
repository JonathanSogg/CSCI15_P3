@extends('base')
	
@section('content')
	<p>This is my page, we're good for now. Forms go underneath.</p>
	{{ Form::open(array('url' => 'lorem')) }}
		{{ Form::label('paragraphs', 'Paragraphs') }}
		{{ Form::text('paragraphs', '1') }}
		{{ Form::submit('Generate!') }}
	{{ Form::close() }}
	<br />
	{{ implode('<p>', $paragraphs) }}
@stop
