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
}