<?php  
include ("dbconnect.php");
                           
 $status = "";
if(isset($_POST["submit"])){  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];

  	$sql="SELECT * FROM login WHERE username='".$user."'";
    $query=mysqli_query($dbconn,$sql) or die(mysqli_error($dbconn));  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO `login`(`username`,`password`,`usertype`) VALUES('$user','$pass','user')";  
  
    $result=mysqli_query($sql);  
        if($result){  
    $status = "<a href='login.php'><script type='text/javascript'>alert('Account Successfully Created');window.location.href='login.php';</script></a>";
    echo '<p style="color:#FF0000;">'.$status.'</p>';
    } else {  
    $status = "<a href='register.php'><script type='text/javascript'>alert('Failure!');window.location.href='register.php';</script></a>";
    echo '<p style="color:#FF0000;">'.$status.'</p>';
    }  
    
    } else {  
  
  $status = "<a href='register.php'><script type='text/javascript'>alert('That username already exists! Please try again with another.');window.location.href='register.php';</script></a>";
    echo '<p style="color:#FF0000;">'.$status.'</p>';
    }  
  
} else {  
$status = "<a href='register.php'><script type='text/javascript'>alert('All fields are required!');window.location.href='register.php';</script></a>";
    echo '<p style="color:#FF0000;">'.$status.'</p>';
}  
}  
?>  