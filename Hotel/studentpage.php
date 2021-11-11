<!DOCTYPE html>
<style>
body
{

  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
 
}
.stroke{
	-webkit-text-stroke-width:2px;
  	-webkit-text-stroke-color:black;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111111;
}

</style>

<body>
<table>
<tr>
<td align ="left":><img align="left" src="logo.png" style="width: 20%"></td>
<td align ="left":><h2 align="left"><font colour ="white">My CarryMark</font></h2></td>
</tr>
</table>

<ul>
  <li><a href="website.html">Home</a></li>
  <li><a href="form.html">Form</a></li>
  <li><a href="carrymark.html">Carry mark</a></li>
</ul>

<div class="form">
<h2>View Carry Mark</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<center>
    <b><<a href="genppdf.php" size="30%">Generate Report</a></b><br><br></center>
<tr>
<th><strong>Student ID</strong></th>
<th><strong>Name</strong></th>
<th><strong>Course</strong></th>
<th><strong>Test Mark</strong></th>
<th><strong>Quiz Mark</strong></th>

</tr>
</thead>
<tbody>
<?php
include ("dbconnect.php");
$count=1;
$sel_query="Select * from mark ORDER BY id;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["studID"]; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["course"]; ?></td>
<td align="center"><?php echo $row["testmark"]; ?></td>
<td align="center"><?php echo $row["quizmark"]; ?></td>

</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>

 	
</font>
</center>
</body>
</html>