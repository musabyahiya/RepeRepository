<?php

header("Content-Type: application/json", true);
require_once 'database_connections.php';
require_once 'db.php';
if($_GET['action']=='GetAllMenus')

{
	$RoleId =  $_SESSION['RoleId'];
	$query = "Select M.MenuItemId,M.MenuItemName,M.Icon, M.MenuItemURL,M.ParentId,M.MenuOrder,M.IsParent from menuitems M
	inner join rolemenumapping RM on RM.MenuItemId = M.MenuItemId
	where RM.RoleId= 1 and M.IsActive = 1 order by M.MenuOrder,M.SortOrder";

	try{
		GetResultJSON($con, $query);
	}
	catch (Exception $e)  
	{ 
		$error_message = $e->getMessage(); 
		echo json_encode($error_message);
		exit(); 
	} 


}

?>