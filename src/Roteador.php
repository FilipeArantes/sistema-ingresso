<?php

namespace Ingressos;

class Roteador
{
    public static function index()
    {
        return [
            'status' => 200,
            'data' => [
                'status' => 'ok',
                'versao' => getenv('VERSAO')
            ]
        ];
    }
}