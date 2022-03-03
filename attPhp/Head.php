<?php
require_once('Meta.php');
require_once('Title.php');
class Head  
{
    
    private $Metas = [];
    private $Title;

    public function __construct($aMetas, $Title)
    {
        $this->setMetas($aMetas)->setTitle($Title);
    }

    public function __toString()
    {
        $sResult = "<head> \n";
        foreach($this->getMetas() as $oMeta) {
            $sResult .= $oMeta . "\n";
        }
        $sResult .= $this->getTitle();
        $sResult .= "</head> \n";

        return $sResult;
    }


    public function getMetas()
    {
        return $this->Metas;
    }
   
    public function setMetas($Metas)
    {
        $this->Metas = $Metas;

        return $this;
    }

    public function getTitle()
    {
        return $this->Title;
    }

    public function setTitle($Title)
    {
        $this->Title = $Title;

        return $this;
    }
}
