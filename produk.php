<h2>data produk</h2>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>no</th>
      <th>nama</th>
      <th>harga</th>
      <th>berat</th>
      <th>foto</th>
      <th>deskripsi produk</th>
      <th>aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("select * from produk");?>
     <?php while ($pecah=$ambil->fetch_assoc()) {?>
    <tr>
      <td><?php echo $nomor; ?></td>
      <td><?php echo $pecah['nama_produk']; ?></td>
      <td><?php echo $pecah['harga_produk']; ?></td>
      <td><?php echo $pecah['berat']; ?></td>
      <td>
        <img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100">
      </td>
      <td><?php echo $pecah['deskripsi_produk']; ?></td>
      <td>
          <a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk']; ?> " class="btn-danger btn">hapus</a>
          <a href="index.php?halaman=updateproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn-warning btn">update</a>
      </td>
    </tr>
    <?php $nomor++ ?>
  <?php } ?>
  </tbody>
</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">tambah data</a>
