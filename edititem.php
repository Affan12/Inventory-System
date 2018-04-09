<?php
if (isset($_GET['id'])) {
try {
require ("db.php");
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * from items where i_id='$id'");
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$desc = $row['i_desc'];
$supp = $row['i_price'];
$qty = $row['i_qty'];
$sold = $row['i_sold'];
$cno = $row['i_cno'];
$date = $row['i_date'];
}

catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}
?>


<form method="post" action="edititem-exec.php">
<input type="hidden" value="<?php echo $id; ?>" name="id">
<fieldset>
<legend>Update Item</legend>
<table>
<tr>
	<td>Description</td>
	<td><input type="text" 	name="desc" required value="<?php echo $desc; ?>" autocomplete="off"></td>
</tr>

<tr>
	<td>Price</td>
	<td><input type="text" 	name="supp" required value="<?php echo $supp; ?>" autocomplete="off"></td>
</tr>
<tr>
	<td>Current Quantity</td>
	<td><input type="text" 	name="cqty" required value="<?php echo $qty; ?>" autocomplete="off"></td>
</tr>

<tr>
	<td>Sold</td>
	<td><input type="text" 	name="sold" required value="<?php echo $sold; ?>" autocomplete="off"></td>
</tr>
<tr>
	<td>Challan No</td>
	<td><input type="text" 	name="cno" required value="<?php echo $cno; ?>" autocomplete="off"></td>
</tr>

<tr>
	<td>Date</td>
	<td><input type="text" 	name="date" required value="<?php echo $date; ?>" autocomplete="off"></td>
</tr>

<tr>
	<td></td>
	<td><input type="submit" name="editbtn" value="Update Item"></td>
</tr>
</table>
</fieldset>
</form>