<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rubah Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Rubah Data</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="/mahasiswa" enctype="multipart/form-data">Back</a>
                </div>
            </div>
        </div>
		@foreach($mahasiswa as $m)
		<form action="/mahasiswa/update" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $m->id_mhs }}"> <br/>
			<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NIM</strong>
                        <input type="text" name="nim" class="form-control" placeholder="NIM"
							value="{{ $m->nim }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Mahasiswa</strong>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa"
                            value="{{ $m->nama_mhs }}">
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
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat Mahasiswa"
                            value="{{ $m->alamat }}">
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
                        <input type="text" name="email" class="form-control" placeholder="Email Mahasiswa"
                            value="{{ $m->email }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
		@endforeach
</body>
</html>
