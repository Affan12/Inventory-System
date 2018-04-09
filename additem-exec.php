<?php
if(isset($_POST['addbtn'])) {
$desc = $_POST['desc'];

	try {
	require("db.php");
	$stmt = $conn->prepare("INSERT INTO items SET i_desc='$desc'");
	$stmt->execute();
	header ('Location: index.php');
	}
	catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
}
?>
