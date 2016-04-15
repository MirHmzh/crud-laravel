<!DOCTYPE html>
<html>
<head>
	<title> Mini CRUD Laravel</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="SHORTCUT ICON" href="favicon.ico">
	<style type="text/css">
		table th{
			text-align: center;
		}
		table td:nth-child(6){
			text-align: center;
		}
		h3{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3>List Data</h3>
		@if(Session::has('pesan'))
			{{ Session::get('pesan') }}
		@endif

		@if($biodata->count())
		<p><a class="btn-floating btn-large waves-effect waves-light red" href="{{ route('baru') }}"><i class="material-icons">add</i></a></p>
		<table class="highlight">
			<tr>
				<th>Nama</th>
				<th>Usia</th>
				<th>Jenis Kelamin</th>
				<th>Telepon</th>
				<th>E-mail</th>
				<th>Pilihan</th>
			</tr>
			@foreach($biodata as $data)
				<tr>
					<td>{{ $data->nama }}</td>
					<td>{{ $data->usia }}</td>
					<td>{{ $data->jenis_kelamin }}</td>
					<td>{{ $data->telepon }}</td>
					<td>{{ $data->email }}</td>
					<td>
						<a class="btn btn-info" role="button" href="{{ route('lihat', $data->id) }}">Lihat</a>
						<a class="btn btn-primary" role="button" href="{{ route('ubah', $data->id) }}">Edit</a>
						<a class="btn btn-danger" role="button" href="{{ route('hapus', $data->id) }}">Hapus</a>
					</td>
				</tr>
			@endforeach
		</table>
		@else
		<p>Anda belum memiliki isi pada tabel biodata</p>
		<p><a href="{{ route('baru') }}">Tambah</a></p>
		@endif
		</div>
</body>
</html>