@extends('base')
	
@section('content')
	<p>This is the Lorem Ipsum generator. Specify the number of paragraphs you want and click "Generate"</p>
	{{ Form::open(array('url' => 'lorem')) }}
		{{ Form::label('paragraphs', 'Paragraphs') }}
		{{ Form::text('paragraphs', 'paragraphs', $number) }}
		{{ Form::submit('Generate!') }}
	{{ Form::close() }}
	<br />
	@if (isset($paragraphs))
		{{ implode('<p>', $paragraphs) }}
	@endif
@stop
