<h2>UBAH ARTIKEL</h2>
<?php
  $ambil=$koneksi->query("SELECT * FROM artikel WHERE id_artikel='$_GET[id]'");
  $pecah=$ambil->fetch_assoc();


 ?>

<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Judul Artikel</label>
    <input type="text" name="nama" class="form-control" value="<?php echo $pecah['judul_artikel']; ?>">
  </div>
    <label>Foto Artikel</label><br>
    <img src="foto_artikel/<?php echo $pecah['foto_artikel']; ?>" width="100%">
  </div>
  <div class="form-group">
    <label>Ganti Foto Produk</label>
    <input type="file" name="foto" class="form-control">
  </div>
  <div class="form-group">
    <label>Deskripsi Produk</label>
    <textarea name="deskripsi" rows="8" class="form-control">
      <?php echo $pecah['deskripsi_artikel']; ?>
    </textarea>
  </div>
  <button class="btn btn-primary" name="update">update</button>
</form>

<?php
  if (isset($_POST['update'])){
    $namafoto=$_FILES['foto']['name'];
    $lokasifoto=$_FILES['foto']['tmp_name'];
    if (!empty($lokasifoto)) {
      move_uploaded_file($lokasifoto,"foto_artikel/$namafoto");

      $koneksi->query("UPDATE artikel SET
        judul_artikel='$_POST[nama]',
        foto_artikel='$namafoto',
        deskripsi_artikel='$_POST[deskripsi]'
        WHERE id_artikel='$_GET[id]'");
    }
    else {
      $koneksi->query("UPDATE artikel SET
        judul_artikel='$_POST[nama]',
        deskripsi_artikel='$_POST[deskripsi]'
        WHERE id_artikel='$_GET[id]'");
    }

    echo "<script> alert('Artikel Berhasil di update'); </script>";
    echo "<script> location='index.php?halaman=artikel';</script>";

  }

  ?>
