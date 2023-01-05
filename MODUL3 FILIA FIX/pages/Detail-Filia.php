<?php 
      include('../config/connector.php');
      if (isset($_GET['id'])) {
            $title = "Daftar Buku";
            $id = $_GET["id"];
            $mobil = querydata("SELECT * FROM tokobuku WHERE id_buku = '$id'");
            var_dump ($buku);
      }else{
            echo 'data kosong';
      }
     
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
</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary " >
      <div class=" d-flex justify-content-left container-fluid">
            <ul class="navbar-nav">
                  <li class="nav-item" ><a class="nav-link " href="Home-Filia.php" style="color:white;" >Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="ListBuku-Filia.php" style="color:white;" >MyBookStore</a></li>
            </ul>
      </div>
</nav>
               
<div class="row mx-auto w-75 p-3 mt-2">
      <div class="col-6 text-left">
            <h1 style="font-size:300%" alt="left">Buku Catatan<br> </h1>
            <p style="font-size:90%" style="color:DDDDDD;"> Detail Buku Catatan</p>
            <img src="https://st.depositphotos.com/1637056/2958/i/450/depositphotos_29589345-stock-photo-open-blank-notebook-on-grunge.jpg" alt="Card image cap" style="width:340px;height:210px;">
      </div>

<div class="col-6 text-left">
      <div class="container">
            <from action="postoutput.php" method="POST">

            <form action="../config/insert.php" method="POST" style="padding-top: 30px;">
      <div class="mb-3">
            <label for="id_buku"><b>ID Buku</label>
            <input type="text" id="id_buku" name="id_buku" class="form-control" placeholder="001" disabled>
	</div>

      <div class="mb-3">
      <label for="judul_buku">Judul Buku</label>
		<input type="text" id="judul_buku" name="judul_buku" class="form-control" placeholder="WAD CAPE BANGET" disabled>
	</div>

      <div class="mb-3">
		<label for="genre_buku">Genre Buku</label>
		<input type="text" id="genre_buku" name="genre_buku" class="form-control" placeholder="Fiksi" disabled>
	</div>
      
      <div class="mb-3">
            <label for="harga_buku"><b>Harga Buku</b></label>
            <input type="text" name="harga_buku" id="foto" class="form-control" placeholder="Rp " disabled>
      </div>
   

      <div class="mb-3">
            <div class="d-flex left">
                  <a class ="btn btn-primary" href="../pages/Edit-Filia.php" >Edit</a>               
            </div>
      </div>

</div>
