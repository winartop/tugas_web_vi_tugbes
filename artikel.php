
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Judul Artikel</th>
      <th>foto Artikel</th>
      <th>deskripsi Artikel</th>
    </tr>
  </thead>
  <tbody>
    <?php $ambil=$koneksi->query("select * from artikel");?>
     <?php while ($pecah=$ambil->fetch_assoc()) {?>
    <tr>
      <td><?php echo $nomor; ?></td>
      <td><?php echo $pecah['judul_artikel']; ?></td>
      <td><?php echo $pecah['foto_artikel']; ?>
        <img src="foto_artikel/<?php echo $pecah['foto_artikel']; ?>" width="100">
      </td>
      <td><?php echo $pecah['deskripsi_artikel']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
