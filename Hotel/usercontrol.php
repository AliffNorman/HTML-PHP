  <?php   include 'configt.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
      <style>
                      body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  width: 40%;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
          
             body{  
   
    background-color: azure ;  
   
        }  
            h1 {  
    color: black;  
    font-family: verdana;  
    font-size: 150%;  
}  
         h2 {  
    color: black;  
    font-family: verdana;  
    font-size: 150%;
        </style>
        <link rel="stylesheet" type="text/css" href="style4.css">
</head>

<body>
    
                            
<html>
    <head>
        <meta charset="UTF-8">
        
    </head>
    <body>
             <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  
      <br><br><center><h1>USER CONTROL</h1></center> 
       <center><div class="navbar">
       
      <a href="output.php">Registered</a>
      <div class="dropdown">
    <button class="dropbtn">Report 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="report.php">Package</a>
      <a href="report2.php">Month</a>
      <a href="report3.php">Year</a>
    </div>
  </div> 
      
     
      
      <a href="subscribers.php">Subscribers</a>
      
      
       <div class="dropdown">
    <button class="dropbtn">Administrators 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="admin.php">Add Admin</a>
      <a href="admincontrol.php">Admin Control</a>
      
    </div>
  </div> 
           <a href="usercontrol.php">User Control</a>
      <a href="logout.php">Logout</a>
              </div></center>
      <br>
      
        <legend>
            <fieldset>
                      <center><h2>USER CONTROL FORM</h2></center>
                              <br><center><img src="img/bg-img/segi.png"  width="125" height="100"></center>
                              <br>
                <table>
                    <br>
            <thead><tr><th>User Username</th><th>User Password</th><th>Edit</th><th>Deactivate</th></tr></thead>
            <tbody>
                <?php 
                $query="SELECT * FROM `multilogin` where usertype='user'";
                $res=mysqli_query($dbconn,$query);
                while($rr=mysqli_fetch_assoc($res)) {?>
                <tr><td><?php echo $rr['username']?> </td>
                    <td><?php echo $rr['password']?> </td>
                    <td><center><a rel="facebox" href="edit3.php?uid=<?php echo $rr["uid"]; ?>" class="edit_btn" rel="facebox">EDIT</a></center></td>
            <td><center><a  onclick="return confirm('Confirm to delete?')" href="delete2.php?uid=<?php echo $rr["uid"]; ?>" class="edit_btn">DEACTIVE</a></center></td>
                </tr>
                <?php } ?>
                
               </table> 
            </fieldset>
                </legend>
            </tbody>
 
        <br>
 
    </body>
</html>
        
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</body>