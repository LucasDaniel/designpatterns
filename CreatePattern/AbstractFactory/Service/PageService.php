<?php

namespace Lucas\AbstractFactory;

class PageService
{

    // Here's how would you use the template further in real life. Note that the
    // page class does not depend on any concrete template classes.
    public static function render($title,$content,$factory): string
    {
        $pageTemplate = $factory->createPageTemplate();
        $renderer = $factory->getRenderer();

        return $renderer->render($pageTemplate->getTemplateString(), [
            'title' => $title,
            'content' => $content
        ]);
    }

}