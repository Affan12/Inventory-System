<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Delete Above -->

<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>
<link type="text/css" href="css/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="js/facebox.js"></script>
<link type="text/css" href="css/facebox.css" rel="stylesheet" />
<script>
  $(function() {
    $( "#tabs" ).tabs();
	$('a[rel*=facebox]').facebox();
	$( ".datepicker" ).datepicker();
  });
  
  $(document).ready(function(){
	// Write on keyup event of keyword input element
	$("#searchme").keyup(function(){
		// When value of the input is not blank
		if( $(this).val() != "")
		{
			// Show only matching TR, hide rest of them
			$("#searchTbl tbody>tr").hide();
			$("#searchTbl td:contains-ci('" + $(this).val() + "')").parent("tr").show();
		}
		else
		{
			// When there is no input or clean again, show everything back
			$("#searchTbl tbody>tr").show();
		}
	});
});
// jQuery expression for case-insensitive filter
$.extend($.expr[":"], 
{
    "contains-ci": function(elem, i, match, array) 
	{
		return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
	}
});


  </script>
  
  <script>
  $(function() {
    $( "#tabs" ).tabs();
	$('a[rel*=facebox]').facebox();
	$( ".datepicker" ).datepicker();
  });
  
  $(document).ready(function(){
	// Write on keyup event of keyword input element
	$("#searchmea").keyup(function(){
		// When value of the input is not blank
		if( $(this).val() != "")
		{
			// Show only matching TR, hide rest of them
			$("#searchTbla tbody>tr").hide();
			$("#searchTbla td:contains-ci('" + $(this).val() + "')").parent("tr").show();
		}
		else
		{
			// When there is no input or clean again, show everything back
			$("#searchTbla tbody>tr").show();
		}
	});
});
// jQuery expression for case-insensitive filter
$.extend($.expr[":"], 
{
    "contains-ci": function(elem, i, match, array) 
	{
		return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
	}
});


  </script>
  
  <script>
  $(function() {
    $( "#tabs" ).tabs();
	$('a[rel*=facebox]').facebox();
	$( ".datepicker" ).datepicker();
  });
  
  $(document).ready(function(){
	// Write on keyup event of keyword input element
	$("#searchmeb").keyup(function(){
		// When value of the input is not blank
		if( $(this).val() != "")
		{
			// Show only matching TR, hide rest of them
			$("#searchTblb tbody>tr").hide();
			$("#searchTblb td:contains-ci('" + $(this).val() + "')").parent("tr").show();
		}
		else
		{
			// When there is no input or clean again, show everything back
			$("#searchTblb tbody>tr").show();
		}
	});
});
// jQuery expression for case-insensitive filter
$.extend($.expr[":"], 
{
    "contains-ci": function(elem, i, match, array) 
	{
		return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
	}
});


  </script>
  
  <script>
  $(function() {
    $( "#tabs" ).tabs();
	$('a[rel*=facebox]').facebox();
	$( ".datepicker" ).datepicker();
  });
  
  $(document).ready(function(){
	// Write on keyup event of keyword input element
	$("#searchmec").keyup(function(){
		// When value of the input is not blank
		if( $(this).val() != "")
		{
			// Show only matching TR, hide rest of them
			$("#searchTblc tbody>tr").hide();
			$("#searchTblc td:contains-ci('" + $(this).val() + "')").parent("tr").show();
		}
		else
		{
			// When there is no input or clean again, show everything back
			$("#searchTblc tbody>tr").show();
		}
	});
});
// jQuery expression for case-insensitive filter
$.extend($.expr[":"], 
{
    "contains-ci": function(elem, i, match, array) 
	{
		return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
	}
});


  </script>
  
 <style>
