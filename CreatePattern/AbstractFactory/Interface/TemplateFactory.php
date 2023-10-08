<?php

namespace Lucas\AbstractFactory;

/**
 * Interface to Abstract Factory
 */
interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}