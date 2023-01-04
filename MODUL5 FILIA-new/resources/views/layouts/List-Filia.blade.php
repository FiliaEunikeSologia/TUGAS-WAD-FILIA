

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCar Page</title>

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
                <a class="nav-link active" href="ListCar-Filia.php" style="color: white; padding-left:30px; font-weight:500;">MyCar</a>
              </li>
            </ul>
          </div>
        <a href="Add-Filia.php" class="btn me-md-2" style="width: 110px; background-color: white; color:blue; font-weight: 600;">Add Car</a>
            

        </div>
    </nav>

    <div class="mobil" style="margin: 100px 100px;">
        <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> -->

        <h3><b>My BOOKSTORE</b></h3>
        <p style="margin-top: 20px">List Buku FiliaEunikeSologia_1202204196</p>

        <div  class="row justify-content-left">

            <?php
                $query = mysqli_query($connect, "SELECT * FROM showroom_filia_table ORDER BY id_mobil");
  
                while ($record = mysqli_fetch_array($query)) {
            
            ?>

            <div class="col-5 " style="padding-top: 30px; margin-left: 0; margin-right: 15px; ">
                <div class="card shadow p-1 bg-white rounded" style="width: 23rem; border-radius: 20px; border-style: none;">
                    <img class="card-img-top p-3" src="../asset/images/<?= $record["foto_mobil"];?>" style="width:360px; height:260px; border-radius:20px;"  alt="foto mobil"> 
                    
                    <div class="card-body">
                    <input type="hidden" name="id_mobil" value="<?= $record['id_mobil']; ?>" />
                        <h5><?= $record['nama_mobil']; ?></h5>
                        <p class="card-text" ><?= $record['deskripsi']; ?></p>
                        <div class="row justify-content-start">
                          <div class="col-4">
                            <form action="Detail-Filia.php" method="post" >
                              <input type="hidden" name="id_mobil" value="<?= $record['id_mobil']; ?>" />
                              <input style="width: 100%" type="submit" class="btn btn-primary rounded-pill" value="Detail">
                            </form>
                          </div>
                          <div class="col-4">
                            <form action="../config/delete.php" method="post" >
                              <input type="hidden" name="id_mobil" value="<?= $record['id_mobil']; ?>" />
                              <button style="width: 100%" type="submit" class="btn btn-danger rounded-pill">Delete</button>
                            </form>
                          </div>
                        </div>

                        
                    </div>
                </div>
            </div>
            
            <?php } ?>

        </div>
        <h6 style="margin-top: 60px;"><?php 
        $query  = mysqli_query($connect, "SELECT * FROM showroom_filia_table");
        $count  = mysqli_num_rows($query);
        echo "Jumlah mobil: $count";?></h6>

    </div>

</body>
</html>

