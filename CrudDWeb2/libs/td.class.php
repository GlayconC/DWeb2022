<?php

class td
{
     private $conteudo;

     public function __construct($conteudo)
     {
          $this->conteudo = $conteudo;
     }

     public function __toString()
     {
          $retorno = "<td>\n";
          $retorno .= $this->getConteudo();
          $retorno .= "</td>\n";

          return $retorno;
     }

     /**
      * Get the value of conteudo
      */
     public function getConteudo()
     {
          return $this->conteudo;
     }

     /**
      * Set the value of conteudo
      *
      * @return  self
      */
     public function setConteudo($conteudo)
     {
          $this->conteudo = $conteudo;

          return $this;
     }
}