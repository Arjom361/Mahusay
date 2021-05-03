<?php
session_start();
include_once 'config.php';

if (isset($db,$_POST['submit']))
{
	$itemdescription = mysqli_real_escape_string($db,$_POST['itemdescription']);
    $quantity = mysqli_real_escape_string($db,$_POST['quantity']);
    $price = mysqli_real_escape_string($db,$_POST['price']);

    
    $display = mysqli_query($db, "INSERT INTO `booking`(itemdescription,quantity,price) VALUES ('$itemdescription', '$quantity', '$price')");
    
      echo"<script>alert(YOUR BOOKING IS PROCESSING); window.location.href='';</script>"; 
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form action="index.php" method="post">
		<table>
		 <tr>
		 	<td>Item Description</td>
		 	<td><input type="text" name="itemdescription"></td>
		 </tr>
		 <tr>
		 	<td>Quantity</td>
		 	<td><input type="text" name="quantity"></td>
		 </tr>
		 <tr>
		 	<td>Price</td>
		 	<td><input type="text" name="price"></td>
		 </tr>
		 <tr>
		 	 <td><button type="submit" name="submit"  value='signup'>Add Product</button></td>
		 </tr>
		
	</form>
</table>
</body>
</html>