<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;

require_once "src/ListaNumerica.php";

class ListaNumericaTest extends TestCase
{
    public $lista_numerica;
    public function setUp(): void
    {
        $this->lista_numerica = new ListaNumerica;
    }

    public function testSomarElementos()
    {
        $array = [1, 3, 5, 7];
        assertEquals(16, $this->lista_numerica->somarElementos($array));

        $array = [];
        assertFalse($this->lista_numerica->somarElementos($array));

        $array = [1];
        assertEquals(1, $this->lista_numerica->somarElementos($array));
    }
    public function testEncontraMaiorElemento()
    {
        $array = [1, 3, 5, 7];
        assertEquals(7, $this->lista_numerica->encontrarMaiorElemento($array));

        $array = [];
        assertFalse($this->lista_numerica->encontrarMaiorElemento($array));

        $array = [5];
        assertEquals(5, $this->lista_numerica->encontrarMaiorElemento($array));
    }
    public function testEncontraMenorElemento()
    {
        $array = [1, 3, 5, 7];
        assertEquals(1, $this->lista_numerica->encontrarMenorElemento($array));

        $array = [];
        assertFalse($this->lista_numerica->encontrarMenorElemento($array));

        $array = [5];
        assertEquals(5, $this->lista_numerica->encontrarMenorElemento($array));
    }
    public function testOrdenarLista()
    {
        $array = [3, 1, 6, 5];
        $esperado = [1, 3, 5, 6];
        assertEquals($esperado, $this->lista_numerica->ordenarLista($array));

        $array = [];
        assertFalse($this->lista_numerica->ordenarLista($array));

        $array = [6];
        assertEquals([6], $this->lista_numerica->ordenarLista($array));

    }
     public function testFiltrarNumerosPares()
    {
        $array = [3, 1, 8, 6, 5];
        $array_esperado = [8,6];
        assertEquals($array_esperado, $this->lista_numerica->filtrarNumerosPares($array));

        $array = [];
        assertFalse($this->lista_numerica->filtrarNumerosPares($array));

        $array = [6];
        assertEquals([6], $this->lista_numerica->ordenarLista($array));

        $array = [5];
        assertEquals([], $this->lista_numerica->ordenarLista($array));

    }
}