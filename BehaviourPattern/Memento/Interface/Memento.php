<?php

namespace Lucas\Memento;

interface Memento
{
    public function getName(): string;
    public function getState(): string;
    public function getDate(): string;
}