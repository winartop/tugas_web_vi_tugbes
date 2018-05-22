<?php
session_start();
$koneksi= new mysqli('localhost','root','','teknoshop');
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tekno Shop </title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
  </head>
  <body>
    <?php include 'navigation.php' ?>
      <?php include 'header.php' ?>
    <!-- page content -->
    <div class="container">

      <h1 class="my-4">Selamat datang di website tekno shop</h1>
      <br>
      <!--INI BAGIAN KONTEN-->
      <div class="content row">
        <!--ARTIKEL-->
        <div class="mainbar bg-light col-8">
          <h2 align="center">Berita</h2>
          <?php
          include "../koneksi.php";

          $perpage=4;
          $page= isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
          $start = ($page>1)?($page*$perpage)-$perpage : 0;
          $artikel="select * from artikel order by id_artikel DESC LIMIT $start, $perpage";
          $hasil2=mysqli_query($koneksi, $artikel);
          $hasil=mysqli_query($koneksi, "select * from artikel");
          $total=mysqli_num_rows($hasil);
          $pages=ceil($total/$perpage);
          ?>

          <?php while ($row=mysqli_fetch_assoc($hasil2)) {?>
          <center>
            <table width="700px">
              <tr>
                <td><h3><?php echo $row["judul_artikel"]?></h3></td>
              </tr>
              <tr>
                <td><!--iki gambar--></td>
              </tr>
              <tr>
                <td><?php echo $row["foto_artikel"]?></td>
                <img src="../admin/foto_artikel/<?php echo $pecah['foto_artikel']; ?>" width="100">
              </tr>
              <tr>
                <td><a href="artikel.php?=<?php echo $row["id_artikel"]?>">Readmore...</a></td>
              </tr>
              <br>
            </table>


            <a href="artikel.php">Lihat berita lainnya</a>
          </center>
        </div>
        <?php } ?>
        <!--END ARTIKEL-->


      <hr>

      <!-- call to action section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p> Apa itu Tekno Shop ? .</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="tentang.php">Klik Disini</a>
        </div>
      </div>

    </div>
    <!-- /.container -->
    <!-- features section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>tekno Shop</h2>
        <p>Jaul beli online Elektronik</p>
        <ul>
          <li>
            <strong>Smartphone</strong>
          </li>
          <li>Laptop</li>
          <li>Komputer</li>
          <li>Aksessoris Smartphone</li>
          <li>Aksessoris Smartphone</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="" alt="">
      </div>
    </div>
    <!-- /.row -->
    <!-- footer -->
    <?php include 'footer.php' ?>

    <!-- bootstrap core javascript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
