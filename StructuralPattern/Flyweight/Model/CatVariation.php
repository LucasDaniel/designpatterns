<?php

namespace Lucas\Flyweight;

class CatVariation
{
    public $breed;
    public $image;
    public $color;
    public $texture;
    public $fur;
    public $size;

    public function __construct(string $breed, string $image, string $color,
                                string $texture, string $fur, string $size ) {
        $this->breed = $breed;
        $this->image = $image;
        $this->color = $color;
        $this->texture = $texture;
        $this->fur = $fur;
        $this->size = $size;
    }
    
}
