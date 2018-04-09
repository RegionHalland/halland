<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ac48d9ea70de',
	'title' => 'Innehåll',
	'fields' => array(
		array(
			'key' => 'field_5acb2d2a0d8dc',
			'label' => 'Innehållsansvarig',
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
		array(
			'key' => 'field_5acb2f3f7decc',
			'label' => 'Manuell Innehållsansvarig',
			'name' => 'manual_data_curator',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Fyll i innehållsansvarig manuellt',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5ac48df44d019',
			'label' => 'Innehållsansvarig',
			'name' => 'data_curator',
			'type' => 'select',
			'instructions' => 'Välj en innehållsansvarig i listan.',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5acb2f3f7decc',
						'operator' => '!=',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				1 => 'Admin Adminsson',
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
		array(
			'key' => 'field_5acb2f957decd',
			'label' => 'Innehållsansvarig',
			'name' => 'innehallsansvarig',
			'type' => 'text',
			'instructions' => 'Fyll i namn på den innehållsansvarige.',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5acb2f3f7decc',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5acb2dc3c017a',
			'label' => 'E-post',
			'name' => 'data_curator_email',
			'type' => 'email',
			'instructions' => 'Fyll i en e-postadress till den innehållsansvarige.',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5acb2f3f7decc',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5acb371ba5ed2',
			'label' => 'Innehållsbeskrivning',
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
		array(
			'key' => 'field_5acb3696a5ed1',
			'label' => 'Utdrag',
			'name' => 'excerpt',
			'type' => 'textarea',
			'instructions' => 'Beskriv kortfattat sidans innehåll. Max 80 tecken.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'T.ex. "Hitta information om vården i Halmstad"',
			'maxlength' => 80,
			'rows' => 2,
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '!=',
				'value' => 'post',
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