<h2>Selamat datang Administrator</h2>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>username</th>
      <th>Password</th>
      <th>Nama Lengkap</th>
    </tr>
  </thead>
  <tbody>
    <?php $ambil=$koneksi->query("select * from admin");?>
     <?php while ($pecah=$ambil->fetch_assoc()) {?>
    <tr>
      <td><?php echo $pecah['username']; ?></td>
      <td><?php echo $pecah['password']; ?></td>
      <td><?php echo $pecah['nama_lengkap']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
