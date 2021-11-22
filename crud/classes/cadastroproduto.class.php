<?php

class cadastroproduto {

    var $db;

    function __construct($bd){

        $this->bd = $bd;
    }

    function listar(){

        $sql = 'SELECT id, titulo, categoria, preco, modelo, marca, descricao, imagem FROM produto ORDER BY id';

        
        foreach ($this->bd->query($sql) as $registro) {

            $lista[$registro['id']] = $registro;
            

        }

        return $lista;
    }

    function excluir($id){

        $id = preg_replace( '/\D/ ', '', $id );

       if($this->bd->query("DELETE FROM produto WHERE id = $id")){

             return true;

       }else{

            return false;

       }
    }

}