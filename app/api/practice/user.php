<?php
	$app->get('/api/user/{name}', function ($request, $response, $args) {
	       $name = $args['name'];
	    $response->getBody()->write("Hello there, $name");

	    return $response; 
	});

	$app->post('/api/user', function ($request, $response, $args) {
	       $name = $request->getParsedBody()['name'];
		   echo "Hello ".$name;
	});
	$app->put('/api/user', function ($request, $response, $args) {
	       $name = $request->getParsedBody()['name'];
		   echo "Hello its put request MR. ".$name;
	});


?>