table tr:nth-child(even) { /*(even) or (2n 0)*/
	background: #A4D1FF;
}
table tr:nth-child(odd) { /*(odd) or (2n 1)*/
	background: #EAF4FF;
}
</style>
</head>
<html>
<body>
<center> <img src="http://technoindiaeducation.com/assets/tiu/img/logo-intro.png" height="40" width="40"><h2> Techno India [Inventory System] </h2> </center>
<div id="tabs">
  <ul>
    <li><a href="#items">Item List</a></li>
    <li><a href="#addqty">[IN] Items Supplied</a></li>
    <li><a href="#sales">[OUT] Items Requested</a></li>
    <li><a href="#reports">Query Sales </a></li>
	<li><a href="#notifications">Nofications</a></li>
  </ul>
  <div id="items">
  <a href="additem.php" rel="facebox"> Add Item </a>
  </br></br>
<input type="text" placeholder="Search..." id="searchme">
</br></br>
<table width="100%" id="searchTbl" style="font-size:11px;">
<thead>
	<tr style="font-weight:bold;">
		<th align='center' width="20%">Description</th>
		<th align='center' width="10%">Supplier</th>
		<th align='center' width="10%">Quantity</th>
		<th align='center' width="10%">Sold</th>
		<th align='center' width="10%">Challan No.</th>
		<th align='center' width="10%">Date</th>
		<th align='center' width="10%">Action</th>
	</tr>
</thead>
<tbody>	
	<?php
	try {
	require ("db.php");
	$stmt = $conn->prepare("SELECT * from items ORDER BY i_desc");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	echo "<td > ".$row['i_desc']." </td>";
	echo "<td > ".$row['i_price']." </td>";
	echo "<td > ".$row['i_qty']." </td>";
	echo "<td > ".$row['i_sold']." </td>";
	echo "<td > ".$row['i_cno']." </td>";
	echo "<td > ".$row['i_date']." </td>";
	
	 echo '<td><div >'.'<a rel="facebox" href=edititem.php?id=' . $row["i_id"] .' ><img src="img/edit.png" width="25" ></a>'.'|'.'<a href=delitem.php?id=' . $row["i_id"] .'><img src="img/delete.png" width="25" ></a>'.' </div></td>';

	echo "</tr>";
	}
	}
	catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
	}
	?>
</tbody>

</table>
  
  </div>
  <div id="addqty">
  <form method="post" action="updateqty.php">
  <select name="itemdesc">
  <option value="0">Choose an item...</option>
  <?php
  try {
require ("db.php");
$stmt = $conn->prepare("SELECT * from items");
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
$id = $row['i_id'];
$desc = $row['i_desc'];
?>
<option value="<?php echo $id; ?>"><?php echo $desc; ?></option>
<?php 
}
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
	?>
  </select>
  <input type="text" placeholder="Enter Quantity" required autocomplete="on" name="itemqty"/>
  <input type="text" placeholder="Enter Supplier" required autocomplete="on" name="items"/>
  <input type="text" placeholder="Enter Challan" required autocomplete="on" name="itemc"/>
  <input type="text" placeholder="Enter Date" required autocomplete="on" name="itemd"/>
  <input type="submit" value="Update Quantity" name="updatebtn" class="btn btn-danger btn-sm" >
  </form>
  
  <input type="text" placeholder="Search..." id="searchmea">
  </br>
  <table width="100%" id="searchTbla" style="font-size:11px;">
<thead>
	<tr style="font-weight:bold;">
		<th align='center' height="20%" width="20%">Description</th>
		<th align='center' height="20%" width="10%">Supplier</th>
		<th align='center' height="20%" width="10%">Challan No.</th>
		<th align='center' height="20%" width="10%">Sold</th>
		<th align='center' height="20%" width="10%">Quantity</th>
		<th align='center' height="20%" width="10%">Action</th>
		
	</tr>
</thead>
<tbody>	
	<?php
	try {
	require ("db.php");
	$stmt = $conn->prepare("SELECT * from in_items ORDER BY date DESC");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	echo "<td > ".$row['item_name']." </td>";
	echo "<td > ".$row['supplier']." </td>";
	echo "<td > ".$row['challan']." </td>";
	echo "<td > ".$row['date']." </td>";
	echo "<td > ".$row['qty']." </td>";
	
	
	 echo '<td><div ><img src="img/tick.png" width="25" ></div></td>';

	echo "</tr>";
	}
	}
	catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
	}
	?>
