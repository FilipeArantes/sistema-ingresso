<?php

namespace Ingressos;

class Roteador
{
    public static function saude()
    {
        return [
            'status' => 200,
            'data' => [
                'status' => 'ok',
                'versao' => getenv('VERSAO')
            ]
        ];
    }

    public static function index()
    {
        return [
            'status' => 200
        ];
    }
}