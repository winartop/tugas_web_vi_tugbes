<?php
  $ambil=$koneksi->query("SELECT * FROM pelanggan WHERE id_plg='$_GET[id]'");
  $pecah=$ambil->fetch_assoc();

  $koneksi->query("DELETE FROM pelanggan WHERE id_plg='$_GET[id]'");

  echo "<script> alert('produk terhapus'); </script>";
  echo "<script> location='index.php?halaman=pelanggan';</script>";
 ?>
