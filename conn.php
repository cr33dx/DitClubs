<?php 
error_reporting(E_ALL); 
     session_start();
     

      include("./inc/connect.inc.php"); 
	$t1=$_SESSION["t3"];		
	function SignIn() 
	{   
		if(!empty($_POST['password'])){
			$sql = "SELECT * FROM USERS WHERE id = '$_SESSION[t3]' AND password1 = '$_POST[password]'";
			$query = mysqli_query(ret(),$sql);	
			$rows = mysqli_num_rows($query);
			if($rows >= 1){
				header("location:home.php");
				$_SESSION['id'] = $_SESSION['t3'];
			}else{
				header("location:index.php");
				echo("<script>alert('wrong email or pass')</script>");
			}
		} 					
	} 
		if(isset($_POST['submit'])) 
		{ 
			   SignIn(); 
		} else { echo "not";}
//		mysqli_close($s);
?>
