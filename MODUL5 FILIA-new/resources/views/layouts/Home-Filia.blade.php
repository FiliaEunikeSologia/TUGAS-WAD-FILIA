
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- <link rel="stylesheet" href="style.css"> -->
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
                <a class="nav-link active" aria-current="page" href="/{{url('/Home-Filia')}}" style="color: white; padding-left: 70px; font-weight:500;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{url('/List-Filia')}}" style="padding-left:30px; font-weight:500;">MyBook</a>
              </li>
            </ul>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{url('/Add-Filia')}}" button type="button" class="btn btn-light text-secondary ">Add Book</a>
                <div class="dropdown">
                    <button class="btn btn-light text-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Book
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="Logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


        <div class="container text-center" style="margin-top: 150px; margin-bottom:150px" >
          <div class="row justify-content-center">
            <div class="col-5" style="text-align: left;">
                
                <h1 style="text-transform: capitalize; margin-top: 80px; font-weight:700; letter-spacing:1px ;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                Selamat Datang di Toko Buku CAPE BANGET</h1>
                <p style="margin : 20px 0 60px;">Toko Buku ini memiliki berbagai macam buku yang Anda inginkan</p>

                <a href="{{url('/List-Filia')}}" class="btn btn-primary btn-lg" style="width: 130px;">MyBook</a>
                <br>
                <div class="row justif-content-center" style="width: 1000px; margin-top: 30px;">                    
                    <p style="margin-top:30px;">
                        <img src="images/logo-ead.png" alt="logo EAD" style="width: 100px; margin-right:30px; position: relative;">
                        FiliaEunikeSologia_1202204196
                    </p>
                </div>
                
            </div>
            <div class="col-6">
              <img src="images/perpus.jpg" alt="gambar aston martin" style="width:500px;height: max-content; border-radius: 10px; ">       
            </div>
          </div>
        </div>



</body>
</html>