<?php
class Title  
{
    
    private string $content;

    public function __construct($sContent)
    {
        $this->setContent($sContent);
    }

    public function __toString()
    {
        return "<title>{$this->getContent()}</title> \n";
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
}

