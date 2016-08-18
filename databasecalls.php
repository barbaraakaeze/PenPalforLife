<?php include 'db_conn.php'; ?>
<?php

function onLoad($name, $location, $status){  
$sql = "SELECT name, location, status FROM `Users` WHERE name = $name, location = $location, status = $status";
while($result = $conn->query($sql)){
	
		return $result; 
		};
		
}
