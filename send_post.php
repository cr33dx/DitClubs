<?php include("inc/connect.inc.php"); 
session_start();
$post=$_POST['post'];

if($post!="") { echo $post;
$date_added=date("Y-m-d"); echo $date_added;
$added_by="test123";
$user_posted_to ="test123";

$sqlCommand= "INSERT INTO posts (body,date_added,added_by,user_posted_to) VALUES ('$post', '$date_added', '$added_by', '$user_posted_to') ";
$query = mysqli_query($con,$sqlCommand) or die (mysqli_error($con));
									
}
else
{
	echo "Dont fuck with me man!!";
}mysqli_close($con);
?>