<?php 


function GetResultJSON($con, $query)
{
	try
	{
		
		$result = $con->query($query);
		$arr = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$arr[] = $row;
			}
		} 
		echo $json_info = json_encode($arr);
	}
	catch(Exception $e)
	{
		echo json_encode($e);
	}
	finally
	{
		$con->close();
	}

}

function GetNoOfRows($con, $query)
{
	try
	{
		
		$result = $con->query($query);
		$arr = array();
		return $result->num_rows;
	}
	catch(Exception $e)
	{
		echo json_encode($e);
	}
	finally
	{
		$con->close();
	}

}
function UpdateTable ($con,$query)
{
	try
	{
		if ($con->query($query) === TRUE) {
			echo  json_encode($con->query($query));
		}
	}
	catch(Exception $e)
	{
		echo json_encode($e);
	}
	finally
	{
		//$con->close();
	}

}

function InsertIntoTable ($con,$query)
{
	try
	{
		if ($con->query($query) === TRUE) {
			echo  json_encode($con->query($query));
		}
	}
	catch(Exception $e)
	{
		echo json_encode($e);
	}
	finally
	{
		$con->close();
	}
}

function InsertIntoTableGetIdentity($con,$query)
{
	try
	{
		if($con->query($query) === true){
    // Obtain last inserted id
			$last_id = $con->insert_id;
			echo  json_encode($last_id);
			
		} else{
			echo json_encode("ERROR: Could not able to execute $sql. " . $mysqli->error);
		}
	}
	catch(Exception $e)
	{
		echo json_encode($e);
	}
	finally
	{
		$con->close();
	}

}
function console_log( $data ){
	echo '<script>';
	echo 'console.log('. json_encode( $data ) .')';
	echo '</script>';
}


?>