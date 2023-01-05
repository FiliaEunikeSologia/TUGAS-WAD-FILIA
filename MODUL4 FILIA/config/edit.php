<?php
                $connect = mysqli_connect("localhost:8080", "root","", "tokobuku");
                $id=$_GET['id'];
                $query=mysqli_query($connect, "SELECT * FROM buku WHERE id_buku = $id");
                $selects=mysqli_fetch_array($query);
            ?>
            <h1><b>Edit</b></h1>
            <p>Edit Buku <?php echo $selects['judul_buku'] ?></p>
            <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                <img src="foto/<?php echo $selects['foto_buku']?>" alt="No Image"></img>
                <form action="/update.php?id=<?php echo $selects['id_buku']?>" method="POST" enctype='multipart/form-data'>

                    
                  <div class="mb-3">
                        <label for="judul_buku"><b>Judul Buku</b></label>
                        <input type="text" name="judul_buku" class="form-control form-control-readonly" value="<?php echo $selects['judul_buku']?>">
                    </div>
                    
                  <div class="mb-3">
                        <label for="penerbit_buku"><b>Penerbit Buku</b></label>
                        <input type="text" name="penerbit_buku" class="form-control"value="<?php echo $selects['penerbit_buku']?>">
                    </div>
                    
                  <div class="mb-3">
                        <label for="genre_buku"><b>Genre Buku</b></label>
                        <input type="text" name ="genre_buku" class="form-control" value="<?php echo $selects['genre_buku']?>">
                    </div>
                    
                  <div class="mb-3">
                        <label for="harga_buku"><b>Harga Buku</b></label>
                        <input type="text" name="harga_buku" class="form-control" value="<?php echo $selects['harga_buku']?>">
                    </div>
                      
                  <div class="d-grid gap-2">
                        <input class="btn btn-primary" type="submit" name="Simpan" value="Simpan">                   
                  </div>
                  </form>
            </div>
            