<?php
include "conn.php";

$id=$_POST['id'];
$title=$_POST['title'];
$date=$_POST['date'];
$desc=$_POST['desc'];

$query="INSERT INTO `complain`(`title`, `date`, `description`,`user`) VALUES ('$title','$date','$desc','$id')";

$sql=mysqli_query($con,$query);

if(!$sql){
	echo "<div class='container text-center'>Ordered unsucessfull please try again later</div>";
	header("Location:dashboard_t.php?stat=0");
	//echo $query;
}
else{echo "<div class='container text-center'>Ordered sucessfull </div>";
	header("Location:dashboard_t.php?stat=1");
	//echo $query;
	
}

?>