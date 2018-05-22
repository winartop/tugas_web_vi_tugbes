<h2>Tambah Artikel</h2>
<form method="post"enctype="multipart/form-data">
  <div class="form-group">
    <label>Judul Artikel</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="form-group">
    <label>Deskripsi Artikel</label>
    <textarea name="deskripsi" class="form-control" rows="10" ></textarea>
  </div>
  <div class="form-group">
    <label>Foto Artikel</label>
    <input type="file" class="form-control" name="foto">
  </div>
  <button class="btn btn-primary" name="save">simpan</button>
</form>

<?php
  if (isset($_POST['save'])) {
    $nama=$_FILES['foto']['name'];
    $lokasi=$_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi,"foto_artikel/".$nama);
    $koneksi->query("INSERT INTO artikel
    (judul_artikel,foto_artikel,deskripsi_artikel)
    VALUES('$_POST[nama]','$nama','$_POST[deskripsi]')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=artikel'>";
  }
 ?>
