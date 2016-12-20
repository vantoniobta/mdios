<?php
	 if ($_REQUEST['id']) {
	 	include("conexion.php");
	 	$_var=$_GET['id'];
	 	echo $_var;
	 	
	  // $pid = $_REQUEST['delete'];
	  // $query = "DELETE FROM imagenes WHERE id=:pid";
	  // $stmt = $con->prepare( $query );
	  // $stmt->execute(array(':pid'=>$pid));
	  
	  // if ($stmt) {
	  //  echo "Product Deleted Successfully ...";
	  // }else{
	  // 	echo "Error!! in Deleted Product ...";
	  // }
	 }else{
	 	echo "no hay id de la tabla";
	 }
 ?>