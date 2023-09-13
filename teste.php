<?php

class Pessoa{
    protected $nome;
    protected $documento;

    public function __construct($nome,$documento){
        $this->nome = $nome;
        $this->documento = $documento;
    
    }
    public function apresentar(){
        return "ola me chamo:{$this->nome}e meu documento é: {$this->documento}"; 
    }
    public function setNome($novoNome){
        $this->nome = $novoNome;
    }
    public function setDocumento($novoDoc){
        $this->documento = $novoDoc;
    }
    public function getNome(){
        return $this->nome;

    }
    public function getDocumento(){
        return $this->documento;

    }


}
$caio = new Pessoa("Caio",55778899622);
$caio->setNome("Caio dos Santos");
echo "<h1>". $caio->apresentar() . "</h1>";
echo "<br>" . $caio->getDocumento();



?>