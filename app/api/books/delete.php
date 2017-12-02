<?php
	
	$app -> delete('/api/books/{id}', function($response){

		require_once('dbconnect.php');
		$b_id = $response->getAttribute('id');
		$query = "DELETE FROM `books` WHERE id = $b_id";
		if ($mysqli->query($query) === true) {
			echo "successfully deleted your record";
		}
	});
?>