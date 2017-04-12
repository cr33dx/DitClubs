<?php
      define('DB_HOST', 'localhost');
      define('DB_NAME', 'phprn'); 
	  define('DB_USER','root'); 
	  define('DB_PASSWORD','root'); 
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);	
	function ret(){
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		return $con;	
	}	
	  if (mysqli_connect_errno())
		{   throw new Exception(mysqli_connect_error(), mysqli_connect_errno());		}
?>
