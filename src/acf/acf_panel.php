<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5d791c20605c9',
        'title' => 'Footer Selector',
        'fields' => array(
            array(
                'key' => 'field_5ffb134220d8c',
                'label' => 'Footer Code',
                'name' => 'footer_code',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'ue__codemirror',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 20,
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5ffb137820d8d',
                'label' => 'Footer AMP Code',
                'name' => 'footer_amp_code',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'ue__codemirror',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 20,
                'new_lines' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'footer',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => 'Allows you to select a specific page as your footer.',
    ));
    
    endif;