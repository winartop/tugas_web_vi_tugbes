<h2>DATA PEMBELIAN</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Pelanggan</th>
      <th>Tanggal</th>
      <th>Total</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("SELECT * FROM pembelian join pelanggan
      on pembelian.id_plg=pelanggan.id_plg") ?>
      <?php while ($pecah=$ambil->fetch_assoc()){?>
    <tr>
      <td><?php echo $nomor; ?></td>
      <td><?php echo $pecah['nama_plg']; ?></td>
      <td><?php echo $pecah['tanggal_pembelian']; ?></td>
      <td><?php echo $pecah['total_pembelian']; ?></td>
      <td>
        <a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian']; ?>
          " class="btn btn-info">detail</a>
      </td>
    </tr>
    <?php $nomor++ ?>
  <?php } ?>
  </tbody>
</table>
