<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_5bc5f5f211eac',
    'title' => __('Startsida', 'halland'),
    'fields' => array(
        0 => array(
            'key' => 'field_5bc5f6adca7f0',
            'label' => __('Populära länkar', 'halland'),
            'name' => 'popular_links',
            'type' => 'repeater',
            'instructions' => __('Klicka på "Lägg till rad" för att lägga till en länk. Maximalt 5 stycken.', 'halland'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 5,
            'layout' => 'table',
            'button_label' => '',
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_5bc5f8367ecfd',
                    'label' => __('Länk', 'halland'),
                    'name' => 'link',
                    'type' => 'link',
                    'instructions' => __('Lägg till populära länkar på.', 'halland'),
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                ),
            ),
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'page_type',
                'operator' => '==',
                'value' => 'front_page',
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
    'description' => 'Används för att skapa innehåll specifikt för startsidan.',
));
}