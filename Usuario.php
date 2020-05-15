<?php

require_once 'noticia.php';
require_once 'connection.php';
class Usuario {
    private $idusuario;
    private $nome;
    private $login;
    private $senha;
    private $esportefavorito;
    public function daroi(){
   echo "<script>alert('fazendo o site')</script>";
    }
    public function getIdusuario() {
        return $this->idusuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getEsportefavorito() {
        return $this->esportefavorito;
    }

    public function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setEsportefavorito($esportefavorito) {
        $this->esportefavorito = $esportefavorito;
    }

     function pesquisarInfo(){
        
    }
    function alterarInfo(){
        
    }
    function comentarNoti(){
        
    }
    function visualizarNoti($n1){
        $n1->setViews( $n1->getViews()+1);
    
         echo "<script>alert('noticia visualizada');</script>";
       
    }
  
    
   
}
