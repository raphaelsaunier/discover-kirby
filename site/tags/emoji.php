<?php

/**
 * Dummy kirby tag to showcase kirbytext extensions
 */
kirbytext::$tags['emoji'] = array(
    'html' => function($tag) {
        return '<span class="emoji">' . $tag->attr('emoji') .'</a>';
    }
);