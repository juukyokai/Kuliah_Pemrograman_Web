<?php
    include("db_connect.php");
    if(isset($_POST['harga'])){
        //query
        $sql_barang = "SELECT * from barang ORDER BY harga";
    }else{
        $sql_barang = "SELECT * from barang";
    }
    
    if(isset($_POST['save'])){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $sku = $_POST['sku'];
            $nama = $_POST['nama'];
            $kategori = $_POST['kategori'];
            $stok = $_POST['stok'];
            $harga = $_POST['harga'];
            
            //query
            $sql_insert = "INSERT INTO barang (sku,nama,kategori,jumlah_stok,harga_satuan) VALUES ('$sku','$nama','$kategori','$stok','$harga')";
      
            $conn->query($sql_insert);
        }
    }
?>

<DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>
            Barokah Mini Market
        </title>
    </head>
    <body class="base-text">
        <!-- sidebar -->
        <nav class="sidebar animate-left" style="z-index:3;width:300px; margin-left:-1px; margin-top:-25px" id="sidebar"><br>
            <div class="space clear row">
                <div class="column center">
                    <img src="asset/img1.jpeg" class="" style="width:75%">
                    <h3> Selamat Datang Pak Adi<h3>
                </div>
            </div>
            <hr>
            <div class="" style="padding-left:8px">
                <h3>Dashboard</h3>
            </div>
            <div class="item">
                <a href= class="item button lightblue link hover-black"><i class="fa fa-users fa-fw"></i>&nbsp; Overview</a>
                <a href="#" class="item button "><i class="fa fa-eye fa-fw"></i>&nbsp; Daftar barang</a>
            </div>
        </nav>

        <!-- Main Page -->
    </body>
</html>
<?php
    require("barang.php");
?>


