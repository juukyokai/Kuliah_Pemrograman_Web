<?php
    include('db_connect.php');
	$Y_BEGIN=$_POST['Y_BEGIN'];
	$Y_END=$_POST['Y_END'];
	$NAMA_ALMAMATER=$_POST['NAMA_ALMAMATER'];
	$sql_insert = "INSERT INTO `education`( `Y_BEGIN`, `Y_END`, `NAMA`) VALUES ('$Y_BEGIN','$Y_END','$NAMA_ALMAMATER')";
	if ($conn->query($sql_insert) === FALSE) {
		echo "Error inserting into database : " . $conn->error;
	}
	$conn->close();
?>