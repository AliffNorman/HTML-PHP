<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OUTPUT</title>
</head>

	<center>
	<table>
	<tr>
	<td>Id</td><td>Name</td><td>IC</td><td>Phone</td><td>Email</td><td>Room</td><td>Date Start</td><td>Date End</td><td>Total Price</td><td>Edit</td><td>Delete</td>
	</tr>
	
	<?php
		include("dbconnect.php");
		$sql="SELECT * from hotel";
		$res=mysqli_connect($dbconn,$sql) or die(mysqli_errno($dbconn));
		while($row=mysqli_fetch_assoc($res)) { ?>
		<tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['ic'];?></td>
		<td><?php echo $row['phone'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['room'];?></td>
		<td><?php echo $row['datestart'];?></td>
		<td><?php echo $row['dateend'];?></td>
		<td><?php echo $row['total'];?></td>
		
		</tr>
		<?php } ?>

	</table>
	</center>
	
<body>
</body>
</html>