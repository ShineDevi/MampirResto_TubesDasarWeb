<?php
    include "koneksi.php";
    $menuid = $_POST['menu'];
    $query = "SELECT harga FROM menu WHERE menuid='$menuid'";
    $result = mysqli_query($connect, $query);

    $userid=$_POST['userid'];
    $tgl=$_POST['tanggal'];
    $jml=$_POST['jumlah'];
    $total=0;
        while($row=mysqli_fetch_array($result)){
            $total=$row['harga']*$jml;
        }

    $sql = "INSERT INTO pemesanan(menuid, userid, tanggal, jumlah, total) VALUES('$menuid','$userid', '$tgl', '$jml', '$total')";

    if(mysqli_query($connect, $sql)){
        echo '<script type="text/JavaScript"> 
        alert("Berhasil melakukan pemesanan!");
        document.location.href="transaksi.php"
        </script>';
        // echo "Berhasil melakukan pemesanan! ";?>
        <!-- <a href="home.html">Kembali ke Halaman Home</a> -->
    <?php
    }else{
        echo '<script type="text/JavaScript"> 
        alert("Gagal melakukan pemesanan!");
        document.location.href="pemesanan.html"
        </script>';
        // echo "Gagal melakukan pemesanan! ";?>
        <!-- // <a href="pemesanan.html">Kembali</a> -->
    <?php
        echo mysqli_error($connect);
    }
?>