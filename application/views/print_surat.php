<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <table>
        <tr>
        <th>NO</th>
        <th>NOMOR SURAT</th>
        <th>NIK</th>
        <th>NAMA</th>
        <th>POSISI</th>
        <th>DESKRIPSI TUGAS</th>
        <th>INSTANSI</th>
        <th>TANGGAL</th>
        </tr>
        <?php
            $no = 1;
                foreach ($surat_perjalanan as $sp) {
                        ?>
        <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $sp->id_surat; ?></td>
        <td><?php echo $sp->nik; ?></td>
        <td><?php echo $sp->nama; ?></td>
        <td><?php echo $sp->posisi; ?></td>
        <td><?php echo $sp->tugas; ?></td>
        <td><?php echo $sp->instansi; ?></td>
        <td><?php echo $sp->tanggal; ?></td>
            <?php
                 }
            ?>
        </tr>
    </table>

    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>