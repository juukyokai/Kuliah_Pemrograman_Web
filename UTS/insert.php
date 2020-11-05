<?php
    include("db_connect.php");
    
    $sku = $_POST['sku'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    
    // Attempt insert query execution
    $sql_insert = "INSERT INTO barang (sku,nama,kategori,jumlah_stok,harga_satuan) VALUES (". $sku .", ". $nama .", ". $kategori .", ". $stok .", ". $harga .")";
    $conn->query($sql_insert);
?>
