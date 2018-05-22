<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tekno Shop</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2>Daftar Admin Tekno Shop</h2>
                 <br />
            </div>
        </div>
         <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Fomulir Pendaftaran Admin </strong>
                            </div>
                            <div class="panel-body">
                                <form role="form">
                                    <br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Username" name="nama"/>
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Enter Password" name="pass" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Retype Password" name="ulang_pass" />
                                        </div>
                                     <button class="btn btn-success " name="daftar">Daftar</button>
                                    <hr />
                                    Sudah Mempunyai Akun  <a href="login.php" >Login Disini</a>
                                    </form>

                                    <?php
                                      if (isset($_POST['daftar'])) {
                                        $koneksi->query("INSERT INTO admin
                                        (nama_lengkap,username,password)
                                        VALUES('$_POST[nama_lengkap]',
                                          '$_POST[username]',
                                          '$_POST[pass]')");

                                        echo "<div class='alert alert-info'>Data Tersimpan</div>";
                                        echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pelanggan'>";
                                      }
                                     ?>
                            </div>

                        </div>
                    </div>
        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>

</body>
</html>
