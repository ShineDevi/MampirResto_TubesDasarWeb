<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Menu</title>
    <link rel="stylesheet" href="styleInsert.css">
</head>
<body>
        <?php
            include "koneksi.php";
            $menuid = $_GET['menuid'];
            $query = "SELECT * FROM menu WHERE menuid='$menuid'";
            $result = mysqli_query($connect, $query);
        ?>

    <div class="kotak">
        <form enctype="multipart/form-data" method="POST" action="editProses.php">
        <div class="container">
          <div class="container2">
            <H2><center>Edit Menu</center></H2>
            <?php
                    while($row=mysqli_fetch_array($result)){
            ?>
            <div class="row">
              <div class="col-25">
                <label for="id"><b>ID</b></label>
              </div>
              <div class="col-75">
                <input type="number" name="menuid" value="<?php echo $row['menuid'];?>" readonly> 
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="nama"><b>Nama Menu</b></label>
              </div>
              <div class="col-75">
                <input type="text" name="namamenu" value="<?php echo $row['namamenu'];?>"><br>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="harga"><b>Harga</b></label>
              </div>
              <div class="col-75">
                <input type="number" name="harga" value="<?php echo $row['harga'];?>"><br>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="keterangan"><b>Keterangan</b></label>
              </div>
              <div class="col-75">
                <input type="text" name="keterangan" value="<?php echo $row['keterangan'];?>"><br>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="foto"><b>Foto</b></label>
              </div>
              <div class="col-75">
                  <input type="file" name="foto" class="custom-file-upload" accept="image/* value="<?php echo $row['foto'];?>"><br>
                </div>
            </div>
            <div class="row">
              <div class="group">
                <div class="back">
                  <a href="index.php"><b>Back</b></a>
                </div>
                  <button type="submit" class="button" name="edit" value="Edit Data"><b>Submit</b></button>
              </div>
            </div>
            <?php
                    }
                ?>
          </div>
      </div>
    </div>
</body>
</html>