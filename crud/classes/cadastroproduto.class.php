<?php

class cadastroproduto {

    var $db;

    function __construct($bd){

        $this->bd = $bd;
    }

    function listar($id=null){

        $id = preg_replace( '/\D/', '', $id);

        $strSql = !empty($id) ? "WHERE id = $id " : '';

        $sql = 'SELECT id, titulo, categoria, preco, modelo, marca, descricao, imagem 
                FROM produto '.$strSql.' ORDER BY id';
        
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

    function salvar($dados)
   {

       $id = $dados['id'];
       $titulo = $dados['titulo'];
       $opcao = $dados['opcao'];
       $preco = $dados['preco'];
       $modelo = $dados['modelo'];
       $marca = $dados['marca'];
       $descricao = $dados['descricao'];
       $imagem = $dados['upload'];

       var_dump($dados); die;
       //Prerar a consulta do bd
       $stmt = $this->bd->prepare('UPDATE produto SET 
                                       titulo = :titulo, 
                                       categoria = :categoria, 
                                       preco = :preco, 
                                       modelo = :modelo, 
                                       marca = :marca,
                                       descricao = :descricao,
                                       imagem = :imagem
                                   WHERE
                                       id = :id');

       $stmt->bindParam( ':id', $id);
       $stmt->bindParam( ':titulo', $titulo);
       $stmt->bindParam( ':categoria', $opcao);
       $stmt->bindParam( ':preco', $preco);
       $stmt->bindParam( ':modelo', $modelo);
       $stmt->bindParam( ':marca', $marca);
       $stmt->bindParam( ':descricao', $descricao);
       $stmt->bindParam( ':imagem', $imagem);
       
       //Executar a consulta no bd
        if ( $stmt->execute() ) {

            //retornar true ou false
            return true;

        } else {

            return false;
        }
   }

 }

