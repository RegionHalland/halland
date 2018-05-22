<?php 

if ( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_5aa63e3f4d0c8',
    'title' => __('Cookie Notice', 'halland'),
    'fields' => array(
        0 => array(
            'key' => 'field_5aa63e57f6696',
            'label' => __('Message', 'halland'),
            'name' => 'cookie-notice_message',
            'type' => 'wysiwyg',
            'instructions' => __('Meddelande som visar information om kakor.', 'halland'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 'På vardgivare.regionhalland.se använder vi cookies (kakor) för att webbplatsen ska fungera på ett bra sätt för dig. Genom att klicka vidare eller på ”Jag förstår” godkänner du att vi använder cookies.',
            'tabs' => 'all',
            'toolbar' => 'basic',
            'media_upload' => 0,
            'delay' => 0,
        ),
        1 => array(
            'key' => 'field_5aa63e96f6697',
            'label' => __('Button', 'halland'),
            'name' => 'cookie-notice_button',
            'type' => 'text',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 'Jag förstår',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-theme-options',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));

endif;