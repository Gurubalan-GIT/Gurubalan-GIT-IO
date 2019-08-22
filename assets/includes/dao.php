<?php
include_once 'dbconnection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$query="insert into DB.users (Name, Email, Message) VALUES ('".$name."','".$email."','".$message."');";
$result=mysqli_query($con,$query);
$resultCheck=mysqli_affected_rows($con);
if($resultCheck>0) {
    echo ("<script language='JavaScript'>  
window.alert('Message has been sent successfully.');
window.location.href='/';
</script>");
}
else{
    echo("<script language='JavaScript'>
window.alert('An Error Occurred, Try again.');
window.location.href='/';
</script>");
}
