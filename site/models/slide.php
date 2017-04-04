<?php

class SlidePage extends Page
{
    public function slideImages()
    {
        return $this->images()->filter(function ($image) {
            return !$image->dontShowAsSlide()->bool();
        });
    }
}