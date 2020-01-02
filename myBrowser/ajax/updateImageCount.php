<?php

include("../config.php");

if (isset($_POST['imageUrl'])) { 

	$query = $con->prepare("UPDATE images SET clicks = clicks +1 where imageUrl =:imageUrl");
	$query->bindParam(':imageUrl', $_POST['imageUrl']);
	$query->execute();
}else{
	echo "No imageUrl passed to page";
}

?>