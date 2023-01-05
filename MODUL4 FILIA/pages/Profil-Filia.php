<?php

session_start();
include("../config/connector.php");
    
if(isset($_POST['update'])){
    $new_name = $_POST['nama'];
    $new_no = $_POST['nohp'];
    $new_pass = $_POST['password'];
    $renew_pass = $_POST['repassw'];
    $warna = $_POST['warna'];

    if($new_pass != '' && $new_pass == $renew_pass){
        $sql = "UPDATE users SET nama = '".$new_name."',
        no_hp = '".$new_no."',
        password = '".$new_pass."' WHERE id='".$_SESSION['id']."'";
        
        setcookie('warna',$warna,time()+ 604800,'/');
        $update = mysqli_query($connect_user,$sql);

        header('Location: index.php');

    }else{
        echo "password tidak sama";
    }
}

$query = mysqli_query($conn,"SELECT * FROM tokobuku WHERE id='".$_SESSION['id']."'");
$rowCount = mysqli_num_rows($query);

$hasil = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

      <title>Profile</title>

</head>
<body style="background-color: #f4ffb0;">
<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: <?=$_COOKIE['warna'];?>;">
	<div class="container ">
	      <a class="navbar-brand " href=""></a>
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


    <div class="container">
        <div class="edit-group mx-auto" style="background-color: white; width: 75%; margin-top:30px; border-radius: 10px;">
            <h2 style="text-align: center; padding-top:20px;">Profil</h2>    
            <form action="" method='post' style="padding: 20px;">
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $hasil['email'] ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $hasil['nama'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nohp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $hasil['no_hp'] ?>">
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Kata Sandi Baru</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="repassw" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="repassw" name="repassw">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="navbar" class="col-sm-2 col-form-label">Navbar</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="warna" name='warna'>
                            <option value="#2b99ff">Ocean Blue</option>
                            <option value="#1f1f1f">Dark Oreo</option>
                        </select>
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" value="Simpan" name="update">
            </form>
        </div>
    </div>

    <footer style="margin-top: 50px; margin-bottom: 0px;">
        <div class="container">
            <p style="padding: 30px; text-align:center; color: white;"> <a href="" data-bs-toggle="modal" data-bs-target="#nama">Filia_1202204196</a></p>
        </div>
    
</body>
</html>