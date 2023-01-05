<?php

include('../config/connector.php');
    
      function adding($inputdata){
            global $connect;
            $buku = $inputdata['id_buku'];
            $judul = $inputdata['judul_buku'];
            $penerbit = $inputdata['penerbit_buku'];
            $genre = $inputdata['genre_buku'];
            $harga = $inputdata['harga']; 
            
        
        // if(!$fotomobil){return false;}
    
            // $status_pembayaran = $inputdata['status_pembayaran'];
            $query = "INSERT INTO buku VALUES('', '$buku','$judul','$penerbit','$genre','$harga')";
    
      mysqli_query($connect,$query);

            return mysqli_affected_rows($connect);
      }

      // function upfoto(){
      //       $fotofile = $_FILES['foto_mobil']['nama_mobil'];
      //       $fototmpname = $_FILES['foto_mobil']['tmp_name'];

      //       move_uploaded_file("$fototmpname", "../asset/images/" . $fotofile);
      //       return $fotofile;
      // }


?>