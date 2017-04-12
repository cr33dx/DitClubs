<?php
	$con = mysqli_connect("localhost","root","root","phprn");
	if(!$con){echo "error".mysqli_error($con);}
	$t2 = '1';
	$t3 = '1';
	$sql = mysqli_query($con,"SELECT * FROM USERS WHERE id = '$t2' AND password1 = '$t3'");	
	while($result = mysqli_fetch_array($sql)){
		echo $result["username"];
	}
	mysqli_close($con);
?>
