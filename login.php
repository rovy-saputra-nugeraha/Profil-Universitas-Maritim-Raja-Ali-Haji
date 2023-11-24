<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Logo Univ Di Bar-Pencarian-->
    <link href="gambar/univ.png" rel="icon">

    <title>Login || Universitas Maritim Raja Ali Haji</title>

    <!-- Bootstrap core CSS -->
    <link href="./lib/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./lib/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./lib/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./lib/ie-emulation-modes-warning.js"></script>

    <style>
    body {
      background-color: #0074e4;
      font-family: 'Helvetica Neue', Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
  }

  .login-container {
    max-width: 400px;
    padding: 30px;
    background-color: #ffffff;
    border: 1px solid #e1e1e1;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
  }

  .form-control {
    margin: 10px 0;
    padding: 10px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  .form-control:focus {
    border-color: #007bff;
    outline: none;
  }

  .form-label {
    display: none;
  }

  .login-btn {
    background-color: #007bff;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
  }

  .login-btn:hover {
    background-color: #0056b3;
  }
    </style>
  </head>

  <body>

    <div class="container">
      <form class="form-signin" method="post" action="model/proses.php">
      <div style="text-align: center;">
            <img src="gambar/LogoB.png" alt="Logo UMRAH" width="250">
        </div>
        <h1 class="form-signin-heading" align="center" style="font-size: 36px; font-weight: bold;">Absensi Pegawai UMRAH</h1>
    
        <?php 
            if (isset($_GET['log'])) {
                if ($_GET['log']==2) {
                    echo "<div class='alert alert-danger'><strong>Periksa kembali email & katasandi Anda!</strong></div>";
                }
            }
         ?>
          <div class="login-container">
            <label for="inputEmail" class="form-label">Masukkan Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Masukkan Email" required autofocus>
            <label for="inputPassword" class="form-label">Masukkan Password</label>
            <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Masukkan Password" required>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <input class="btn btn-lg btn-primary" type="submit" name="login" value="Login">
                <a href="index1.php" class="btn btn-lg btn-primary">Kembali</a>
            </div>
        </div><br><br>
        <div style="text-align: center;">
          &copy; UMRAH 2023, All Right Reserved. Designed By Rovy Saputra Nugeraha.
        </div>
      </form>
    </div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./lib/ie10-viewport-bug-workaround.js"></script>
  

</body></html>