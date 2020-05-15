<?php


class Comentario {
   private $idcoment;
   private $idnoticia;
   private $textocomentario;
   private $dtacomentario;
   
   
   function getIdcoment() {
       return $this->idcoment;
   }

   function getIdnoticia() {
       return $this->idnoticia;
   }

   function getTextocomentario() {
       return $this->textocomentario;
   }

   function getDtacomentario() {
       return $this->dtacomentario;
   }

   function setIdcoment($idcoment) {
       $this->idcoment = $idcoment;
   }

   function setIdnoticia($idnoticia) {
       $this->idnoticia = $idnoticia;
   }

   function setTextocomentario($textocomentario) {
       $this->textocomentario = $textocomentario;
   }

   function setDtacomentario($dtacomentario) {
       $this->dtacomentario = $dtacomentario;
   }


  
}
