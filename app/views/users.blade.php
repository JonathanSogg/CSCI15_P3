@extends('base')
	
@section('content')
	<p>This is the user generator. Speficy how many users you want and if they should have birthdates and/or bios</p>
	{{ Form::open(array('url' => 'users')) }}
		{{ Form::label('UserBox', 'Number of Users') }}
		{{ Form::text('userno', '1') }}
		{{ Form::label('BdBox', 'Birthdaye?') }}
		{{ Form::checkbox('bd', 'bd') }}
		{{ Form::label('BioBox', 'Bio?') }}
		{{ Form::checkbox('bio', 'bio') }}
		{{ Form::submit('Generate!') }}
	{{ Form::close() }}
	<br />
	@if (isset($user))
		@for ($i=0; $i<$flags['userno']; $i++)
		        {{ $user->name }}
			<br />
			@if ($flags['bd'] == true)
				{{ $user->date($format = 'Y-m-d', $max = 'now') }}
				<br />
			@endif

			@if ($flags['bio'] == true)
				{{ $user->text}}
				<br />
			@endif
		@endfor
	@endif
@stop
