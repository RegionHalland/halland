<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_5bc5c8dd38eaf',
    'title' => __('Puff', 'halland'),
    'fields' => array(
        0 => array(
            'key' => 'field_5bc5d3ed7c702',
            'label' => __('Utdrag', 'halland'),
            'name' => 'excerpt',
            'type' => 'textarea',
            'instructions' => __('Fyll i en utdrag som visas i puffen. Maximalt 150 tecken.', 'halland'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => 150,
            'rows' => 4,
            'new_lines' => '',
        ),
        1 => array(
            'key' => 'field_5bc5d1cb7aceb',
            'label' => __('Länk', 'halland'),
            'name' => 'link',
            'type' => 'link',
            'instructions' => __('Fyll i en länk för puffen. Kan vara en extern länk, en sida eller ett inlägg.', 'halland'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
        ),
        2 => array(
            'key' => 'field_5bc5d374d6388',
            'label' => __('Kategori', 'halland'),
            'name' => 'category',
            'type' => 'select',
            'instructions' => __('Välj vilken kategori för puffen. Ikon och bakgrundsfärg baseras på detta val.', 'halland'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'default' => __('Standard', 'halland'),
                'staff' => __('Personal', 'halland'),
                'warning' => __('Varning', 'halland'),
            ),
            'default_value' => array(
                0 => 'default',
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'ajax' => 0,
            'return_format' => 'value',
            'placeholder' => '',
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'blurb',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
        0 => 'the_content',
    ),
    'active' => 1,
    'description' => '',
));
}