<?php
session_start();
$koneksi= new mysqli('localhost','root','','teknoshop');

if (!isset($_SESSION['admin'])) {
  echo "<script>alert('Anda Harus Login Terlebih Dahulu');</script>";
  echo "<script>location='login.php';</script>";
  header('location=login.php');
  exit();
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Tekno Shop</title>
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <link href="assets/css/custom.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
        </button>
        <a class="navbar-brand" href="index.php">Admin TeknoShop</a>
      </div>
      <div style="color: white;
      padding: 15px 50px 5px 50px;
      float: right;
      font-size: 16px;"> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li class="text-center">
            <img src="assets/img/find_user.png" class="user-image img-responsive"/>
            <?php $ambil=$koneksi->query("select * from admin");?>
             <?php while ($pecah=$ambil->fetch_assoc()) {?>
               <h3 style="color:Tomato;"><?php echo $pecah['nama_lengkap']; ?>  </h3>
               <?php } ?>
          </li>
          <li><a  href="index.php"></i> HOME</a></li>
          <li><a  href="index.php?halaman=produk"></i> PRODUK</a></li>
          <li><a  href="index.php?halaman=pembelian"></i> PEMBELIAN</a></li>
          <li><a  href="index.php?halaman=pelanggan"></i> PELANGGAN</a></li>
          <li><a  href="index.php?halaman=artikel"></i> ARTIKEL</a></li>
          <li><a style="color:Tomato;" href="index.php?halaman=logout"></i> LOGOUT</a></li>
        </ul>
      </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
      <div id="page-inner">
        <?php
        if (isset($_GET['halaman'])) {
          if ($_GET['halaman']=="produk") {
            include 'produk.php';
          }
          elseif ($_GET['halaman']=="pembelian") {
            include 'pembelian.php';
          }
          elseif ($_GET['halaman']=="pelanggan") {
            include 'pelanggan.php';
          }
          elseif ($_GET['halaman']=="detail") {
            include 'detail.php';
          }
          elseif ($_GET['halaman']=="artikel") {
            include 'artikel.php';
          }
          elseif ($_GET['halaman']=="tambahproduk") {
            include 'tambahproduk.php';
          }
          elseif ($_GET['halaman']=="tambahpelanggan") {
            include 'tambahpelanggan.php';
          }
          elseif ($_GET['halaman']=="tambahartikel") {
            include 'tambahartikel.php';
          }
          elseif ($_GET['halaman']=="hapusproduk") {
            include 'hapusproduk.php';
          }
          elseif ($_GET['halaman']=="hapuspelanggan") {
            include 'hapuspelanggan.php';
          }
          elseif ($_GET['halaman']=="hapusartikel") {
            include 'hapusartikel.php';
          }
          elseif ($_GET['halaman']=="updateproduk") {
            include 'updateproduk.php';
          }
          elseif ($_GET['halaman']=="updatepelanggan") {
            include 'updatepelanggan.php';
          }
          elseif ($_GET['halaman']=="updateartikel") {
            include 'updateartikel.php';
          }
          elseif ($_GET['halaman']=="logout") {
            include 'logout.php';
          }
        }
        else {
          include 'home.php';
        }

        ?>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery-1.10.2.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.metisMenu.js"></script>
  <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
  <script src="assets/js/morris/morris.js"></script>
  <script src="assets/js/custom.js"></script>
  <script type="text/javascript" src="assets/cekditor/cekditor/cekditor.js"></script>
</body>
</html>
<?php
include 'footer.php';
?>
