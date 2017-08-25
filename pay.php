<?php
include "conn.php";

$id=$_POST['id'];
$amount=$_POST['amount'];
$acc=$_POST['account_number'];
$month=$_POST['month'];
$ref_no=rand_gen();



$query="INSERT INTO `payments`(`amount`, `date`, `by_user`, `p_ref_no`, `account_no`) VALUES ('$amount','$month','$id','$ref_no','$acc')";

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


function rand_gen(){
	$stri="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$rand="";
	for($i=0;$i<20;$i++){
		$rand=$rand.$stri[rand(0,62)];
	}
	return $rand;
}

?>