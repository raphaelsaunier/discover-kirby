<?php

/**
 * @param $str
 * @return string
 */
function formatCode($str) {
    return implode("\n", array_map(function($line){
        return new Brick('code', $line);
    }, explode("\n", $str)));
}