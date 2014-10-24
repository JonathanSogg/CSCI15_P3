@extends('base')
	
@section('content')
	<p>This is my page, we're good for now. Forms go underneath.</p>
	{{ Form::open(array('url' => 'users')) }}
		{{ Form::label('Number of users', 'Users') }}
		{{ Form::text('userno', '1') }}
		{{ Form::label('AddressBox', 'Address?') }}
		{{ Form::checkbox('address', 'address') }}
		{{ Form::label('BioBox', 'Bio?') }}
		{{ Form::checkbox('bio', 'bio') }}
		{{ Form::submit('Generate!') }}
	{{ Form::close() }}
	<br />
	@if (isset($user))
		@for ($i=0; $i<$userno; $i++)
			{{ $user->name }}
			@if ($addr == true)
				{{ $user->address }}
			@endif

			@if ($bio == true)
				{{ $user->text }}
			@endif
		@endfor
	@endif
@stop
