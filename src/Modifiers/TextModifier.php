<?php

namespace SimonHamp\TheOg\Modifiers;

use Intervention\Image\Drivers\Gd\Modifiers\TextModifier as GdTextModifier;
use Intervention\Image\Drivers\Imagick\Modifiers\TextModifier as ImagickTextModifier;
use Intervention\Image\Geometry\Polygon;

// :embarrassing, but works
if ( extension_loaded('imagick') ) {

    class TextModifier extends ImagickTextModifier
    {
        /**
         * Exists purely to expose Intervention's baked-in boxSize method
         */
        public function boxSize(string $text): Polygon
        {
            return parent::boxSize($text);
        }
    }

} else {

    class TextModifier extends GdTextModifier
    {
        /**
         * Exists purely to expose Intervention's baked-in boxSize method
         */
        public function boxSize(string $text): Polygon
        {
            return parent::boxSize($text);
        }
    }


}