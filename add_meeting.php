<?php
include "conn.php";

$title=$_POST['title'];
$date=$_POST['date'];
$desc=$_POST['desc'];

$query="INSERT INTO `notice`(`title`, `date`, `description`) VALUES ("."\"".$title."\"".","."\"".$date."\"".","."\"".$desc."\"".")";

$sql=mysqli_query($con,$query);

if(!$sql){
	echo "<div class='container text-center'>Ordered unsucessfull please try again later</div>";
	header("Location:dashboard_s.php");
	//echo $query;
}
else{echo "<div class='container text-center'>Ordered sucessfull </div>";
	header("Location:dashboard_s.php");
	//echo $query;
	
}

?>