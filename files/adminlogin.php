<?php
        
        $username=$_POST['username'];
        $password=$_POST['password'];

$servername = "127.0.0.1";
    $dbuser = "root";
    $dbpassword = "root1234";
    $dbname = "certificationregdb";
    $conn = mysqli_connect($servername, $dbuser, $dbpassword, $dbname);
       
  
$sql="SELECT * FROM admin where emailid= '$username' and password= '$password'";
      $res=mysqli_query($conn,$sql);
       if(mysqli_num_rows($res) == 1)
        {
                header('Location:navbaradmin.html');
       }
       else
        {
                
                header('Location:task1login.html');
        }
?>
