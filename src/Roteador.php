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
            'status' => self::STATUS_OK,
            'message' => 'Tudo ok'
        ];
    }

    public static function notFound()
    {
        http_response_code(self::STATUS_NOT_FOUND);
        return [
            'status' => self::STATUS_NOT_FOUND,
            'message' => 'Pagina não existente'
        ];
    }
}