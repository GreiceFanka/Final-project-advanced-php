<?php 
require_once 'Interface.php';

class Video implements AcoesVideo {
    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

    //Métodos
    public function play(){
        $this->setReproduzindo(true);
    }
    public function pause(){
        $this->setReproduzindo(false);
    }
    public function like(){
        $this->setCurtidas($this->getCurtidas() + 1);
    }
    //Métodos especiais
    public function __construct($titulo){
        $this->setTitulo($titulo);
        $this->setAvaliacao(1);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }
    public function setTitulo($t){
        $this->titulo = $t;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setAvaliacao($a){
       $media =($this->avaliacao + $a);
       $this->avaliacao = $media;
    }
    public function getAvaliacao(){
        return $this->avaliacao;
    }
    public function setViews($v){
        $this->views = $v;
    }
    public function getViews(){
        return $this->views;
    }
    public function setCurtidas($c){
        $this->curtidas = $c;
    }
    public function getCurtidas(){
        return $this->curtidas;
    }
    public function setReproduzindo($r){
        $this->reproduzindo = $r;
    }
    public function getReproduzindo(){
        return $this->reproduzindo;
    }
}
?>