<?php
use Router\Router;

require '../vendor/autoload.php';
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME','tpdb');
define('DB_HOST','localhost:3308');
define('DB_USER','root');
define('DB_PASS','');
$router = new Router($_GET['url']);

$router->get('/','App\Controllers\BlogController@index');
$router->get('/posts', 'App\Controllers\BlogController@welcome');

$router->get('/posts/:id','App\Controllers\BlogController@show');
$router->get('/inscription','App\Controllers\BlogController@inscription');
$router->post('/enregistrer','App\Controllers\BlogController@enregistrer');

$router->run();

?>
