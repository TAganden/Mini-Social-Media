<?php
session_start();
$username=@$_POST['username'];
$first=@$_POST['firstname'];
$last=@$_POST['lastname'];
$email=@$_POST['email'];
if(@$_SESSION['user']!="")
{
 $conn=mysqli_connect("localhost","root","","login");
 $query1="UPDATE credentials SET username='$username' WHERE username='".$_SESSION['user']."'";
 $query2="UPDATE credentials SET firstname='$first' WHERE username='".$_SESSION['user']."'";
 $query3="UPDATE credentials SET lastname='$last' WHERE username='".$_SESSION['user']."'";
 $query4="UPDATE credentials SET email='$email' WHERE username='".$_SESSION['user']."'";
 mysqli_query($conn,$query1);
 mysqli_query($conn,$query2);
 mysqli_query($conn,$query3);
 mysqli_query($conn,$query4);
 $_SESSION['user']=$username;
 mysqli_close($conn);
 header('location:viewprofile.php');
}
else
{
  header('location:profile.php');
}

 ?>
