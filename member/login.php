<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
   <meta name="author" content="Patukom">
   <meta name="keyword" content="Tutorial web design, tutorial App desktop, Tutorial SEO, Download Software Gratis, dan tips trik mengoptimalkan komputer>
   <meta name="description" content="Blog yang memberikan segala tutorial komputer">
   <meta http-equiv="refresh" content="60">
   <meta http-equiv="X-UA-Compatible" content="IE-Edge">
   <meta name="viewport" content="width=device-width, initial scale=1">
   <meta name="robots" content="index, follow">
   <link rel="icon" href="logo.png" type="image/png">
   <link rel="stylesheet" href="bootstrap/jquery.slim.min.js" type="text/css">
   <link rel="stylesheet" href="bootstrap/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="bootstrap/bootstrap.bundle.min.js" type="text/css">
   <link rel="stylesheet" href="bootstrap/all.css" type="text/css">
   <script>
   // inputkan kode javascript disini.....
   </script>
   <title>Belajar HTML untuk pemula</title>
   <style>
   .error
   padding-top: 100px;
   padding-right: 20px;
   padding-left:20px;
   
   </style>
   <title>Login Form</title>
</head>
<body>
    <br>
	    <br>
		    <br>
			    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <br>
					
                    <div class="panel-heading">
                        <h3 class="panel-title">Selamat Datang di Ruang Belajar, Silahkan Login..</h3>
                    </div>
                    <div class="panel-body">
                        <div id="loading" style="text-align: center"></div>
                        <form name="form" action="cek_login.php" id="loginF" method="post" >
                            <fieldset>
                               <div class="form-group">
                                    <label>Kode Akses</label>
                                    <input type="text" id="username" name="username" class="form-control" placeholder="Kode Akses">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <?php 
        if(isset($_GET["login_error"])){
            echo "<div style='color:red';>Kode Akses atau password salah</div>";
        }
    ?>
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                
                                 <button type="submit" class="btn btn-lg btn-success btn-block">Sign in</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>