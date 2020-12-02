<?php
    include('db_connect.php');
    $sql_education = "SELECT * FROM education";

    //executing education query
    $result = $conn->query($sql_education);
    echo "";
    while ($row_education = mysqli_fetch_array($result)){
        echo ("
        <li class='padding-small'>
            (" . $row_education['Y_BEGIN'] . "-" . $row_education['Y_END'] . ") " . $row_education['NAMA'] ."
            <button type='submit' href='' class='' name='delete'>DELETE</button>
        </li>
        ");
    }
?>