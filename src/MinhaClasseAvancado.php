<?php

class MinhaClasseAvancado
{

    public function somar(...$args)
    {

        if (MinhaClasseAvancado::validarArgs($args) == False) {
            throw new Exception("Nenhum argumento foi passado!");
        }

        $resultado = 0;

        foreach ($args as $numero) {

            if (gettype($numero) != 'integer' && gettype($numero) != 'float' && gettype($numero) != 'double') {
                throw new Exception("Formato passado é inválido! A soma não será concluída.");
            }
            
            $resultado += $numero;
        }

        return number_format($resultado, 2, '.', '');
    }

    public function subtrair(...$args)
    {

        if (MinhaClasseAvancado::validarArgs($args) === False) {
            throw new Exception("Nenhum argumento foi passado!");
        }

        $resultado = 0;

        foreach ($args as $numero) {

            if (gettype($numero) != 'integer' && gettype($numero) != 'float' && gettype($numero) != 'double') {
                throw new Exception("Formato informado é inválido! A subtração não será concluída.");
            }

            $resultado -= $numero;
        }
        
        return number_format($resultado, 2, '.', '');
    }

    public static function validarArgs($args)
    {
        $quantidade_elementos = count($args);

        if ($quantidade_elementos === 0) {
            return False;
        }

        return True;
    }
}
