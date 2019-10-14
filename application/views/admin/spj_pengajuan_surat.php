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
        <a class="nav-link" href="<?php echo base_url('surat/tambah_pengajuan'); ?>">
        <i class="fa fa-plus"></i>
        <span>Surat Tugas</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('surat/tambah_pemberian'); ?>">
        <i class="fa fa-plus"></i>
        <span>Pemberian Surat Tugas</span></a>
      </li> -->
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
                    Form Surat Tugas
                </div>
                <div class="card-body">
                  <center><h4>INFORMASI UMUM</h4></center>
                  <hr>
                    <form action="" method="POST">
                        <div class="form-row">

                        <div class="form-group col-md-3">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik'); ?>">
                            <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                        </div>
                
                        <div class="form-group col-md-3">
                            <label for="posisi">Posisi</label>
                            <input type="text" class="form-control" id="posisi" name="posisi"  value="<?= set_value('posisi'); ?>">
                            <?= form_error('posisi', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal"  value="<?= set_value('tanggal'); ?>">
                            <?= form_error('tanggal', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        </div>
                        <br>
                        <center><h4>DESKRIPSI TUGAS</h4></center>
                        <hr>
                        <div class="form-group">
                            <label for="tugas">Deskripsi Tugas</label>
                            <input type="text" class="form-control" id="tugas" name="tugas"  value="<?= set_value('tugas'); ?>">
                            <?= form_error('tugas', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="instansi">Nama INSTANSI yang di tuju</label>
                            <input type="text" class="form-control" id="instansi" name="instansi"  value="<?= set_value('instansi'); ?>">
                            <?= form_error('instansi', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <!-- <center><h4>YANG MEMBERI TUGAS</h4></center>
                        <hr>
                        <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                        </div>
                
                        <div class="form-group col-md-6">
                            <label for="posisi">Posisi</label>
                            <input type="text" class="form-control" id="posisi" name="posisi"  value="<?= set_value('posisi'); ?>">
                            <?= form_error('posisi', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        </div>
                        <center><h4>YANG MENYETUJUI</h4></center>
                        <hr>
                        <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                        </div>
                
                        <div class="form-group col-md-6">
                            <label for="posisi">Posisi</label>
                            <input type="text" class="form-control" id="posisi" name="posisi"  value="<?= set_value('posisi'); ?>">
                            <?= form_error('posisi', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        </div> -->

                        <a href="<?php echo base_url('surat/data_pengajuan'); ?>" class="btn btn-warning">Kembali</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Buat Surat</button>
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