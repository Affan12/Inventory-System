<?php
if(isset($_POST['updatebtn'])) {
try {
require ("db.php");
$desc = $_POST['itemdesc'];
$iqty = $_POST['itemqty'];
$supplier = $_POST['items'];
$challan = $_POST['itemc'];
$date = $_POST['itemd'];

$stmt = $conn->prepare("SELECT * from items where i_id='$desc'");
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$id = $row['i_id'];
$qty = $row['i_qty'];
$updatedqty = $qty + $iqty;

$stmt = $conn->prepare("UPDATE items SET i_qty='$updatedqty',i_date='$date', i_price='$supplier', i_cno='$challan',i_cqty='$iqty' where i_id='$desc'");
$stmt->execute();
$stmt = $conn->prepare("INSERT INTO in_items (item_name,supplier,challan,date,qty) SELECT i_desc,i_price,i_cno,i_date,i_cqty FROM items");
$stmt->execute();
header ('Location: index.php');
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}
?>