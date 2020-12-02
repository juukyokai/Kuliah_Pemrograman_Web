<?php
    include('db_connect.php');
    $ID = $_POST['ID'];
    $del_query = "DELETE FROM education WHERE ID='$ID'";
    
    if ($conn->query($del_query) === FALSE)
    {
        echo "Error deleting data : " . $conn->error;
    }
    $conn->close();
?>