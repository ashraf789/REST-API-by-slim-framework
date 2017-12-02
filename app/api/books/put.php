<?php

	
	//update a record
	$app -> put('/api/books/{id}',function($request){
		require_once('dbconnect.php');

		$b_id = $request->getAttribute('id');
		

		$b_title = $request->getParsedBody()['title'];
		$b_author = $request->getParsedBody()['author'];
		$b_url = $request->getParsedBody()['url'];
		
		$query = "UPDATE `books` SET `book_title`= ?,`author`= ?,`amazon_url`= ? WHERE id = $b_id";
		$stmp = $mysqli-> prepare($query);
		$stmp->bind_param("sss",$b_title,$b_author,$b_url);

		
		if ($stmp->execute()) {
			echo "successfully update your record";
		}
	});
?>