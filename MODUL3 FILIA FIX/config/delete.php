<?php
            $connect = mysqli_connect("localhost:8080", "root","", "tokobuku");

            $id=$_GET['id'];
            
            $query = mysqli_query($connect, "DELETE FROM buku WHERE id_buku='$id'");

      header("Location:../pages/ListBuku-Filia.php");

            if($query) {
                echo "<script>alert('Berhasil Menghapus')</script>";
                echo "<meta http-equiv='refresh' content='1 url=../pages/ListCar-Filia.php'>";
            } 
            
            else {
                
            echo "<script>alert('Gagal Menghapus Data')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../pages/ListCar-Filia.php'>";
            }
?>
