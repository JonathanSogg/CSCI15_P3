@extends('base')
	
@section('content')
	<p>This is the user generator. Specify how many users you want and if they should have birthdates and/or bios</p>
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
		        <b>{{ $user->name }}</b>
			<br />
			@if ($flags['bd'] == true)
				{{ $user->date($format = 'Y-m-d', $max = 'now') }}
				<br />
			@endif

			@if ($flags['bio'] == true)
				<i style='margin-bottom:10px'>{{ $user->text }}</i>
				<br />
			@endif
		@endfor
	@endif
@stop
