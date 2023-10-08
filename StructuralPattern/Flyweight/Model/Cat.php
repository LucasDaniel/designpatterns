<?php

namespace Lucas\Flyweight;

class Cat
{
    public $name;
    public $age;
    public $owner;
    /**
     * @var CatVariation
     */
    private $variation;

    public function __construct(string $name, string $age, string $owner, CatVariation $variation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->owner = $owner;
        $this->variation = $variation;
    }

    public function getVariation(): CatVariation {
        return $this->variation;
    }

    public function matches(array $query): bool
    {
        return CatService::matches($this,$query);
    }

    public function render(): void
    {
        CatVariationService::renderProfile($this,$this->variation);
    }

}