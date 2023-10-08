<?php

namespace Lucas\AbstractFactory;

class Page
{
    public $title;
    public $content;
    public $phpTemplateFacotry;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
        $this->phpTemplateFacotry = new PHPTemplateFactory();
    }

    public function render():string {
        return PageService::render($this->title,$this->content,$this->phpTemplateFacotry);
    }

}
