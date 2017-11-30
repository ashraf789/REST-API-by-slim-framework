<?php
// if (PHP_SAPI == 'cli-server') {
//     // To help the built-in PHP dev server, check if the request was actually for
//     // something which should probably be served as a static file
//     $url  = parse_url($_SERVER['REQUEST_URI']);
//     $file = __DIR__ . $url['path'];
//     if (is_file($file)) {
//         return false;
//     }
// }

// require __DIR__ . '/../vendor/autoload.php';

// session_start();

// // Instantiate the app
// $settings = require __DIR__ . '/../src/settings.php';
// $app = new \Slim\App($settings);

// // Set up dependencies
// require __DIR__ . '/../src/dependencies.php';

// // Register middleware
// require __DIR__ . '/../src/middleware.php';

// // Register routes
// require __DIR__ . '/../src/routes.php';
// // Define app routes
// $app->get('/hello/{name}', function ($request, $response, $args) {

//     return $response->write("Hello " . $args['name']);
// });

// $app->post('/hello/', function ($request, $response, $args) {

//     return $response->write("Hello " . $args['name']);
// });


// // Run app
// $app->run();




// use \Psr\Http\Message\ServerRequestInterface as Request;
// use \Psr\Http\Message\ResponseInterface as Response;

// require __DIR__ . '/../vendor/autoload.php';

// $config['displayErrorDetails'] = true;
// $config['addContentLengthHeader'] = false;

// $config['db']['host']   = "localhost";
// $config['db']['user']   = "root";
// $config['db']['pass']   = "";
// $config['db']['dbname'] = "projectmanagement";


// $app = new \Slim\App(["settings" => $config]);
// $app->get('/firstApi/{name}', function (Request $request, Response $response) {
//     $name = $request->getAttribute('name');
//     $response->getBody()->write("Hello, $name");

//     return $response;
// });

// $container['db'] = function ($c) {
//     $db = $c['settings']['db'];
//     $pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'],
//         $db['user'], $db['pass']);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//     return $pdo;
// };

// $app->run();


use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App;


// $app->get('/hello/{name}', function ( $request,  $response) {
//     $name = $request->getAttribute('name');
//     $response->getBody()->write("Boss hello again, $name");

//     return $response; 
// });

// $app->get('/hello/{name}', function ($request, $response, $args) {
//        $name = $args['name'];
//     $response->getBody()->write("Hello there, $name");

//     return $response; 
// });

require_once('./app/api/books.php');
require_once('./app/api/user.php');

$app->run();

?>