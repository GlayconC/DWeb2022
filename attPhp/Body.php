<?php
class Body  
{
    private string $content;
    private $componentes = [];

    public function __construct($content)
    {
        $this->setContent($content);
    }

    public function __toString()
    {
        return "<body> \n {$this->getContent()} \n {$this->getHtmlComponentes()} </body> \n";
    }

    public function getHtmlComponentes() : string
    {
        $sHtml = "";

        foreach($this->getComponentes() as $sComponente) {
            $sHtml .= $sComponente . " \n ";
        }

        return $sHtml;
    }

    public function getContent()
    {
        return $this->content;
    }

 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    public function addComponente($oComponente) 
    {
        $this->componentes[] = $oComponente;
    }

    public function getComponentes()
    {
        return $this->componentes;
    }

 
    public function setComponentes($componentes)
    {
        $this->componentes = $componentes;

        return $this;
    }
}
