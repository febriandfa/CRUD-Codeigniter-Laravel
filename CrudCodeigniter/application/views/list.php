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
                    <h2>CRUD Dengan Codeigniter</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/mahasiswa/add">Tambah Data</a>
                </div>
            </div>
        </div>
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
            <?php
            foreach ($result as $value) {
            ?>
                <tr>
                    <td><?php echo $value['nim']?></td>
                    <td><?php echo $value['nama_mhs']?></td>
                    <td><?php echo $value['nama_jk']?></td>
                    <td><?php echo $value['alamat']?></td>
                    <td><?php echo $value['nama_prodi']?></td>
                    <td><img src="image/<?php echo $value['foto']; ?>" width="50"></td>
                    <td><?php echo $value['email']?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/mahasiswa/edit/<?php echo $value['id_mhs']; ?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/mahasiswa/delete/<?php echo $value['id_mhs']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
