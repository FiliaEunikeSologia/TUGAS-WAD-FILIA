<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<?php
include ('../config/insert.php');
?>

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
                              <a class="nav-link active" href="ListBook-Filia.php" style="color: white; padding-left:30px;font-weight:500;">MyBookStore</a>
                        </li>
                  </ul>
            </div>
            </div>
      </nav>


<div class="buku" style="margin: 100px 100px;">

      <h3><b>My Book Store</b></h3>
      <p>List Buku Filia-1202204196</p>
  
      <form action="../config/insert.php" method="POST" style="padding-top: 30px;">
      <div class="mb-3">
            <label for="id_buku"><b>ID Buku</label>
            <input type="text" id="id_buku" name="id_buku" class="form-control" placeholder="001">
      </div>

      <div class="mb-3">
            <label for="judul_buku">Judul Buku</label>
            <input type="text" id="judul_buku" name="judul_buku" class="form-control" placeholder="WAD CAPE BANGET :(">
      </div>

      <div class="mb-3">
            <label for="genre_buku">Genre Buku</label>
            <input type="text" id="genre_buku" name="merk" class="form-control" placeholder="Fiksi">
      </div>

      <div class="mb-3">
            <label for="harga_buku">Harga Buku</label>
            <input type="date" id="harga_buku" name="harga_buku" class="form-control" placeholder="Rp ">
      </div>


      <a href="ListBuku-Filia.php"><button type="submit" class="btn btn-primary" name="simpan" value="Simpan" style="margin-top: 30px; width: 110px;">Selesai</button></a>
            </form>        
      </div>

</body>
</html>