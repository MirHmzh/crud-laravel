<html>
	<head>
		<title>Biodata {{ $biodata->nama }}</title>
		<link rel="stylesheet" type="text/css" href="../css/materialize.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="SHORTCUT ICON" href="../favicon.ico">
	</head>
	<body>
		<div class="container">
		<h2>Informasi Biodata {{ $biodata->nama }}</h2>

		<table class="highlight">
			<tr>
				<td>Nama</td>
				<td>: {{ $biodata->nama }}</td>
			</tr>
			<tr>
				<td>Usia</td>
				<td>: {{ $biodata->usia }}</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>: {{ $biodata->jenis_kelamin }}</td>
			</tr>
				<td>Telepon</td>
				<td>: {{ $biodata->telepon }}</td>
			<tr>
				<td>E-mail</td>
				<td>: {{ $biodata->email }}</td>
			</tr>
		</table>
		<a class="waves-effect waves-light btn" href="{{ route('beranda') }}">Kembali ke Index</a>
		</div>
	</body>
</html>