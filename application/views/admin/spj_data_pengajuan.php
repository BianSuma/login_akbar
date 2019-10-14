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

      <?php if ($this->session->flashdata('working')) : ?>
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">Close</button>
        <h4><i class="icon fa fa-check"></i>Success!</h4>
        <?= $this->session->flashdata('working'); ?>
      </div>

      <?php elseif ($this->session->flashdata('not_working')) : ?>
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">Close</button>
        <h4><i class="icon fa fa-ban"></i>Alert!</h4>
        <?= $this->session->flashdata('not_working'); ?>
      </div>
      <?php endif; ?>

        <!-- Data Surat -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Surat Tugas</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nomor Surat</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Deskripsi Tugas</th>
                    <th>Instansi</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php foreach ($surat_perjalanan as $sp) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $sp['id_pengajuan']; ?></td>
                        <td><?php echo $sp['nik']; ?></td>
                        <td><?php echo $sp['nama']; ?></td>
                        <td><?php echo $sp['posisi']; ?></td>
                        <td><?php echo $sp['tugas']; ?></td>
                        <td><?php echo $sp['instansi']; ?></td>
                        <td><?php echo $sp['tanggal']; ?></td>
                        <td>
                        <ul><a class="btn btn-warning " href="<?= base_url('surat/edit/'.$sp['id_pengajuan']); ?>" name="edit"><i class="fa fa-edit"></i></a></ul>
                        <ul><a onclick="javascript: return confirm('Anda Yakin Hapus ?')" class="btn btn-danger " href="<?= base_url('surat/hapus/'.$sp['id_pengajuan']); ?>"><i class="fa fa-trash-alt"></i></a></ul>
                        <ul><a class="btn btn-secondary " href=" <?php echo base_url('surat/print/'.$sp['id_pengajuan']); ?>"><i class="fas fa-print"></i></a></ul>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

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