<!DOCTYPE html>
<html>
<title>Home Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styleHome.css">
<body>
<!-- Sidebar -->
<div class="w3-sidebar bg-sidebar w3-bar-block" style="width:20%">
  <h3 class="w3-bar-item my-text-teal"><b>Admin</b></h3><br>
  <a href="index.php" class="w3-bar-item w3-button">Menu</a>
  <a href="orderCRUD.php" class="w3-bar-item w3-button">Order</a>
  <a href="userCRUD.php" class="w3-bar-item w3-button">User</a>
  <div class="logout">
    <a href="../index.html">Log Out</a>
  </div>
</div>

<!-- Page Content -->
<div style="margin-left:20%">

<div class="w3-container w3-teal">
  <br><h1><center><b>Order</b></center></h1><br><br>
</div><br>
<div class="w3-container">
    <table>
        <tr>
            <th>ID Order</th>
            <th>Nama Menu</th>
            <th>Nama User</th>
            <th>Telepon</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
        </tr>
        <?php
            include "koneksi.php";
            $query ="SELECT p.orderid, m.namamenu, u.nama, u.telepon, p.tanggal, 
            p.jumlah,m.harga, (p.jumlah*m.harga)total from pemesanan p
            inner join menu m on p.menuid=m.menuid
            inner join user u on p.userid=u.userid";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){    
        ?>
        <tr>
            <td><?php echo $row["orderid"]?></td>
            <td><?php echo $row["namamenu"]?></td>
            <td><?php echo $row["nama"]?></td>
            <td><?php echo $row["telepon"]?></td>
            <td><?php echo $row["tanggal"]?></td>
            <td><?php echo $row["jumlah"]?></td>
            <td><?php echo $row["harga"]?></td>
            <td><?php echo $row["total"]?></td>
        </tr>
        <?php
                }
            }
            else{
                echo "0 result";
            }
        ?>
    </table>
</div>

</div>
      
</body>
</html>
