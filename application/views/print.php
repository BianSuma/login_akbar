<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- Custom fonts for this template-->
<link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css'); ?>" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?php echo base_url('assets/css/sb-admin.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/print.css'); ?>" rel="stylesheet">
</head>
<body>
<div class="container">
    <br>
<center><h3>SURAT TUGAS</h3></center>
<span>PT.JERBEE INDONESIA</span>
<hr>
<h5>INFORMASI UMUM</h5>
<div class="informasi">
    <table style="width:130%">
        <tr>
        <th>NIK | Nama :</th>
        <th>Tanggal Pengajuan :</th>
        <tr>    
        <td>
            <?php echo $surat['nik']; ?>
            <?php echo'|'; ?>
            <?php echo $surat['nama']; ?>
        </td>
        <td><?php echo $surat['tanggal']; ?></td> 
        </tr>
        <tr>
        <th>Departemen :</th>
        </tr>
    </table>
</div>
<hr>
<h5>TUJUAN INSTANSI</h5>
<table class="table border-1">
        <tr>
            <th>Nama Instansi :
            <?php echo $surat['instansi']; ?>
            </th>    
        </tr>
        <tr>
        <th colspan="3">Departemen :</th>
        </tr>
        <tr>
        <th colspan="3">PIC :
        <p><br></p>
        </th>
        </tr>
        <tr>
        <th colspan="3">Periode Tugas :</th>
        </tr>
    </table>
    <hr>
<h5>DESKRIPSI TUGAS</h5>
<p><?php echo $surat['tugas']; ?></p>
<br><br>
<hr>
<div class="row">
  <div class="colspan-2 col-md-4"><h5>YANG DIBERI TUGAS</h5>
      <table class="table">
        <tr>
            <th>Nama : </th>   
            <td><?php echo $surat['nama']; ?></td>
        </tr>
        <tr>
            <th>Posisi : </th>
            <td><?php echo $surat['posisi']; ?></td>
        </tr>
        <tr>      
            <th>TTD :</th>
        </tr>
      </table>
  </div>
  <div class="col-6 col-md-4"><h5>YANG MEMBERI TUGAS</h5>
  <table class="table">
        <tr>
            <th>Nama :</th>
        </tr>
        <tr>
            <th>Posisi :</th>
        </tr>
        <tr>      
            <th>TTD :</th>
        </tr>
      </table>
  </div>
  <div class="col-6 col-md-4"><h5>YANG MENYETUJUI</h5>
  <table class="table">
        <tr>
            <th>Nama :</th>
        </tr>
        <tr>
            <th>Posisi :</th>
        </tr>
        <tr>      
            <th>TTD :</th>
        </tr>
      </table>
  </div>
</div>
<hr>
<h5>KETERANGAN PENUGASAN</h5>
<table class="table border-1">
  <thead>
    <tr>
      <th scope="col">NO.</th>
      <th scope="col">TANGGAL</th>
      <th scope="col">WAKTU</th>
      <th scope="col">TUJUAN</th>
      <th scope="col">TANDA TANGAN</th>
    </tr>
  </thead>
</table>

<script type="text/javascript">
    window.print();
    </script>

</body>
</html>