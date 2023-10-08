<?php

namespace Lucas\Mediator;

interface Observer
{
    public function update(string $event, object $emitter, $data = null);
}
