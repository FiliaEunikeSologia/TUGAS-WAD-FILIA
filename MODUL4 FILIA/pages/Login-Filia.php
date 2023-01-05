<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    include('../config/connector.php');
    if(!isset($_POST['submit']))
    // {echo "Anda Berhasil Login";}

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        $sql = "SELECT * FROM tokobuku.user_filia WHERE email = '$email'";
        $result = mysqli_query($connect_user,$sql);
        
        if(mysqli_num_rows($result) == 1){
        //cek password dgn mengambil data yg sudah tersimpan di database
            $row = mysqli_fetch_assoc($result);
            if($pwd == $row['password']){

                $_SESSION['id'] = $row['id'];
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['email'] = $row['email'];

                //set session
                $_SESSION['login'] = true;

                //cek remember me
                if(!isset($_POST['remember me'])){
                    //buat cookie
                    setcookie('id',$row['id'],time() + 604800,"/");
                    setcookie('email', $_POST['email'],time() + 604800, "/");
                    setcookie('password', $_POST['pwd'],time() + 604800, "/");
                }

                header('Location: index.php');
            }else{
                echo "Password dan Username Anda tidak sesuai";
            }
        }else{
            echo 'User belum terdaftar pada sistem';
        }
    }
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Login</title>
    
    </head>
    <body style="background-color: grey;">
    <nav class="navbar navbar-expand-lg bg-primary " >
    <div class="container ">
        <a class="navbar-brand" href="#"> </a>
    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
		
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <?php 
            if(!isset($_SESSION['login'])){
            ?>
            
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Register-Filia.php" style="color:white;" >Register</a>
                </li>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Home-Filia.php" style=" padding-left: 70px; font-weight:500;">Home</a>
                </li>

            </ul>
        </div>
    
            </ul>
            <?php
            }else{
            ?>    
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="Home-Filia.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Profil-Filia.php">Profil</a>
                    </li>	
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>			
                </ul>
            <?php
            }
            ?>
		</div>
	  </div>
	</nav>
    <section>
        <div class="container">
            <div class="forms mx-auto" style="background-color: white; width: 40%; margin-top:50px; border-radius: 10px;">
                <h2 style="text-align: center; padding-top: 20px;">Login</h2>
                <form action="" method="post" style="padding: 20px;">

                <?php

                if(isset($_COOKIE['id'])){
                    $hasil = mysqli_query($conn,"SELECT * FROM tokobuku.user_filia WHERE id='".$_COOKIE['id']."'");
                    $r = mysqli_fetch_array($hasil);
                    ?> 
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?php echo $r['email']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password</label>
                        <input type="password" name="pwd" id="pwd" class="form-control" value="<?php echo $r['password']; ?>">
                    </div>

                    <?php
                } else {
                    ?>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email Anda">
                    </div>

                    
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password</label>
                        <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Masukan Password">
                    </div>
                    
                    <?php
                }
                
                ?>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="remember" name='remember'>
                            <label class="form-check-label" for="remember"> Remember Me </label>
                        </div>
                    </div>
                    
                    <div class="d-grid">
                    <input type="submit" value="Login" name="login" class="btn btn-primary">
                    </div>
                    
                </form>

                <p style="padding: 20px;">
                    Belum memiliki akun? <a href="register-Filia.php">Daftar Disini</a>
                </p>

                <?php
                
                ?>
            </div>
        </div>
    </section>

    <footer style="margin-top: 50px; margin-bottom: 0px;">
        <div class="container">
            <p style="padding: 30px; text-align:center; color: white;">2022<a href="" data-bs-toggle="modal" data-bs-target="#nama">FILIA 1202204196</a></p>
        </div>
    
</body>
</html>