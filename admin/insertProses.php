<?php
    include "koneksi.php";

    $menuid =$_POST['menuid'];
    $namamenu =$_POST['namamenu'];
    $harga = $_POST['harga'];
    $foto = $_FILES['foto']['name'];//mengambil nama file yg diupload
    $tmp = $_FILES['foto']['tmp_name'];//mengambil path folder sementara file yang diupload
    $keterangan =$_POST['keterangan'];

    //merename nama foto dengan menmabhkan tanggal dan jam upload
    $fotobaru = date('dmYHis').$foto;

    //memilih path unutk menyimpan foto
    
    $path= "images/".$fotobaru;

    //proses mengupload data
    if(move_uploaded_file($tmp, $path)){
        $sql = "INSERT INTO menu(menuid, namamenu, harga, foto, keterangan)
        VALUES('$menuid', '$namamenu', '$harga', '$fotobaru', '$keterangan')";
    }else{
        echo '
        <script type="text/JavaScript"> 
            alert("Wahh! Sepertinya Ada Data Yang Belum Diisi");
            document.location.href="insertForm.html"
        </script>';
    }

    if(mysqli_query($connect, $sql)){
        // echo "Data berhasil ditambahkan";
        echo '
        <script type="text/JavaScript"> 
            alert("Data Berhasil Ditambahkan!");
            document.location.href="insertForm.html"
        </script>';
?>
    <!-- <a href="index.php">Lihat Data</a> -->
<?php
    }
    else{
        // echo "Data gagal ditambahkan <br>" .mysqli_error($connect);
        echo '
        <script type="text/JavaScript"> 
            alert("Data Gagal Ditambahkan!!");
            document.location.href="insertForm.html"
        </script>';
    }
    mysqli_close($connect);
    
?>