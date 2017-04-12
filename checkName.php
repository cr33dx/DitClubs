<?php
session_start();
   	if( $_REQUEST["id"] ) {
   $name = $_REQUEST['id'];
    
   $_SESSION['t3']=$name;   
}
?>
