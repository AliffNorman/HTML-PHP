<!doctype html>
<html>
<head>
<title>Receipt</title>
</head>
<body>
	<fieldset style="display: inline-block">
	<legend>Hotel Reservation Receipt</legend>
		<table border="1" width="400" height="300">
		<?php 
			$id = $_GET['id'];
        	$query="SELECT * FROM `user` WHERE id=$id";
        	$res=mysqli_query($dbconn,$query);
        	while($rr=mysqli_fetch_assoc($res)) {?>
			<tr><td colspan="2">Name:</td><td><?php echo $rr['name']?></td></tr>
			<tr><td colspan="2">IC:</td><td><?php echo $rr['ic']?></td></tr>
			<tr><td colspan="2">Phone:</td><td><?php echo $rr['phone']?></td></tr>
			<tr><td colspan="2">Email:</td><td><?php echo $rr['email']?></td></tr>
			<tr><td colspan="2">Room Type:</td><td><?php echo $rr['roomtype']?></td></tr>
			<tr><td>Arrival Date:</td><td><?php echo $rr['datestart']?></td>
				<td>Departure Date:</td><td><?php echo $rr['dateend']?></td></tr>
			<tr><td colspan="2">Total:</td><td><?php echo $rr['total']?></td></tr>
			
			
        <?php } ?>
		</table>
	</fieldset>
</body>
</html>