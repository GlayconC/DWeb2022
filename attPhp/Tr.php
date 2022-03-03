<?php
class Tr  
{
    private $Colunas = [];

    public function __construct($aTd)
    {
        $this->setColunas($aTd);
    }

    public function __toString()
    {
        $sResult = "<tr>";
        foreach($this->getColunas() as $oColuna) 
        {
            $sResult .= $oColuna . "\n";
        }
        $sResult .= "</tr>";

        return $sResult;
    }

 
    public function getColunas()
    {
        return $this->Colunas;
    }

  
    public function setColunas($Colunas)
    {
        $this->Colunas = $Colunas;

        return $this;
    }
}
