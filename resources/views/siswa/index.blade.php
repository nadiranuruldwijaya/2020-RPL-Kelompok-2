
<!DOCTYPE html>
<html>
<head>
	<title>MAIN MENU</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<div>
		<a href=""><button>Logout</button></a>
	</div>
	<center>
		<caption><h1>INI SEBENARNYA MAU BUAT APA??(NEW)</h1>
			<div>
				<a href="{{ route('siswa.create') }}"><button>Buat data?? ya di sini</button></a>
			</div><br>
		</caption>
		<table border="2" width="800">
			<thead>
				<tr>
					<th>No</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Telepon</th>
					<th>Alamat</th>
					<th>Option</th>
				</tr>
			</thead>
			<tbody>

				@forelse($siswa as $vk)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $vk ->nis }}</td>
					<td>{{ $vk ->nama_lengkap }}</td>
					<td>{{ $vk ->kelas }}</td>
					<td>{{ $vk ->tlp }}</td>
					<td>{{ $vk ->alamat}}</td>
					<td>
						<a href="{{ route('siswa.edit', $vk->id) }}"><button>Edit</button></a>
						<a href="{{ route('siswa.destroy', $vk->id) }}"><button>Hapus</button></a>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="7"><h1>Coba tebak di mana datanya??</h1></td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</center>

</body>
</html>