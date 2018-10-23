<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_5bb466860c5c3',
    'title' => __('Områdesnyheter', 'halland'),
    'fields' => array(
        0 => array(
            'key' => 'field_5bb466c085d70',
            'label' => __('Nyhetskategori', 'halland'),
            'name' => 'show_news_category',
            'type' => 'select',
            'instructions' => __('Välj vilken kategori du vill visa nyheter ifrån.', 'halland'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                1 => __('Generell', 'halland'),
                5 => __('Läkemedel', 'halland'),
            ),
            'default_value' => array(
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
                'param' => 'post_template',
                'operator' => '==',
                'value' => 'views/template-section-landing.blade.php',
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