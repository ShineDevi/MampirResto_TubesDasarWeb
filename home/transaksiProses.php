<?php
    include "koneksi.php";

    $total = $_POST['total'];
    $bayar = $_POST['bayar'];

    if($bayar==$total){
        // echo "Berhasil update data";
        echo '
        <script type="text/JavaScript"> 
            alert("Transaksi Berhasil Dilakukan!");
            document.location.href="home.html"
        </script>';
?>
<?php
    }
    elseif ($bayar>$total) {
        echo '
        <script type="text/JavaScript"> 
            alert("Harap inputkan jumlah bayar sesuai total");
            document.location.href="transaksi.php"
        </script>';
    }
    else{
        $kurang=$total-$bayar;
        // echo "Gagal update data". mysqli_error($connect);
        echo '
        <script type="text/JavaScript"> 
            alert("Maaf, jumlah bayar kurang ");
            document.location.href="transaksi.php"
        </script>';
    }
?>