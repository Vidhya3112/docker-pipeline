<?php



$empname= $_POST['t1'];
$empid = $_POST['t2'];
$CSP = $_POST['s1'];
$cert_lev = $_POST['t3'];
$cert_name = $_POST['t4'];
$cert_id = $_POST['t5'];
$Date_cert = $_POST['t6'];
$exp_date = $_POST['t7'];
$validity = $_POST['t8'];   



    $servername = "127.0.0.1";
    $dbuser = "root";
    $dbpassword = "root1234";
    $dbname = "certificationregdb";
    $conn = new mysqli($servername, $dbuser, $dbpassword, $dbname);
    
$sql = "INSERT INTO register (empname,empid,CSP,cert_level,cert_name,cert_id,Date_of_cert,exp_date,validity) values ('$empname','$empid','CSP','$cert_lev','$cert_name','$cert_id','$Date_cert','$exp_date','$validity')";
    mysqli_query($conn, $sql);



// echo "Report has been sent you email,click username to take another quiz or click signout!";
      header('Location:afterreg.html');


?>



