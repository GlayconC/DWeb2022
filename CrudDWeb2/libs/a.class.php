<?php

class a 
{
    private $href;
    private $texto;

    private $class;
    
    public function __construct($href, $texto, $class = 'Sem classe')
    {
        $this->href = $href;
        $this->texto = $texto;
        $this->class = $class;
    }

    public function __toString()
    {
        $retorno = "<a href=" . $this->getHref() . " class=" . $this->getClass() . ">";
        $retorno .= $this->getTexto();
        $retorno .= "</a>";

        return $retorno;
    }

    /**
     * Get the value of href
     */ 
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Set the value of href
     *
     * @return  self
     */ 
    public function setHref($href)
    {
        $this->href = $href;

        return $this;
    }

    /**
     * Get the value of texto
     */ 
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set the value of texto
     *
     * @return  self
     */ 
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get the value of class
     */ 
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set the value of class
     *
     * @return  self
     */ 
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }
}