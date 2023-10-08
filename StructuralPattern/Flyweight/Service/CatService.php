<?php

namespace Lucas\Flyweight;

class CatService
{
    public static function matches(Cat $cat,array $query): bool
    {
        foreach ($query as $key => $value) {
            if (property_exists($cat, $key)) {
                if ($cat->$key != $value) {
                    return false;
                }
            } elseif (property_exists($cat->getVariation(), $key)) {
                if ($cat->getVariation()->$key != $value) {
                    return false;
                }
            } else {
                return false;
            }
        }

        return true;
    }
}