@extends('base')
	
@section('content')
	<p>This is my page, we're good for now. Forms go underneath.</p>
	{{ Form::open(array('url' => 'users')) }}
		{{ Form::label('Number of users', 'Users') }}
		{{ Form::number('users', '1') }}
		{{ Form::label('Address?', 'Address') }}
		{{ Form::checkbox('address', 'address') }}
		{{ Form::label('Bio?', 'Bio') }}
		{{ Form::checkbox('bio', 'bio') }}
		{{ Form::submit('Generate!') }}
	{{ Form::close() }}
	<br />
	@if (isset($user))
		@for ($i=0; $i<users; $i++)
			{{ $user->name }}
			@if (isset($addr))
				{{ $user->address }}
			@endif

			@if (isset($bio))
				{{ $user->text }}
			@endif
		@endfor
	@endif
@stop
