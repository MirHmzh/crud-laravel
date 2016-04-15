<!DOCTYPE html>
<html>
<head>
	<title>Perbarui Data</title>
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="SHORTCUT ICON" href="../favicon.ico">
</head>
<body>
	<div class="container">
	<h2> Perbarui Data</h2>
		<div class="row">
		{{ Form::model($biodata, array('route' => array('ganti', $biodata->id), 'method' => 'PUT', 'class' => 'col s12')) }}
		<div class="row">
		<div class="input-field col s6">
			{{ Form::label('nama', 'Nama', array('class' => 'active')) }}
			{{ Form::text('nama', $biodata->nama) }}
			@if($errors->has('nama'))
				{{ $errors->first('nama') }}
			@endif
		</div>
		<div class="input-field col s6">
			{{ Form::label('usia', 'Usia', array('class' => 'active')) }}
			{{ Form::text('usia', $biodata->usia) }}
			@if($errors->has('usia'))
				{{ $errors->first('usia') }}
			@endif
		</div>
		</div>
			{{ Form::label('jenis_kelamin', 'Jenis Kelamin', array('class' => 'active')) }}
			{{ Form::select('jenis_kelamin', $jenis_kelamin, $biodata->jenis_kelamin, ['class' => 'browser-default']) }}
			@if($errors->has('jenis_kelamin'))
				{{ $errors->first('jenis_kelamin') }}
			@endif

		<div class="input-field col s12">
			{{ Form::label('telepon', 'Telepon', array('class' => 'active')) }}
			{{ Form::text('telepon', $biodata->telepon) }}
			@if($errors->has('telepon'))
				{{ $errors->first('telepon') }}
			@endif
		</div>
		<div class="input-field col s12">
			{{ Form::label('email', 'Email', array('class' => 'active')) }}
			{{ Form::text('email', $biodata->email) }}
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif
		</div>
		</div>
			<button class="btn waves-effect waves-light" type="submit" name="action">Perbarui
    			<i class="material-icons right">send</i>
  			</button>
  			<a class="waves-effect waves-light btn" href="{{ route('beranda') }}"> Batal </a>
		{{ Form::close() }}

		</div>
</body>
</html>