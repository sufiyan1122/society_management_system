
	<?php
	session_start();
include "conn.php";

$name=$_POST['name'];
$address=$_POST['address'];
$pass=$_POST['password'];
$type=$_POST['type'];

$query="INSERT INTO `user`(`name`, `address`, `password`, `type`) VALUES ("."\"".$name."\"".","."\"".$address."\"".","."\"".$pass."\"".","."\"".$type."\"".")";

$sql=mysqli_query($con,$query);

if(!$sql){
	echo "<div class='container text-center'>Ordered unsucessfull please try again later</div>";
	header("Location:login.php?reg=1");
	//echo $query;
}
else{echo "<div class='container text-center'>Ordered sucessfull </div>";
	header("Location:login.php?reg=1");

	}
	


?>