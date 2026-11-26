<?php

namespace Ingressos;

class Roteador
{
    public const STATUS_OK = 200;
    public const STATUS_NOT_FOUND = 400;

    public static function saude()
    {
        http_response_code(self::STATUS_OK);
        return [
            'status' => self::STATUS_OK,
            'data' => [
                'status' => 'ok',
                'versao' => getenv('VERSAO')
            ]
        ];
    }

    public static function index()
    {
        http_response_code(self::STATUS_OK);
        return [
            'status' => self::STATUS_OK
        ];
    }
}