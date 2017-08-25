<?php
session_start();
include "conn.php";

if(!empty($_POST["u_name"]) && !empty($_POST["pass"])){
	$name=mysqli_real_escape_string($con,fix($_POST["u_name"]));
	$pass=mysqli_real_escape_string($con,$_POST["pass"]);
	$query="SELECT * FROM `user` WHERE name='$name' and password='$pass'";
	$sql=mysqli_query($con,$query);
	$count=mysqli_num_rows($sql);
	
	if($count==1){
		$row=mysqli_fetch_assoc($sql);
		$_SESSION['id']=$row['id'];
		$_SESSION['name']=$row['name'];
		if($row['type']=="resident"){
			//var_dump($row);
			header("Location:dashboard_t.php");
		}
		else{
			header("Location:dashboard_s.php");
		}
			

		}
	else{
		echo "invalid username or password";
		header("Location:login.php?up=1");
		//login page**********

	}
}
else{
		header("Location:login.php?up=2");

}

function fix($name){
    $name=trim($name);
    $name=  addslashes($name);
    return $name;
}
?>