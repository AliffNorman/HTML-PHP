<?php  

include ("dbconnect.php");
$status = "";
if(isset($_POST["Login"])){  
  
if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['usertype'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];  
    $admUser=$_POST['usertype'];
 
    $sql="SELECT * FROM login WHERE username='".$user."' AND password='".$pass."' AND  usertype='".$admUser."'";
    $query=mysqli_query($dbconn,$sql) or die(mysqli_error($dbconn));
    $numrows=mysqli_num_rows($query);  
       
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    $dbusertype=$row['usertype'];
    $id=$row['id'];
    }  
  
    if($user == $dbusername && $pass == $dbpassword && $admUser == "admin")  
    {  
    session_start();  
    $_SESSION['username']=$user;  
    $_SESSION['id']=$id; 
    /* Redirect browser */ 
    header("Location: output.php");  
     
    } else if($user == $dbusername && $pass == $dbpassword && $admUser == "user") {  
    session_start();  
    $_SESSION['username']=$user;  
        $_SESSION['uid']=$id; 
    /* Redirect browser */    
    header("Location: customer.html"); 
 
    }
    }
    else{
    
       $status = "<a href='login.html'><script type='text/javascript'>alert('Failed to login.Please check username and password');window.location.href='login.html';</script></a>";
    echo '<p style="color:#FF0000;">'.$status.'</p>';
    }
  
} else {  
  
       $status = "<a href='login.html'><script type='text/javascript'>alert('All fields are required!');window.location.href='login.html';</script></a>";
    echo '<p style="color:#FF0000;">'.$status.'</p>';
}  
}
?>  