<?php
require_once('Head.php');
require_once('Body.php');
class Html  
{
    
    private $lang;
    private Head $Head;
    private Body $Body;

    public function __construct($sLang, $Head, $Body)
    {
        $this->setLang($sLang)->setHead($Head)->setBody($Body);
    }

    public function __toString()
    {
        $sResult = "<html lang=\"{$this->getLang()}\"> \n";
        $sResult .= $this->getHead();
        $sResult .= $this->getBody();
        $sResult .= "</html> \n";
        
        return $sResult;
    }
 
    public function getLang()
    {
        return $this->lang;
    }

    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    public function getHead()
    {
        return $this->Head;
    }

    public function setHead($Head)
    {
        $this->Head = $Head;

        return $this;
    }
 
    public function getBody()
    {
        return $this->Body;
    }

 
    public function setBody($Body)
    {
        $this->Body = $Body;

        return $this;
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
