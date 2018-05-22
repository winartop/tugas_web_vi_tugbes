<h2>Data Artikel</h2>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>no</th>
      <th>Judul Artikel</th>
      <th>foto Artikel</th>
      <th>deskripsi Artikel</th>
      <th>aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("select * from artikel");?>
     <?php while ($pecah=$ambil->fetch_assoc()) {?>
    <tr>
      <td><?php echo $nomor; ?></td>
      <td><?php echo $pecah['judul_artikel']; ?></td>
      <td><?php echo $pecah['foto_artikel']; ?>
        <img src="foto_artikel/<?php echo $pecah['foto_artikel']; ?>" width="100">
      </td>
      <td><?php echo $pecah['deskripsi_artikel']; ?></td>
      <td>
          <a href="index.php?halaman=hapusartikel&id=<?php echo $pecah['id_artikel']; ?> " class="btn-danger btn">hapus</a>
          <a href="index.php?halaman=updateartikel&id=<?php echo $pecah['id_artikel']; ?>" class="btn-warning btn">update</a>
      </td>
    </tr>
    <?php $nomor++ ?>
  <?php } ?>
  </tbody>
</table>
<a href="index.php?halaman=tambahartikel" class="btn btn-primary">Tambah Artikel</a>
