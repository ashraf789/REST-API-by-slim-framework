<?php
	
	//get all books from books table
	$app -> get('/api/books',function(){

	header("Content-Type: application/json");
	require_once('dbconnect.php');
	
		$query = "select *from books order by id";
		$result = $mysqli->query($query);
		while ($row = $result->fetch_assoc()){
			$data[] = $row;

		} 
		if (isset($data)) {
		//isset means checking null value
			echo json_encode($data);
		}
	});

	//get a specific books by id 
	$app -> get('/api/books/{id}',function($response){
		require_once('dbconnect.php');

		$id = $response -> getAttribute('id');
		$query = "select *from books where id = $id";
		$result = $mysqli->query($query);
		$data = $result->fetch_assoc();

		if (isset($data)) {
		    echo json_encode($data);
		}else{
			echo "No record found";
		}
	});
?>
