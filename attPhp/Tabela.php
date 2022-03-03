<?php
require_once('Tr.php');
require_once('Td.php');
class Table  
{
    
    private $Linhas = [];

    public function __construct($aTitulos, $iLinhas, $aConteudo)
    {
        $this->montaEstrutura($aTitulos, $iLinhas, $aConteudo);
    }

    public function montaEstrutura(array $aTitulos, int $iLinhas, array $aConteudo) 
    {
        $aTr = [];
        $aTr[] = $this->getTrTitulos($aTitulos, $aConteudo);
        $aTr = array_merge($aTr, $this->getLinhasRestantes($iLinhas, $aConteudo)); 
        $this->setLinhas($aTr);
    }

    private function getTrTitulos(array $aTitulos, array $aConteudo) 
    {
        $aTd = [];
        foreach($aTitulos as $sTitulo) {
            $oTd = $this->getNewTd($sTitulo);
            $aTd[] = $oTd;
        }
        return $this->getNewTr($aTd);
    }

    private function getNewTd($sTexto) : Td
    {
        return new Td($sTexto);
    }

    private function getNewTr($aTd) : Tr
    {
        return new Tr($aTd);
    }


    private function getLinhasRestantes(int $iLinhas, array $aConteudo) : array
    {
        $iLimite = 1;
        $aTr = [];
        foreach($aConteudo as $aLinha)
        { 
            $aTd = [];
            foreach($aLinha as $xColuna) 
            {
                $aTd[] = $this->getNewTd($xColuna);
            }
            $aTr[] = $this->getNewTr($aTd);
            $iLimite++;
            if ($iLimite > $iLinhas) {
                break;
            }
        }
        return $aTr;
    }

    public function __toString()
    {
        $sResult = "<table> \n";
        foreach($this->getLinhas() as $oLinha) 
        {
            $sResult .= $oLinha . "\n";
        }
        $sResult .= "</table> \n";

        return $sResult;
    }

    public function getLinhas()
    {
        return $this->Linhas;
    }

    public function setLinhas($Linhas)
    {
        $this->Linhas = $Linhas;

        return $this;
    }

}
