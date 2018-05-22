<h2>DETAIL PEMBELIAN</h2>
<table class="table table-bordered">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nama Pelanggan</th>
        <th>Telepon Pelanggan</th>
        <th>E-mail Pelanggan</th>
        <th>Tangga Pembelian</th>
        <th>Total Pembelian</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $ambil=$koneksi->query("SELECT * FROM pembelian join pelanggan
        ON pembelian.id_plg=pelanggan.id_plg
        WHERE pembelian.id_pembelian='$_GET[id]'");
        $detail = $ambil->fetch_assoc();
       ?>
      <tr>
        <td><?php echo $detail['nama_plg']; ?></td>
        <td><?php echo $detail['telepon_plg']; ?></td>
        <td><?php echo $detail['email_plg']; ?></td>
        <td><?php echo $detail['tanggal_pembelian']; ?></td>
        <td><?php echo $detail['total_pembelian']; ?></td>
      </tr>
    </tbody>
  </table>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga Produk</th>
        <th>jumlah</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <tbody>
      <?php $nomor=1; ?>
      <?php
        $ambil=$koneksi->query("SELECT * FROM pembelian_produk
        join produk
        ON pembelian_produk.id_produk=produk.id_produk
        WHERE pembelian_produk.id_pembelian='$_GET[id]'");
       ?>
       <?php while($pecah = $ambil->fetch_assoc()){ ?>
      <tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $pecah['nama_produk']; ?></td>
        <td><?php echo $pecah['harga_produk']; ?></td>
        <td><?php echo $pecah['jumlah_pembelian']; ?></td>
        <td>
          <?php echo $pecah['harga_produk']*$pecah['jumlah_pembelian'];      ?>
        </td>
      </tr>
      <?php $nomor++; ?>
    <?php } ?>
    </tbody>
  </table>
        <a href="#" class="btn-info btn">CETAK</a>
</table>
