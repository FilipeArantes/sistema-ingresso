<?php

namespace Tests;

use Ingressos\Roteador;
use PHPUnit\Framework\TestCase;

class RoteadorTest extends TestCase
{
    public function test_rota_saude()
    {
        $dadosRetornados = Roteador::saude();

        $this->assertArrayHasKey('status', $dadosRetornados);
        $this->assertArrayHasKey('data', $dadosRetornados);
        $this->assertSame(200, $dadosRetornados['status']);
        $this->assertArrayHasKey('status', $dadosRetornados['data']);
        $this->assertArrayHasKey('versao', $dadosRetornados['data']);
        $this->assertSame('ok', $dadosRetornados['data']['status']);
        $this->assertSame(getenv('VERSAO'), $dadosRetornados['data']['versao']);
    }
}