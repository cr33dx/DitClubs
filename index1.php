<?php
	$con = mysqli_connect("localhost","root","root","phprn");
	if(!$con){echo "error".mysqli_error($con);}
	echo($_POST['password']);
	$sql = "SELECT * FROM USERS WHERE id = 1";
	$query = mysqli_query($con,$sql);
	while($result = mysqli_fetch_array($query)){
		echo $result["username"];
	}
	mysqli_close($con);
?>
