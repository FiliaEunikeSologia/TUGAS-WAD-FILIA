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
            <li class="nav-item" ><a class="nav-link " href="../pages/Home-Filia.php" style="color:white;" >Home</a></li>
                <li class="nav-item"><a class="nav-link" href="../pages/ListBuku-Filia.php" style="color:white;" >MyBookStore</a></li>
                <!-- <li class="nav-item" ><a class="nav-link " href="../pages/Login-Filia" style="color:white;" >Login</a></li> -->
                
            </ul>
        </div>
        <div class=" d-flex justify-content-right container-fluid">
        <ul class="navbar-nav">
            <a href="Add-Filia.php" class="btn me-md-2" style="width: 110px; background-color: white; color:blue; font-weight: 600;">Add Book</a>
            <a href="Login-Filia.php" class="btn me-md-2" style="width: 110px; background-color: white; color:blue; font-weight: 600;">Login</a>
    
        </ul>
        </div>
    </nav>
      
    <div class="container text-center" style="padding : 60px 7%">
        <div class="row">
            <div class="col" style="text-align:left">
            <h3 id="dashboard" style=""><br><br><b>Selamat Datang Di <br> Book Store WAD Filia</b></h3>
            <p style="opacity:90%;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Semoga sudah benar </p>
<br>
<br>

    <li class="list-group-item"><a href="ListBuku-Filia.php" class="btn btn-primary">MyBookStore</a></li>
    <br>
    <div class="d-flex left">
        <img src="../asset/images/logo-ead.png" alt="LogoEAD" style="height: 25px" width= "80px"/>
        <b style="text-decoration: none">Filia_1202204196</b>
            <!-- <p class="mt-1 mb-1" style="font-size: 14px"></p> -->
            
            <!-- <p><?= $valuename?></p> -->
    </div>
        </div> 
        
    <div class="col">
        <img width="540" height="360" src = "https://media.npr.org/assets/img/2020/12/14/gettyimages-1229641067-ccdab34d9d10813b556618d30a7fd1c4f1d6bf96-s1100-c50.jpg">
    </div>
        </div>
    </div>

</body>
</html>