<?php
include "conn.php";

$type=$_POST['type'];
$amount=$_POST['amount'];
$month=$_POST['month'];
$status=$_POST['status'];

$query="INSERT INTO `vendors`(`type`, `amount`, `month`, `status`) VALUES ("."\"".$type."\"".",".$amount.","."\"".$month."\"".",".$status.")";

$sql=mysqli_query($con,$query);

if(!$sql){
	echo "<div class='container text-center'>Ordered unsucessfull please try again later</div>";
	//header("Location:dashboard_s.php");
	echo $query;
}
else{echo "<div class='container text-center'>Ordered sucessfull </div>";
	header("Location:dashboard_s.php");
	
}

?>