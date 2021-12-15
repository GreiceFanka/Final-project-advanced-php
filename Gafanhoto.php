<?php 
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa {
    private $login, $totAssistido;
    //Métodos
    public function viuMaisUm(){
        $this->setTotAssistido($this->getTotAssistido() + 1);
    }
    //Métodos especiais
    public function __construct($nome,$idade,$sexo,$login){
        parent::__construct($nome,$idade,$sexo);
        $this->setLogin($login);
        $this->setTotAssistido(0);
    }
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($login){
        $this->login = $login;
    }
    public function getTotAssistido(){
        return $this->totAssistido;
    }
    public function setTotAssistido($ta){
        $this->totAssistido = $ta;
    }
}
?>