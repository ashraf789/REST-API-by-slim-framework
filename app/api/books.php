<?php 

	header("Content-Type: application/json");
	require_once('dbconnect.php');


	//get all books from books table
	// $app -> get('/api/books',function(){
	// 	require_once('dbconnect.php');

	// 	$query = "select *from books order by id";
	// 	$result = $mysqli->query($query);
	// 	while ($row = $result->fetch_assoc()){
	// 		$data[] = $row;

	// 	} 
	// 	if (isset($data)) {
	// 	//isset means checking null value
	// 		echo json_encode($data);
	// 	}
	// });


	//get a specific books by id 

	// $app -> get('/api/books/{id}',function($response){
	// 	require_once('dbconnect.php');

	// 	$id = $response -> getAttribute('id');

	// 	$query = "select *from books where id = $id";
	// 	$result = $mysqli->query($query);
	// 	$data = $result->fetch_assoc();

	// 	if (isset($data)) {
	// 	    echo json_encode($data);
	// 	}else{

	// 		echo "Id not found ";
	// 	}
	// });

	//post data and show posted key with value
	//

	// $app -> post('/api/books', function($request){
	// 	foreach ($_POST as $key => $value) {
	// 		echo "key = $key &nbsp value = $value <br>";

	// 	}
	// });


	//post data and create a new record
	$app -> post('/api/books', function($request){
		// $my_name = $_POST['my_name']; //valid
		
		$my_name = $request->getParsedBody()['my_name'];
		echo "Hello ".$my_name;

	});

	$app -> put('/api/books',function($request){

				$my_name = $request->getParsedBody()['my_name'];

		echo "Hello ".$my_name;
	});


	


?>