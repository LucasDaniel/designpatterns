<?php

namespace Lucas\Visitor;

interface Entity
{
    public function accept(Visitor $visitor): string;
}
