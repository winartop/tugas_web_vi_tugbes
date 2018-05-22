<h2>DATA PRODUK</h2>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>E-mail</th>
      <th>Telepon</th>
      <th>Password</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("SELECT * FROM pelanggan");?>
     <?php while ($pecah=$ambil->fetch_assoc()) {?>
    <tr>
      <td><?php echo $nomor; ?></td>
      <td><?php echo $pecah['nama_plg']; ?></td>
      <td><?php echo $pecah['email_plg']; ?></td>
      <td><?php echo $pecah['telepon_plg']; ?></td>
      <td><?php echo $pecah['password_plg']; ?></td>
      <td>
          <a href="index.php?halaman=hapuspelanggan&id=<?php echo $pecah['id_plg']; ?> " class="btn-danger btn">hapus</a>
          <a href="index.php?halaman=updatepelanggan&id=<?php echo $pecah['id_plg']; ?>" class="btn-warning btn">update</a>
      </td>
    </tr>
    <?php $nomor++ ?>
  <?php } ?>
  </tbody>
</table>
<a href="index.php?halaman=tambahpelanggan" class="btn btn-primary">Tambah Data</a>
