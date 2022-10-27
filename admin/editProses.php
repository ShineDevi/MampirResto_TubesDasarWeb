<?php
    include "koneksi.php";

    $menuid = $_POST['menuid'];
    $namamenu = $_POST['namamenu'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    //mengambil data foto yang dipilih dalam form
    $foto = $_FILES['foto']['name'];//mengambil nama file yg diupload
    $tmp = $_FILES['foto']['tmp_name'];

    if(empty($foto)){//jika user tidak memilih file foto pada form
        $query = "UPDATE menu SET namamenu='$namamenu', harga='$harga', keterangan='$keterangan'
        WHERE menuid ='$menuid'";
    }else{
        $fotobaru = date('dmYHis').$foto;
        $path = "images/".$fotobaru;

        if(move_uploaded_file($tmp, $path)){     
            $sql = "SELECT * FROM menu WHERE menuid='$menuid'";
            $hasil = mysqli_query($connect,$sql);

            if(mysqli_num_rows($hasil)>0){
                while($row = mysqli_fetch_array($hasil)){  
                    if(is_file("images/".$row['foto']))
                    unlink("images/".$row['foto']);
                }
            }
            //Proses ubah data
            $query = "UPDATE menu SET namamenu='$namamenu', harga='$harga', foto = '$fotobaru', keterangan='$keterangan'
            WHERE menuid ='$menuid'"; 
        } 
    }
    $result = mysqli_query($connect,$query);

    if($result){
        // echo "Berhasil update data";
        echo '
        <script type="text/JavaScript"> 
            alert("Data Berhasil di-Update!");
            document.location.href="index.php"
        </script>';
?>
    <a href="index.php">Lihat Data</a>
<?php
    }
    else{
        // echo "Gagal update data". mysqli_error($connect);
        echo '
        <script type="text/JavaScript"> 
            alert("Hufft, Data Gagal di-Update!");
            document.location.href="index.php"
        </script>';
    }
?>