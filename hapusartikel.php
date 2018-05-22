<?php
  $ambil=$koneksi->query("SELECT * FROM artikel WHERE id_artikel='$_GET[id]'");
  $pecah=$ambil->fetch_assoc();
  $fotoproduk = $pecah['foto_artikel'];

  if (file_exists("foto_artikel/$fotoproduk")) {
    unlink("foto_artikel/$fotoproduk");
  }

  $koneksi->query("DELETE FROM artikel WHERE id_artikel='$_GET[id]'");

  echo "<script> alert('Artikel Berhasil terhapus'); </script>";
  echo "<script> location='index.php?halaman=artikel';</script>";
 ?>
