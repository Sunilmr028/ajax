<?php
	define('HOST','localhost');
	define('USERNAME', 'root');
	define('PASSWORD','');
	define('DB','myajaxdb');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
	
	$brand = $_GET['brand'];
	
	$sql = "select item from products where brand='$brand'";
	
	$res = mysqli_query($con,$sql);
	
	$result = array();
	
	while($row = mysqli_fetch_array($res)){
		array_push($result, 
				array('item'=>$row[0]));
	}
	
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>