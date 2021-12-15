<?php 
require_once 'Gafanhoto.php';
require_once 'Video.php';
class Visualizacao {
    private $espectador, $filme;
    //Métodos
    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorcentagem($porcentagem){
        $nova = 0;
        if($porcentagem <= 20){
            $nova = 3;
        }elseif($porcentagem <= 50){
            $nova = 5;
        }elseif($porcentagem <= 90){
            $nova = 8;
        }else{
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
    //Métodos especiais
    public function __construct($espectador,$filme){
        $this->setEspectador($espectador);
        $this->setFilme($filme);
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }
    public function getEspectador(){
        return $this->espectador;
    }
    public function setEspectador($espec){
        $this->espectador = $espec;
    }
    public function getFilme(){
        return $this->filme;
    }
    public function setFilme($f){
        $this->filme = $f;
    }
}
?>