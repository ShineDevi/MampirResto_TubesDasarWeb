<!DOCTYPE html>
<html>
<title>Home Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styleHome.css">
<head>
    <script type="text/javascript">
        function message(){
            alert("Selamat Datang di Home Admin!")
        }
    </script>
</head>
<body onload="message()">
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
  <br><h1><center><b>Menu</b></center></h1><br><br>
</div><br>
<div class="w3-container">
  <div class="tambah">
    <a href="insertForm.html"> Tambah Data</a>
  </div>

    <table>
        <tr>
            <th>Id</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";

            $query ="SELECT * FROM menu";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){    
        ?>
        <tr>
            <td><?php echo $row["menuid"]?></td>
            <td><?php echo $row["namamenu"]?></td>
            <td><?php echo $row["harga"]?></td>
            <td><?php echo '<img src = "images/'.$row['foto'].'">'?></td>
            <td><?php echo $row["keterangan"]?></td>
            <td>
                <div class="aksi">
                    <div class="edit">
                        <a href="editForm.php?menuid=<?php echo $row['menuid'];?>">Edit</a>
                    </div>
                    <div class="hapus">
                        <a href="hapus.php?menuid=<?php echo $row['menuid'];?>">Hapus</a>
                    </div>
                </div>
            </td>
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
