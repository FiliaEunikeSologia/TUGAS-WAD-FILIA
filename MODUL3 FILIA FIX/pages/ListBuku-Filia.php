<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
      <nav class="navbar navbar-expand-lg fixed-top bg-primary">
            <div class="container-fluid">
                  <a class="navbar-brand" href="#"> </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                              <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="Home-Filia.php" style=" padding-left: 70px; font-weight:500;">Home</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active" href="ListBuku-Filia.php" style="color: white; padding-left:30px; font-weight:500;">MyBookStore</a>
                              </li>
                        </ul>
                  </div>
      <a href="Add-Filia.php" class="btn me-md-2" style="width: 110px; background-color: white; color:blue; font-weight: 600;">Add Book</a>
            </div>
      </nav>

      <div class="buku" style="margin: 100px 100px;">

      <h3><b>My Book Store</b></h3>
      <p>List Book Store WAD Filia-1202204196</p>

            <div  class="row justify-content-left">

      
<?php
      require('../config/connector.php');
      $query = "SELECT * FROM buku ORDER BY id_buku";
      $filia = $connect->prepare($query);
      $filia->execute();
      $res1 = $filia->get_result();

      while ($row = $res1->fetch_assoc()) {
            $buku = $row["id_buku"];
            $judul = $row["judul_buku"];
            $penerbit = $row["penerbit_buku"];
            $genre = $row["genre_buku"];
            $harga = $row["harga_buku"]; 
?>



<div class="col-5 " style="padding-top: 30px; margin-left: 0; margin-right: 15px; ">
      <div class="card shadow p-1 bg-white rounded" style="width: 23rem; border-radius: 20px; border-style: none;">
      <div style="margin: 15px 15px; border-radius : 20px;">
            
</div>
      
      <div class="card-body">
            <h5><?= $judul;?></h5>
            <a href="Detail-Filia.php" class="btn btn-primary" style="border-radius: 50px; width: 140px;">Detail</a>
            <a href="../config/delete.php" class="btn btn-danger" style="border-radius: 50px; width: 140px; margin-left: 20px;">Delete</a>
      </div>
      </div>
</div>
            
      <?php } ?>

      </div><h6 style="margin-top: 60px;">
      
      <?php 
      $query  = mysqli_query($connect, "SELECT * FROM buku");
      $count  = mysqli_num_rows($query);
      echo "Jumlah Buku: $count";
      
      ?> 
      </h6>
      </div>
<br>
</body>
</html>

