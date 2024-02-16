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
            if ($lista[$posicao] %2 == 0) {
                $array_pares [] = $lista[$posicao];
            }
        }
        return $array_pares;
    }
}
//Nessa classe estão todas as funções pedidas no PDF, optei por utilizar as funções do próprio PHP para economizar espaço e tempo / nao sei se é a opção mais performática, creio que não
// Todas as funções validam se o array tem 0 elementos ou se tem apenas 1 elemento, com exceção da function filtrarNumerosPares que apenas valida se o array está vazio
// Não é necessário adicionar uma validação para vários elementos pois caso houver 1 elemento ou 0 elementos o programa ja retorna