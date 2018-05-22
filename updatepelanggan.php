<h2>UBAH PRODUK</h2>
<?php
  $ambil=$koneksi->query("SELECT * FROM pelanggan WHERE id_plg='$_GET[id]'");
  $pecah=$ambil->fetch_assoc();

 ?>

<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Nama Pelanggan</label>
    <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_plg']; ?>">
  </div>
  <div class="form-group">
    <label>E-mail Pelanggan (Rp)</label>
    <input type="text" name="email" class="form-control" value="<?php echo $pecah['email_plg']; ?>">
  </div>
  <div class="form-group">
    <label>Telepon Pelanggan (Gr)</label>
    <input type="text" name="telepon" class="form-control" value="<?php echo $pecah['telepon_plg']; ?>">
  </div>
  <div class="form-group">
    <label>Password Pelanggan</label>
    <input type="text" name="password" class="form-control" value="<?php echo $pecah['password_plg']; ?>">
  </div>
  <button class="btn btn-primary" name="update">update</button>
</form>

<?php
  if (isset($_POST['update'])){
        $koneksi->query("UPDATE pelanggan SET
        nama_plg='$_POST[nama]',
        email_plg='$_POST[email]',
        telepon_plg='$_POST[telepon]',
        password='$_POST[password]'
        WHERE id_plg='$_GET[id]'");
        
        echo "<script> alert('Pelanggan Berhasil di update'); </script>";
        echo "<script> location='index.php?halaman=pelanggan';</script>";
    }


  ?>
