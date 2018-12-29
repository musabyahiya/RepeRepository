 <?php 
 header("Content-Type: application/json", true);
 require 'database_connections.php';

 if($_GET['action']=='Login')
 {

 	$Email  = $_POST['Email'];
 	$Password  = $_POST['Password'];

 	$query = "SELECT * FROM `users` WHERE Email = '$Email' and password = '$Password'
 	and IsActive =1";

 	$result = $con->query($query);
 	$arr = array();

 	if($result->num_rows != 0)
 	{
 		foreach($result as $row) {
 			$arr[] = $row;
 			$_SESSION["UserId"]=$row["UserId"];
 			$_SESSION["RoleId"]=$row["RoleId"];

 			
 			echo json_encode("Success".'|'.$_SESSION["RoleId"]);
 		}
 	}
 	else{
 		echo json_encode("Error");
 	}
 }

 ?>