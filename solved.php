<?php
include "conn.php";

$id=$_GET['id'];

$query="UPDATE `complain` SET `status`=1 WHERE id='$id' ";

$sql=mysqli_query($con,$query);

if(!$sql){
	echo "<div class='container text-center'>Ordered unsucessfull please try again later</div>";
	header("Location:dashboard_t.php");
	//echo $query;
}
else{echo "<div class='container text-center'>Ordered sucessfull </div>";
	header("Location:dashboard_t.php");
	//echo $query;
	
}

?>