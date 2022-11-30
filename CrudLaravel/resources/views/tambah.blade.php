<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Tambah Data</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="/mahasiswa">Kembali</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="/mahasiswa/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NIM</strong>
                        <input type="text" name="nim" class="form-control" placeholder="NIM">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama</strong>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jenis Kelamin</strong>
                        <select class="form-control" id="opsi-jk" name="jk">
       						@foreach ($jk as $j)
          					<option value="{{ $j->id_jk }}">{{ $j->nama_jk }}</option>
       						@endforeach
    					</select>
                    </div>
                </div>
				<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat</strong>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat Mahasiswa">
                    </div>
                </div>
				<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Program Studi</strong>
                        <select class="form-control" id="opsi-prodi" name="prodi">
       						@foreach ($prodi as $p)
          					<option value="{{ $p->id_prodi }}">{{ $p->nama_prodi }}</option>
       						@endforeach
    					</select>
                    </div>
                </div>
				<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Foto</strong>
                        <input type="file" name="foto" class="form-control">
                    </div>
                </div>
				<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email</strong>
                        <input type="email" name="email" class="form-control" placeholder="Email Mahasiswa">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
