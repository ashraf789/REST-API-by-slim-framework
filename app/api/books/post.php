<?php
	//create a new record
	$app -> post('/api/books',function($request){
		require_once('dbconnect.php');



		
		$query = "INSERT INTO `books`(`book_title`, `author`, `amazon_url`) values (?,?,?)";
		$stmp = $mysqli-> prepare($query);
		$stmp->bind_param("sss",$b_title,$b_author,$b_url);

		
		$b_title = $request->getParsedBody()['title'];
		$b_author = $request->getParsedBody()['author'];
		$b_url = $request->getParsedBody()['url'];

		if ($stmp->execute()) {
			echo "successfully inserted your record";
		}
	});

?>