</tbody>

</table>
  </div>
  <div id="sales">
  <form method="post" action="sellitem.php">
  <select name="itemdesc">
  <option value="0">Choose an item...</option>
  <?php
  try {
require ("db.php");
$stmt = $conn->prepare("SELECT * from items");
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
$id = $row['i_id'];
$desc = $row['i_desc'];
?>
<option value="<?php echo $id; ?>"><?php echo $desc; ?></option>
<?php 
}
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
	?>
  </select>
  <input type="text" placeholder="How many?" required autocomplete="off" name="itemqty"/>
  <input type="text" placeholder="Perticulars" required autocomplete="on" name="pert"/>
  <input type="text" placeholder="Department" required autocomplete="on" name="dept"/>
  <input type="text" placeholder="Requisition No." required autocomplete="off" name="rno"/>
  
  <input type="submit" value="Place order" name="sellbtn" class="btn btn-warning">
  </form>
  
  <input type="text" placeholder="Search..." id="searchmeb">
  </br></br>
  <table width="100%" id="searchTblb" style="font-size:11px;">
<thead>
	<tr style="font-weight:bold;">
		<th align='center' height="20%" width="20%">Item Name</th>
		<th align='center' height="20%" width="10%">Quantity Left</th>
		<th align='center' height="20%" width="20%">Perticulars</th>
		<th align='center' height="20%" width="20%">Department</th>
		<th align='center' height="20%" width="5%">Quantity Ordered</th>
		<th align='center' height="20%" width="7%">Requisition Number</th>
		<th align='center' height="20%" width="7%">Date</th>
		<th align='center' height="20%" width="5%">Action</th>
		
	</tr>
</thead>
<tbody>	
	<?php
	try {
	require ("db.php");
	$stmt = $conn->prepare("SELECT * FROM sales");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	echo "<td > ".$row['s_name']." </td>";
	echo "<td > ".$row['balance']." </td>";
	echo "<td > ".$row['perticular']." </td>";
	echo "<td > ".$row['department']." </td>";
	echo "<td > ".$row['qty']." </td>";
	echo "<td > ".$row['rno']." </td>";
	echo "<td > ".$row['date']." </td>";
	
	
	
	 echo '<td><div ><img src="img/bt.png" width="25" ></div></td>';

	echo "</tr>";
	}
	}
	catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
	}
	?>
</tbody>

</table>
  
  </div>
   <div id="reports" >
   <form action="total.php" method="post">
  From: <input type="text" class="datepicker" placeholder="Click me" name="dayfrom"> To: <input type="text" class="datepicker" placeholder="Click me" name="dayto">
  <input type="submit" value="Show Sales" name="salesbtn" class="btn btn-info">
  </form>
  </div>
  <div id="notifications">
  </br>
  <input type="text" placeholder="Search..." id="searchmec">
  </br></br>
  <table width="100%" id="searchTblc" style="font-size:11px;">
<thead>
	<tr style="font-weight:bold;">
		<th width="20%">Description</th>
		<th width="10%">Supplier</th>
		<th width="10%">Quantity</th>
		<th width="10%">Sold</th>
		<th width="10%">Challan No.</th>
		<th width="10%">Last Date Supplied</th>
		<th width="10%">Action</th>
	</tr>
</thead>
<tbody>	
	<?php
	try {
	require ("db.php");
	$stmt = $conn->prepare("SELECT * from items WHERE i_qty<2 ORDER BY i_date DESC");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	echo "<td > ".$row['i_desc']." </td>";
	echo "<td > ".$row['i_price']." </td>";
	echo "<td > ".$row['i_qty']." </td>";
	echo "<td > ".$row['i_sold']." </td>";
	echo "<td > ".$row['i_cno']." </td>";
	echo "<td > ".$row['i_date']." </td>";
	
	 
	 echo '<td><div><img src="img/noa.png" width="22" ></div></td>';
	echo "</tr>";
	}
	}
	catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
	}
	?>
</tbody>

</table>

</div>
  <div>
  
</div>

</body>
</html>