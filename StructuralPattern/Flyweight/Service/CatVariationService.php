<?php

namespace Lucas\Flyweight;

class CatVariationService
{
    public static function renderProfile(Cat $cat, CatVariation $catVariation) {
        echo "= $cat->name =\n";
        echo "Age: $cat->age\n";
        echo "Owner: $cat->owner\n";
        echo "Breed: $catVariation->breed\n";
        echo "Image: $catVariation->image\n";
        echo "Color: $catVariation->color\n";
        echo "Texture: $catVariation->texture\n";
    }
}
