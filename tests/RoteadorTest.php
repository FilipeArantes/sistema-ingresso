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
        $this->assertSame(Roteador::STATUS_OK, $dadosRetornados['status']);
        $this->assertArrayHasKey('status', $dadosRetornados['data']);
        $this->assertArrayHasKey('versao', $dadosRetornados['data']);
        $this->assertSame('ok', $dadosRetornados['data']['status']);
        $this->assertSame(getenv('VERSAO'), $dadosRetornados['data']['versao']);
    }

    public function test_rota_index()
    {
        $dadosRetornados = Roteador::index();

        $this->assertArrayHasKey('status', $dadosRetornados);
        $this->assertSame(Roteador::STATUS_OK, $dadosRetornados['status']);
    }

    public function test_rota_not_found()
    {
        $dadosRetornados = Roteador::notFound();

        $this->assertArrayHasKey('status', $dadosRetornados);
        $this->assertSame(Roteador::STATUS_NOT_FOUND, $dadosRetornados['status']);
    }
}