<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;

require_once "src/ListaNumerica.php";

class ListaNumericaTest extends TestCase
{
    public $listaNumerica;
    public function setUp(): void
    {
        $this->listaNumerica = new ListaNumerica;
    }

    public function testSomarElementos()
    {
        $array = [1, 3, 5, 7, 0];
        assertEquals(16, $this->listaNumerica->somarElementos($array));

        $array = [1, -3, -5, 7, -10, 0];
        assertEquals(-10, $this->listaNumerica->somarElementos($array));

        $array = [];
        assertFalse($this->listaNumerica->somarElementos($array));

        $array = [1];
        assertEquals(1, $this->listaNumerica->somarElementos($array));
    }
    public function testEncontraMaiorElemento()
    {
        $array = [1, 3, 5, 7];
        assertEquals(7, $this->listaNumerica->encontrarMaiorElemento($array));

        $array = [-1, -3, -5, -7];
        assertEquals(-1, $this->listaNumerica->encontrarMaiorElemento($array));

        $array = [];
        assertFalse($this->listaNumerica->encontrarMaiorElemento($array));

        $array = [5];
        assertEquals(5, $this->listaNumerica->encontrarMaiorElemento($array));
    }
    public function testEncontraMenorElemento()
    {
        $array = [1, 3, 5, 7];
        assertEquals(1, $this->listaNumerica->encontrarMenorElemento($array));

        $array = [-1, -3, -5, -7];
        assertEquals(-7, $this->listaNumerica->encontrarMenorElemento($array));

        $array = [];
        assertFalse($this->listaNumerica->encontrarMenorElemento($array));

        $array = [5];
        assertEquals(5, $this->listaNumerica->encontrarMenorElemento($array));
    }
    public function testOrdenarLista()
    {
        $array = [3, 1, 6, 5];
        $resultadoEsperado = [1, 3, 5, 6];
        assertEquals($resultadoEsperado, $this->listaNumerica->ordenarLista($array));

        $array = [-3, -1, -6, -5];
        $resultadoEsperado = [-6, -5, -3, -1];
        assertEquals($resultadoEsperado, $this->listaNumerica->ordenarLista($array));

        $array = [];
        assertFalse($this->listaNumerica->ordenarLista($array));

        $array = [6];
        assertEquals([6], $this->listaNumerica->ordenarLista($array));
    }
    public function testFiltrarNumerosPares()
    {
        $array = [3, 1, 8, 6, 5];
        $array_resultadoEsperado = [8, 6];
        assertEquals($array_resultadoEsperado, $this->listaNumerica->filtrarNumerosPares($array));

        $array = [3, 1, -8, -6, 5];
        $array_resultadoEsperado = [-8, -6];
        assertEquals($array_resultadoEsperado, $this->listaNumerica->filtrarNumerosPares($array));

        $array = [];
        assertFalse($this->listaNumerica->filtrarNumerosPares($array));

        $array = [6];
        assertEquals([6], $this->listaNumerica->filtrarNumerosPares($array));

        $array = [11];
        assertEquals([], $this->listaNumerica->filtrarNumerosPares($array));
    }
}
