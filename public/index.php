<?php

// print "asdasdasdas";
require_once  __DIR__ . '/../vendor/autoload.php';

use Ingressos\Roteador;

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/') {
    return print json_encode(Roteador::index());
}
if ($uri == '/saude') {
    return print json_encode(Roteador::saude());
}

return print json_encode(Roteador::notFound());
