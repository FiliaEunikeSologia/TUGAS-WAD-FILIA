<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddBook</title>

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
                <a class="nav-link" aria-current="page" href="{{url('/Home-Filia')}}" style=" padding-left: 70px; font-weight:500;">Home</a>
              </li>
              <li class="nav-item">
            <a class="nav-link active" href="{{url('/Add-Filia')}}" style="color: white; padding-left:30px;font-weight:500;">MyCar</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    

    <div class="mobil" style="margin: 100px 100px;">
        <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> -->

        <h3><b>My BOOKSTORE</b></h3>
        <p>List Toko buku FiliaEunikeSologia_1202204196</p>
        
        <form action="/layouts" method="POST" style="padding-top: 30px;" enctype="multipart/form-data">
        @csrf
        
            <div class="mb-3">
              <label for="nama_mobil" class="form-label" style="font-size :large;"> <b>Nama Buku</b></label>
              <input type="text" class="form-control" id="nama_mobil" name="nama_mobil"aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="pemilik_mobil" class="form-label" style="font-size :large;"> <b>Penulis</b></label>
              <input type="text" class="form-control" id="pemilik_mobil" name="pemilik_mobil"aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="nama_merk" class="form-label" style="font-size :large;"> <b>Penerbit</b></label>
              <input type="text" class="form-control" id="merk" name="merk"aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="tanggal_beli" class="form-label" style="font-size :large;"> <b>Tanggal Publish</b></label>
              <input type="date" class="form-control" id="tanggal_beli" name="tanggal_beli"aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label"style="font-size :large;"> <b>Sinopsis</b></label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label"style="font-size :large;"> <b>Foto</b></label>
                <input class="form-control" type="file" id="formFile" name="foto_mobil">
            </div>

            <div>
                <label for="formFile" class="form-label"style="font-size :large;"> <b>Status Pembayaran</b></label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_pembayaran" id="lunas" value="lunas">
                    <label class="form-check-label" for="lunas">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_pembayaran" id="belumlunas" value="belum lunas">
                    <label class="form-check-label" for="belumlunas">Belum Lunas</label>
                </div>
            </div>

            <!-- <button type="submit" class="btn btn-primary" name="simpan" value="Simpan" style="margin-top: 30px; width: 110px;">Selesai</button> -->
            <input type="submit" class="btw-btw primary btn-lg" value="Simpan">

            <!-- <button type="submit" class="btn btn-primary" name="simpan" style="margin-top: 30px; width: 110px;">Selesai</button> -->

          </form>        
    </div>

</body>
</html>