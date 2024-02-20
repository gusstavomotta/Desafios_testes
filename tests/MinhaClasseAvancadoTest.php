<?php

use PHPUnit\Framework\TestCase;

require_once "src/MinhaClasseAvancado.php";

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;

class MinhaClasseAvancadoTest extends TestCase
{

    public $minhaClasse;

    public function setUp(): void
    {
        $this->minhaClasse = new MinhaClasseAvancado;
    }

    public function testSomaCorreta()
    {

        assertEquals(10.8, $this->minhaClasse->somar(0, 1.3, 2.5, 3, 4, 5, -5));
    }
    public function testSomaComArgumentosInvalidos()
    {

        $this->expectException(Exception::class);
        $this->minhaClasse->somar('ads', 'fdsafsda', 1);
    }
    public function testSomaVazio()
    {

        $this->expectException(Exception::class);
        $this->minhaClasse->somar();
    }
    public function testSubtracaoCorreta()
    {

        assertEquals(-.7, $this->minhaClasse->subtrair(0, 2.5, 3.2, -5));
    }
    public function testSubtracaoComArgumentosInvalidos()
    {

        $this->expectException(Exception::class);
        $this->minhaClasse->subtrair('asdfsdafsad', 'teste', 3);
    }

    public function testSubtracaoVazio()
    {

        $this->expectException(Exception::class);
        $this->minhaClasse->subtrair();
    }
}
