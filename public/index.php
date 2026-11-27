<?php

// print "asdasdasdas";
require_once  __DIR__ . '/../vendor/autoload.php';

header('Content-Type: application/json');

use Ingressos\Roteador;

$url = $_SERVER['REQUEST_URI'];

if ($url == '/') {
    return print json_encode(Roteador::index());
}
if ($url == '/saude') {
    return print json_encode(Roteador::saude());
}

return print json_encode(Roteador::notFound());
