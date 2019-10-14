<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title; ?></title>

</head>

<body id="page-top">

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('surat/tambah'); ?>">
        <i class="fa fa-plus"></i>
        <span>Buat Surat</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('surat/data_pengajuan'); ?>">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Surat</span>
        </a>
      </li>
    </ul>
    
    <div id="content-wrapper">
      
      <div class="container-fluid">
      
      <!-- Content -->
        <div class="row ml-3 mr-3">
            <div class="col-md">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                <form action="<?= base_url('surat/edit/').$surat['id_pengajuan']; ?>" method="POST">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" value="<?= $surat['nik']; ?>">
                            <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $surat['nama']; ?>">
                            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <input type="text" class="form-control" id="posisi" name="posisi" value="<?php echo $surat['posisi']; ?>">
                            <?= form_error('posisi', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tugas">Deskripsi Tugas</label>
                            <input type="text" class="form-control" id="tugas" name="tugas" value="<?php echo $surat['tugas']; ?>">
                            <?= form_error('tugas', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="instansi">Instansi</label>
                            <input type="text" class="form-control" id="instansi" name="instansi" value="<?php echo $surat['instansi']; ?>">
                            <?= form_error('instansi', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $surat['tanggal']; ?>">
                            <?= form_error('tanggal', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <a href="<?php echo base_url('surat/data_pengajuan'); ?>" class="btn btn-warning">Kembali</a>
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
                </div>
            </div>
        </div>  

      <!-- Content -->

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
</body>

</html>