<!DOCTYPE html>
<html lang="en">
<head>
      <?php
      include('../config/connector.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Register</title>

</head>

<body style="background-color: grey">
<nav class="navbar navbar-expand-lg bg-primary " >
	      <div class="container">
            <a class="navbar-brand " href=""><Navbar></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <?php 
            
            if(!isset($_SESSION['login'])){
                ?>
                  <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Register-Filia.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login-Filia.php">Login</a>
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
            <div class="forms mx-auto" style="background-color: white; width: 50%; margin-top:50px; border-radius: 10px;">
                  <h2 style="text-align: center; padding-top: 20px;">Registrasi</h2>
                  <form action="" method="post" style="padding: 20px">
                        <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Lengkap" required>
                        </div>
                    
                  <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email Anda" required>
                  </div>

                  <div class="mb-3">
                  <label for="hp" class="form-label">Nomor Handphone</label>
                  <input type="text" name="hp" id="hp" class="form-control" placeholder="Masukan Nomor Handphone" required>

                  <div class="mb-3">
                  <label for="pwd" class="form-label">Kata Sandi</label>
                  <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Masukan Kata Sandi" required>
                  </div>

                  <div class="mb-3">
                  <label for="repassword" class="form-label">Konfirmasi Kata Sandi</label>
                  <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Ketik Ulang Kata Sandi" required>
                  </div>

                  <div class="d-grid">
                  <input type="submit" value="Daftar" name="submit" class="btn btn-primary">
                  </div>
                  </form>

                  <p style='padding-top: 20px;'>
                        Sudah memiliki akun? <a href="Login-Filia.php">Masuk</a>
                  </p>

            <?php
            // untuk menampung value dari form ke variabel
            if(isset($_POST['submit'])){
                  $nama = $_POST['nama'];
                  $email = $_POST['email'];
                  $hp = $_POST['hp'];
                  $pwd = $_POST['pwd'];
                  $repwd = $_POST['repassword'];

            // memasukkan data ke tabel di database 
                  if($pwd == $repwd){
                  $sql = "INSERT INTO tokobuku.user_filia (nama,email,password,hp) VALUES('$nama','$email','$pwd','$hp')";
                  $sql_cek = "SELECT email FROM tokobuku.user_filia where email = '$email'";
                  $cek = $connect_user->query($sql_cek);;
            
                  // cek data di database apa sudah benar atau salah
                  if($sql){
                        echo"<script>alert('Registrasi Berhasil')</script>";
                        header('Location: Login-Filia.php');
                        echo"<meta http-equiv='refresh' content='1 url=../pages/Home-Filia.php'>";
                    }
                    else{
                        echo"<script>alert('Gagal registrasi')</script>";
                        echo"<meta http-equiv='refresh' content='1 url=../pages/Home-Filia.php'>";
                    
                    }
                }
                else{
                    echo"<script>alert('PASSWORD TIDAK SAMA')</script>";
                    echo"<meta http-equiv='refresh' content='1 url=../pages/Register-Filia.php'>";
                }
                  
            }
                
                ?>
            </div>
        </div>
    </section>

    <footer style="margin-top: 50px; background-color: ; margin-bottom: 0px;">
        <div class="container">
            <p style="padding: 30px; text-align:center; color: white;"><a href="" data-bs-toggle="modal" data-bs-target="#nama">Filia_1202204196</a></p>
        </div>
    
</body>
</html>