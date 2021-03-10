<?php

return [

    'defaults' => [
        'wrapper_class'       => '--defaults.wrapper_class',
        'wrapper_error_class' => '--defaults.wrapper_error_class',
        'label_class'         => 'block font-medium text-sm text-gray-700',
        'field_class'         => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full',
        'field_error_class'   => '--defaults.field_error_class',
        'help_block_class'    => '--defaults.help_block_class',
        'error_class'         => '--defaults.error_class',
        'required_class'      => '--defaults.required',

        'static' => [
            'field_class' => '--defaults.static.field_class',
        ],

        'checkbox' => [
            'wrapper_class' => 'block',
            'field_class'   => 'rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
            'label_class'   => 'inline-flex items-center',

            'choice_options' => [
                'wrapper_class' => '--defaults.checkbox.choice_options.wrapper_class',
                'label_class'   => '--defaults.checkbox.choice_options.label_class',
                'field_class'   => '--defaults.checkbox.choice_options.field_class',
            ],
        ],

        'radio' => [
            'wrapper_class' => '--defaults.radio.wrapper_class',
            'field_class'   => '--defaults.radio.field_class',
            'label_class'   => '--defaults.radio.label_class',

            'choice_options' => [
                'wrapper_class' => '--defaults.radio.choice_options.wrapper_class',
                'label_class'   => '--defaults.radio.choice_options.label_class',
                'field_class'   => '--defaults.radio.choice_options.field_class',
            ],
        ],

        'submit' => [
            'wrapper_class' => '',
            'field_class'   => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3',
        ],

        'reset' => [
            'wrapper_class' => '',
            'field_class'   => 'inline-flex items-center px-4 py-2 bg-gray-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-300 active:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3',
        ],
    ],

    // Templates
    'form'        => 'laravel-form-builder::form',
    'text'        => 'laravel-form-builder::text',
    'textarea'    => 'laravel-form-builder::textarea',
    'button'      => 'laravel-form-builder::button',
    'buttongroup' => 'laravel-form-builder::buttongroup',
    'radio'       => 'laravel-form-builder::radio',
    'checkbox'    => 'laravel-form-builder::checkbox',
    'select'      => 'laravel-form-builder::select',
    'choice'      => 'laravel-form-builder::choice',
    'repeated'    => 'laravel-form-builder::repeated',
    'child_form'  => 'laravel-form-builder::child_form',
    'collection'  => 'laravel-form-builder::collection',
    'static'      => 'laravel-form-builder::static',

    // Remove the laravel-form-builder:: prefix above when using template_prefix
    'template_prefix'   => '',

    'default_namespace' => '',

    'custom_fields' => [
        //
    ],

];
