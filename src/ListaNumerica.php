<?php

class ListaNumerica
{

    public function somarElementos(array $lista)
    {
        $quantidade_elementos = count($lista);

        if ($quantidade_elementos == 0) {
            return false;

        } elseif ($quantidade_elementos == 1) {
            return $soma_total = $lista[0];
        }

        $soma_total = array_sum($lista);
        return $soma_total;
    }
    public function encontrarMaiorElemento(array $lista)
    {
        $quantidade_elementos = count($lista);

        if ($quantidade_elementos == 0) {
            return false;

        } elseif ($quantidade_elementos == 1) {
            return $maior_elemento = $lista[0];
        }

        $maior_elemento = max($lista);
        return $maior_elemento;
    }
    public function encontrarMenorElemento(array $lista)
    {
        $quantidade_elementos = count($lista);

        if ($quantidade_elementos == 0) {
            return false;

        } elseif ($quantidade_elementos == 1) {
            return $menor_elemento = $lista[0];
        }

        $menor_elemento = min($lista);
        return $menor_elemento;
    }
    public function ordenarLista(array $lista)
    {
        $quantidade_elementos = count($lista);

        if ($quantidade_elementos == 0) {
            return false;
            
        } elseif ($quantidade_elementos == 1) {
            return array($lista[0]);
        }

        sort($lista);
        return $lista;
    }
    public function filtrarNumerosPares(array $lista)
    {
        $quantidade_elementos = count($lista);
        if ($quantidade_elementos == 0) {
            return false;
        }

        $array_pares = [];

        for ($posicao = 0; $posicao < $quantidade_elementos; $posicao++) {
            if ($lista[$posicao] % 2 == 0) {
                $array_pares[] = $lista[$posicao];
            }
        }
        return $array_pares;
    }
}
