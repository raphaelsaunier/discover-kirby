<?php

class CodemirrorField extends InputField
{
    public static $assets = [
        'js'  => [
            'codemirror.js',
            'css.js',
            'cm.js',
        ],
        'css' => [
            'codemirror.css',
        ],
    ];

    public function __construct()
    {
        $this->type = 'codemirror';
        $this->label = l::get('fields.codemirror.label', 'Codemirror');
    }

    public function input()
    {
        $input = parent::input();
        $input->tag('textarea');
        $input->removeAttr('type');
        $input->removeAttr('value');
        $input->html($this->value() ?: false);
        $input->addClass('codemirror');
        $input->data('field', 'cm');
        return $input;
    }
}