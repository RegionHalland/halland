<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_5b3239313bbe6',
    'title' => __('Temainställningar', 'halland'),
    'fields' => array(
        0 => array(
            'key' => 'field_5b323d0d20e3b',
            'label' => __('Allmänt', 'halland'),
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        1 => array(
            'key' => 'field_5b323e3a33ca1',
            'label' => __('Cookies', 'halland'),
            'name' => 'cookies',
            'type' => 'group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'layout' => 'block',
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_5b323d3820e3d',
                    'label' => __('Meddelande', 'halland'),
                    'name' => 'message',
                    'type' => 'textarea',
                    'instructions' => __('Fyll i information om att kakor används', 'halland'),
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'På den här webbplatsen använder vi cookies (kakor) för att webbplatsen ska fungera på ett bra sätt för dig. Genom att klicka vidare eller på ”Jag förstår” godkänner du att vi använder cookies.',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => 3,
                    'new_lines' => '',
                ),
                1 => array(
                    'key' => 'field_5b323d8620e3e',
                    'label' => __('Knappttext', 'halland'),
                    'name' => 'button',
                    'type' => 'text',
                    'instructions' => __('Fyll i knapptext för godkännande av användning av kakor', 'halland'),
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
                ),
            ),
        ),
        2 => array(
            'key' => 'field_5bbe0f3f2774b',
            'label' => __('Egna inläggstyper', 'halland'),
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        3 => array(
            'key' => 'field_5bbe0f502774c',
            'label' => __('Aktiverade inläggstyper', 'halland'),
            'name' => 'activated_custom_post_types',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'news' => __('Nyhet', 'halland'),
                'blurb' => __('Puff', 'halland'),
            ),
            'allow_custom' => 0,
            'save_custom' => 0,
            'default_value' => array(
            ),
            'layout' => 'vertical',
            'toggle' => 0,
            'return_format' => 'value',
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-temainstallningar',
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
}