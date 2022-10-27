<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="styleTrans.css">
</head>
<body>
        <?php
            include "koneksi.php";
            $query = "SELECT p.orderid,p.menuid, p.userid, p.tanggal, p.jumlah, 
            p.total, m.namamenu, m.harga,m.keterangan, 
            u.nama, u.username, u.telepon FROM pemesanan p 
            JOIN menu m on m.menuid=p.menuid
            JOIN user u on u.userid=p.userid
            WHERE orderid=(select max(orderid) from pemesanan);";
            $result = mysqli_query($connect, $query);
        ?>

    <div class="kotak">
        <form enctype="multipart/form-data" method="POST" action="transaksiProses.php">
        <div class="container">
          <div class="container2">
            <H2><center>Transaksi</center></H2>
            <?php
                    while($row=mysqli_fetch_array($result)){
            ?>
            <div class="row">
              <div class="col-25">
                <label for="id"><b>ID Order</b></label>
              </div>
              <div class="col-75">
                <input type="number" name="orderid" value="<?php echo $row['orderid'];?>" readonly> 
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="nama"><b>Pelanggan</b></label>
              </div>
              <div class="col-75">
                <input type="text" name="nama" value="<?php echo $row['nama'];?>" readonly><br>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="harga"><b>Telepon</b></label>
              </div>
              <div class="col-75">
                <input type="number" name="telepon" value="<?php echo $row['telepon'];?>" readonly><br>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="keterangan"><b>Meng-order</b></label>
              </div>
              <div class="col-75">
                <input type="text" name="namamenu" value="<?php echo $row['namamenu'];?>" readonly><br>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="harga"><b>Jumlah</b></label>
              </div>
              <div class="col-75">
                <input type="number" name="jumlah" value="<?php echo $row['jumlah'];?>" readonly><br>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="harga"><b>Total Beli</b></label>
              </div>
              <div class="col-75">
                <input type="number" name="total" value="<?php echo $row['total'];?>" readonly><br>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="harga"><b>Bayar</b></label>
              </div>
              <div class="col-75">
                <input type="number" name="bayar"><br>
              </div>
            </div>
            <div class="row">
              <div class="group">
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