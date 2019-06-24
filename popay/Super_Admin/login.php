<?php 
    
     session_start();
 require 'config/koneksi.php';
     //cek cookie
     if (isset($_COOKIE['id']) && isset($_COOKIE['key']))  {
      $id = $_COOKIE['id'];
      $key = $_COOKIE['key'];

      $result = mysqli_query($koneksi,"SELECT Username FROM super_admin WHERE Username = $id");
      $row = mysqli_fetch_assoc($result);

      //cek cookie dan username
      if ( $key === hash('sha256', $row['Username'])){
        $_SESSION['Login'] = true;
      }
    }


    if (isset($_SESSION["Login"]) ) {
        header("Location: index.php");
        exit;
    }
   

     if (isset($_POST["Login"]) ) {
    $user = $_POST["Username"];
    $pass = $_POST["Password"];

    $result = mysqli_query($koneksi,"SELECT * from super_admin where Username = '$user' ");

    //cek Username
   if ( mysqli_num_rows($result) === 1) {

    //cek pass
        $row = mysqli_fetch_assoc($result);
      if( password_verify($pass, $row["Password"])) {

        //set session
        $_SESSION["Login"] = true;

        //set cookie
        if ( isset($_POST['remember'])){
            setcookie('id', $row['Username'], time()+ 60);
            setcookie('key',hash('sha256', $row['Username']), time()+ 60);

        }

       echo "<script> alert('Login Berhasil !'); location = 'index.php';  </script>";
           }else{ 
             echo "<script> alert('Login Gagal !'); location = 'login.php';  </script>";
          exit;
        
      }
   }
}
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form name="login" action="" method="POST">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="Username" class="form-control" placeholder="Username" required="required" autofocus="autofocus" name="Username">
                <label for="Username">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="Password">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <a><input type="submit" name="Login" class="btn btn-primary btn-block"></a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
