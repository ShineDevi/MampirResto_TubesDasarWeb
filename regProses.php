<?php
    include "koneksi.php";

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $uname = $_POST['uname'];
    $pass = $_POST['psw'];

    $sql = "INSERT INTO user(nama, username, psw, telepon, level) VALUES('$name','$uname', md5('$pass'), '$phone',2)";

    if(mysqli_query($connect, $sql)){
        echo '<script type="text/JavaScript"> 
        alert("Anda Berhasil Registrasi!");
        document.location.href="index.html"
    </script>';?>
    <?php
    }else{
        echo '<script type="text/JavaScript"> 
        alert("Anda Gagal Registrasi!");
        document.location.href="regForm.html"
    </script>';?>
    <?php
        echo mysqli_error($connect);
    }
?>