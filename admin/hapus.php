<?php
    include "koneksi.php";

    $menuid =$_GET['menuid'];

    $query = "DELETE FROM menu WHERE menuid='$menuid'";
    $result = mysqli_query($connect, $query);

    if($result){
        // echo "Data berhasil dihapus";
        echo '
        <script type="text/JavaScript"> 
            alert("Data Berhasil Dihapus!");
            document.location.href="index.php"
        </script>';
?>
    <a href="index.php">Lihat Data</a>
<?php
    }
    else{
        // echo "Data gagal dihapus".mysqli_error($connect);
        echo '
        <script type="text/JavaScript"> 
            alert("Upss! Data Gagal Dihapus!");
            document.location.href="index.php"
        </script>';
    }
?>