<?php
    
    Class Produto{
     private $codigo;  
     private $nome;
     private $marca;
     private $preco;

 public function __construct($nome,$marca,$preco){

    $this ->nome=$nome;
    $this ->marca=$marca;
    $this ->preco=$preco;
 }

 public function Setcodigo($codigo){
    $this ->codigo = $codigo;
 } 



};

?>