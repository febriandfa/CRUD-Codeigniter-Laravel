<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>CRUD Dengan Laravel</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="/mahasiswa/tambah">Tambah Data</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
					<th>Program Studi</th>
					<th>Foto</th>
					<th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $m)
                    <tr>
                        <td>{{ $m->nim }}</td>
                        <td>{{ $m->nama_mhs }}</td>
                        <td>{{ $m->nama_jk }}</td>
                        <td>{{ $m->alamat }}</td>
						<td>{{ $m->nama_prodi }}</td>
						<td><img src="/asset/{{ $m->foto }}" width="75" /></td>
						<td>{{ $m->email }}</td>
                        <td>
                            <a class="btn btn-primary" href="/mahasiswa/edit/{{ $m->id_mhs }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-danger" href="/mahasiswa/hapus/{{ $m->id_mhs }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
