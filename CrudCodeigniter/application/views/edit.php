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
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/mahasiswa" enctype="multipart/form-data">Back</a>
                </div>
            </div>
        </div>
		<form action="<?php echo base_url(); ?>index.php/mahasiswa/update/" method="post">
			<input type="hidden" name="id_mhs" value="<?php echo $result['id_mhs']?>"> <br/>
			<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NIM</strong>
                        <input type="text" name="nim" class="form-control" placeholder="NIM"
							value="<?php echo $result['nim']?>">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Mahasiswa</strong>
                        <input type="text" name="nama_mhs" class="form-control" placeholder="Nama Mahasiswa"
                            value="<?php echo $result['nama_mhs']?>">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jenis Kelamin</strong>
                        <select name="jk" class="form-control">
                            <?php
                            foreach ($jk as $value) {
                                echo "<option value='$value[id_jk]'>$value[nama_jk]</option>";
                            } ?>
                        </select>
                    </div>
                </div>
				<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat</strong>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat Mahasiswa"
                            value="<?php echo $result['alamat']?>">
                    </div>
                </div>
				<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Program Studi</strong>
                        <select name="prodi" class="form-control">
                            <?php
                            foreach ($prodi as $value) {
                                echo "<option value='$value[id_prodi]'>$value[nama_prodi]</option>";
                            } ?>
                        </select>
                    </div>
                </div>
				<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Foto</strong>
                        <input type="file" name="foto" class="form-control" placeholder="Foto Mahasiswa"
                            value="<?php echo $result['foto']?>">
                    </div>
                </div>
				<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email</strong>
                        <input type="text" name="email" class="form-control" placeholder="Email Mahasiswa"
                            value="<?php echo $result['email']?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
</body>
</html>
