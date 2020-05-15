<?php


class Noticia {
   private $idnoticia;
   private $titulo;   
   private $dtapublicacao;   
   private $imagem;   
   private $categoria;   
   private $autor;   
   private $textonoticia;   
   private $subtitulonoticia; 
   private $idcomentario;
   private $views;
   public function getIdnoticia() {
       return $this->idnoticia;
   }

   public function getTitulo() {
       return $this->titulo;
   }

   public function getDtapublicacao() {
       return $this->dtapublicacao;
   }

   public function getIamgem() {
       return $this->iamgem;
   }

   public function getCategoria() {
       return $this->categoria;
   }

   public function getAutor() {
       return $this->autor;
   }

   public function getTextonoticia() {
       return $this->textonoticia;
   }

   public function getSubtitulonoticia() {
       return $this->subtitulonoticia;
   }

   public function getIdcomentario() {
       return $this->idcomentario;
   }

   public function getViews() {
       return $this->views;
   }

   public function setIdnoticia($idnoticia) {
       $this->idnoticia = $idnoticia;
   }

   public function setTitulo($titulo) {
       $this->titulo = $titulo;
   }

   public function setDtapublicacao($dtapublicacao) {
       $this->dtapublicacao = $dtapublicacao;
   }

   public function setIamgem($iamgem) {
       $this->iamgem = $iamgem;
   }

   public function setCategoria($categoria) {
       $this->categoria = $categoria;
   }

   public function setAutor($autor) {
       $this->autor = $autor;
   }

   public function setTextonoticia($textonoticia) {
       $this->textonoticia = $textonoticia;
   }

   public function setSubtitulonoticia($subtitulonoticia) {
       $this->subtitulonoticia = $subtitulonoticia;
   }

   public function setIdcomentario($idcomentario) {
       $this->idcomentario = $idcomentario;
   }

   public function setViews($views) {
       $this->views = $views;
   }


 
}
