<?php

namespace Lucas\Mediator;

class User
{
    public $attributes = [];

    public function update($data): void
    {
        $this->attributes = array_merge($this->attributes, $data);
    }

    /**
     * All objects can trigger events.
     */
    public function delete(): void
    {
        echo "User: I can now delete myself without worrying about the repository.\n";
        events()->trigger("users:deleted", $this, $this);
    }
}