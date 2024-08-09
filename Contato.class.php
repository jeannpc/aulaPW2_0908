<?php


/**
 * @author Jean Pereira COelho
 * data agosto/2024
 * Classe com conexao a banco de dados
 * @return boolean 
 */

class Contato{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    function getId(){
        return $this ->id;
    }

    function getNome(){
        return $this ->nome;
    }

    function getEmail(){
        return $this ->email;
    }

    function getSenha(){
        return $this ->senha;

    }

    function setNome($nome){
        return $this -> nome = $nome;
    }

    function setEmail($email){
        return $this -> email = $email;
    }

    function setSenha($senha){
        return $this -> senha = $senha;
    }

        function __construct (){
         # o PDO precisa de 3 parametros
         $dsn    = "mysql:dbname=etimcontato;host=localhost";
         $dbUser = "root";
         $dbPass =  "";   
        

       try {
            $this -> pdo = new PDO($dsn, $dbUser, $dbPass);//code...
            echo "<script>
                alert('Conectado ao banco')
                </script>";

        } catch (\Throwable $th) {
            echo "<script>
                alert('Banco indisponivel, tente mais tarde!!')
                </script>";//throw $th;
                echo $th;
        }
    }

    /**
     * @author Jean Coelho
     * data agosto/2024
     * Metodo de conexao ao banco de dados
     * Tirei o metodo construtor porque ele nao retorna nada e queria testar se conectou
     * @return boolean 
     */

    
}