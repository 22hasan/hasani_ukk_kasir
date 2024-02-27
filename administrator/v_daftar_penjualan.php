<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php include('navbar.php') ?>
  <div class="container">
    <br>
    <h1>Daftar Penjualan</h1> 
    <br>
    <table class="table table-success table-hover table-info">
      <tr>
        <td>ID</td>
        <td>Tanggal</td>
        <td>Total</td>
        <td>ID Pelanggan</td>
        <td>Petugas</td>
      </tr>

      <?php
      //ambil koneksi
      include('../config.php');
      $sql = mysqli_query($koneksi, "SELECT * FROM tb_penjualan");
      foreach ($sql as $penjualan) {
      ?>
        <tr>
          <td><?= $penjualan['id_penjualan'] ?></td>
          <td><?= $penjualan['tgl_penjualan'] ?></td>
          <td><?= $penjualan['total'] ?></td>
          <td><?= $penjualan['id_pelanggan'] ?></td>
          <td><?= $penjualan['id_login'] ?></td>
        </tr>
      <?php
      } ?>

    </table>



  </div>
</body>

</html>