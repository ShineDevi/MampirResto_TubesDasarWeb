<?php
    include "koneksi.php";

    $username=$_POST['username'];
    $password=md5($_POST['psw']);

    $query="SELECT * FROM user WHERE username='$username' and psw='$password'";
    $result=mysqli_query($connect, $query);
    $cek=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);

    if($row['level']==1){
        if($cek){
            echo '
            <script type="text/JavaScript"> 
                alert("Anda Berhasil Login!");
                document.location.href="admin/index.php"
            </script>';
            // echo "Anda berhasil login. Silakan menuju ";
            ?>
            <!-- <a href="../home/home.html">Halaman HOME</a> -->
            
        <?php
        }else{
            echo '
            <script type="text/JavaScript"> 
                alert("Anda gagal login. Silakan melakukan Login kembali!!");
                document.location.href="index.html"
            </script>';
            // echo "Anda gagal login. Silakan ";?>
            <!-- <a href="login.html">Login kembali</a> -->
        <?php
            echo mysqli_error($connect);
        }
        ?>
        
    <?php
    }else if($row['level']==2){
        if($cek){
            echo '
            <script type="text/JavaScript"> 
                alert("Anda Berhasil Login!");
                document.location.href="home/home.html"
            </script>';
            // echo "Anda berhasil login. Silakan menuju ";
            ?>
            <!-- <a href="../home/home.html">Halaman HOME</a> -->
            
        <?php
        }else{
            echo '
            <script type="text/JavaScript"> 
                alert("Anda gagal login. Silakan melakukan Login kembali!!");
                document.location.href="index.html"
            </script>';
            // echo "Anda gagal login. Silakan ";?>
            <!-- <a href="login.html">Login kembali</a> -->
        <?php
            echo mysqli_error($connect);
        }
        ?>
    <?php
        echo mysqli_error($connect);
    }else{
        echo '
        <script type="text/JavaScript"> 
            alert("Anda gagal login. Silakan melakukan Login kembali!!");
            document.location.href="index.html"
        </script>';
        // echo "Anda gagal login. Silakan ";?>
        <!-- <a href="login.html">Login kembali</a> -->
    <?php
        echo mysqli_error($connect);
    }
?>