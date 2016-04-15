<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="SHORTCUT ICON" href="../favicon.ico">
</head>
<body>
<div class="container">
	<h2> Tambah Data Baru </h2>
	<div class="row">
	{{ Form::open(array('route' => 'buat', 'class' => 'col s12')) }}
	<div class="row">
		<div class="input-field col s6">
			{{ Form::label('nama', 'Nama', array('class' => 'active')) }}
			{{ Form::text('nama') }}
			@if($errors->has('nama'))
				{{ $errors->first('nama') }}
			@endif
		</div>
		<div class="input-field col s6">

			{{ Form::label('usia', 'Usia', array('class' => 'active')) }}
			{{ Form::text('usia') }}
			@if($errors->has('usia'))
				{{ $errors->first('usia') }}
			@endif
		</div>
		</div>
			{{ Form::label('jenis_kelamin', 'Jenis Kelamin') }}
			{{ Form::select('jenis_kelamin', $jenis_kelamin, null, ['class' => 'browser-default']) }}
			@if($errors->has('jenis_kelamin'))
				{{ $errors->first('jenis_kelamin') }}
			@endif
			<br/>
			{{ Form::label('telepon', 'Telepon') }}
			{{ Form::text('telepon') }}
			@if($errors->has('telepon'))
				{{ $errors->first('telepon') }}
			@endif
			<br/>
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email') }}
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif
			<br/>
			<button class="btn waves-effect waves-light" type="submit" name="action">Tambah
    <i class="material-icons right">send</i>
  </button>
  <a class="waves-effect waves-light btn" href="{{ route('beranda') }}"> Batal </a>
		{{ Form::close() }}

		</div>

		</div>
</body>
</html>