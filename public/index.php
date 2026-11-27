<?php

// print "asdasdasdas";
require_once  __DIR__ . '/../vendor/autoload.php';

header('Content-Type: application/json');

use Ingressos\Roteador;

$requestUri = $_SERVER['REQUEST_URI'];

if ($requestUri == '/') {
    return print json_encode(Roteador::index());
}
if ($requestUri == '/saude') {
    return print json_encode(Roteador::saude());
}

return print json_encode(Roteador::notFound());
