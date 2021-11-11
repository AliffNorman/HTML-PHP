<?php
	include('dbconn.php');

	$id = $_GET['id'];
	$q = "SELECT * FROM `user` WHERE id=$id";

	$result = mysqli_query($db,$q);
	while($row = mysqli_fetch_array($result)){
		$id = $row[0];
		$name = $row[1];
		$ic = $row[2];
		$phone = $row[3];
		$email = $row[4];
		$roomtype = $row[5];
		$datestart = $row[6];
		$dateend = $row[7];
		$total = $row[8];
	}

?>

<html>
<head>
<title>Edit</title>
</head>
<body>
	<h1>Edit</h1>
	<form action="edit.php?edit_form=<?php echo $id; ?>" method="post">
		Name : <input type="text" name="newname" value="<?php echo $fail; ?>"/><br/><br/>
		IC : <input type="text" name="newIC" value="<?php echo $mukim; ?>"/><br/><br/>
		Phone no : <input type="text" name="newphone" value="<?php echo $catatan; ?>"/><br/><br/>
		Email : <input type="text" name="newemail" value="<?php echo $catatan; ?>"/><br/><br/>
		Roomtype : <input type="text" name="newroom" value="<?php echo $catatan; ?>"/><br/><br/>
		Date Start : <input type="date" name="newdateS" value="<?php echo $catatan; ?>"/><br/><br/>
		Date End : <input type="date" name="newdateE" value="<?php echo $catatan; ?>"/><br/><br/>
		Total : <input type="int" name="newtotal" value="<?php echo $catatan; ?>"/><br/><br/>
		<input type="submit" name="submit" value="Change The VAlueeeee"/><br/>
		
		
	</form>
	
	<?php
		include 'dbconn.php';
		
		if(isset($_POST['submit'])){
			$newname = $_GET['newname'];
			$newIC = $_POST['newIC'];
			$newphone = $_POST['newphone'];
			$newemail = $_POST['newemail'];
			$newroom = $_POST['newroom'];
			$newdateS = $_POST['newdateS'];
			$newdateE = $_POST['newdateE'];
			$newtotal = $_POST['newtotal'];
			
			$rr = "UPDATE user SET name='$newname', ic='$newIC', phone='$newphone', email='$newemail', roomtype='$newroom', datestart='$newdateS', dateend='$newdateE', total='$newtotal' WHERE id='$id'";

			mysqli_query($dbconn,$rr);
			if($rr){
				header("location:index.php");
			}
		}
	?>
	
</body>
</html>