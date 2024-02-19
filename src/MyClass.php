<?php

class MyClass {

    public int $id;

    public String $nome;
    public int $idade;
    public $arrayUsuarios;

    public function __construct(int $id, String $nome,  int $idade){

        $this->id = $id;
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome; 
    }
    public function getUsuarios(){
        return $this->arrayUsuarios;
    }
    public function setId(int $id){
        $this->id = $id;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade(int $idade){
        $this->idade = $idade;
    }
    public function adicionarNoArrayDeUsuarios(MyClass $usuario){

        $this->arrayUsuarios [] = $usuario;
    }
    public function retornaUsuario(MyClass $usuario){
        return $usuario;
    }
    
}