<?php
if(isset($_POST['editbtn'])) {
$id = $_POST['id'];
$desc = $_POST['desc'];
$supp = $_POST['supp'];
$cno = $_POST['cno'];
$date = $_POST['date'];
$cqty = $_POST['cqty'];
$sold = $_POST['sold'];
try {
require("db.php");
$stmt = $conn->prepare("UPDATE items SET i_desc='$desc', i_price='$supp', i_date='$date', i_cno='$cno', i_sold='$sold', i_qty='$cqty' WHERE i_id='$id'");
$stmt->execute();
header ('Location: index.php');
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

}
?>