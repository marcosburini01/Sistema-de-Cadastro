<?php

class Usuario{

    private $cpf;
    private $nome;
    private $idade;
    private $cidade;
    private $email;
    private $senha;

    public function getCpf():int{
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function dados():array{
        return [
            'cpf'=>$this->cpf,
            'nome'=>$this->nome,
            'idade'=>$this->idade,
            'cidade'=>$this->cidade,
            'email'=>$this->email,
            'senha'=>$this->senha
        ];
    }
}

class Sql{

    private $con;

    public function __construct(){
        $this->con = new PDO("mysql:host=localhost;dbname=projeto;", "root", "");
    }

    public function insert($array){
        $this->con;
        $stmt = $this->con->prepare("INSERT INTO usuario(cpf,nome,idade,cidade,email,senha) VALUES (:cpf, :nome, :idade, :cidade, :email, :senha)");
        return $stmt->execute($array);
    }
}

// $t = new Usuario();
// $t->setCpf(13404249917);
// $t->setNome('Marcos Burini');
// $t->setIdade(22);
// $t->setCidade(2);
// $t->setEmail('marcosburini@123');
// $t->setSenha('test');

// $all = $t->dados();

// var_dump($all);

// $b = new Sql();
//$b->test($all);

?>