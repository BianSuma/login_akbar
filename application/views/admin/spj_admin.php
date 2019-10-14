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