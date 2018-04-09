<?php
if(isset($_POST['sellbtn'])) {
try {
require ("db.php");
$date = date('d/m/Y');
$desc = $_POST['itemdesc'];
$iqty = $_POST['itemqty'];
$pert = $_POST['pert'];
$dept = $_POST['dept'];

$rno = $_POST['rno'];
$stmt = $conn->prepare("SELECT * from items where i_id='$desc'");
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$item_name = $row['i_desc'];
$id = $row['i_id'];
$qty = $row['i_qty'];
$price= $row['i_price'];
$updatedqty = $qty - $iqty;

$stmt = $conn->prepare("UPDATE items SET i_qty='$updatedqty', i_sold='$iqty' where i_id='$desc'");
$stmt->execute();
$stmt = $conn->prepare("INSERT INTO sales SET s_name='$item_name', i_id='$desc', date='$date', qty='$iqty', perticular='$pert', department='$dept', rno='$rno',balance='$updatedqty'");
$stmt->execute();
//$stmt = $conn->prepare("INSERT INTO sales (balance) SELECT i_qty FROM items ");
//$stmt->execute();
header ('Location: index.php');
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}
?>