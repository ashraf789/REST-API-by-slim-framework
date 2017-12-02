<?php
	
	//post data and show posted key with value

	$app -> post('/api/keycheck', function($request,$response,$value){
		foreach ($_POST as $key => $value) {
			echo "key = $key &nbsp value = $value <br>";
		}
	});

?>