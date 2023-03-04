<?php
//REDIRECT REQUEST TO INDEX AND ALREADY DONE IT WITH .htaccess

//GET REQUEST URI

$request_uri    =   parse_url($_SERVER['REQUEST_URI'])['path'];
echo $request_uri;

//CHECK IF REQUEST URI EXISTS IN ROUTES
//IF YES REQUIRE THE REQUIRED VIEW
//ELSE REQUIRE THE ERROR PAGE

$routes = $config['routes'];

if (array_key_exists($request_uri, $routes)){
    require($routes[$request_uri]);
}else{
    abort();
}
?>