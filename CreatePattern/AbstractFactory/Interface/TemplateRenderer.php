<?php

namespace Lucas\AbstractFactory;

interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}