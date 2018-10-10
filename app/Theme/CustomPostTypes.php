<?php

namespace App\Theme;

class CustomPostTypes
{

	public function __construct()
	{
		$this->custom_post_types = array(
			array(
				"post_name"  => "news",
				"post_label" => "Nyheter"
			),
			array(
				"post_name"  => "puff",
				"post_label" => "Puffar"
			),
		);
		
		$this->populateAcfAlternatives();
		// acf/update_value - filter for every field
		add_filter('acf/update_value', array($this, 'my_acf_update_value'), 10, 3 );
	}

	public function populateAcfAlternatives() {
		/**
		 * Add users list to the data_curator field
		 */
		add_filter('acf/load_field/name=activated_custom_post_types', function($field) {	
			$field['choices'] = array();
			
			foreach ($this->custom_post_types as $custom_post_type) {
				$field['choices'][$custom_post_type["post_name"]] = $custom_post_type["post_label"];
			}
		
			return $field;
		});
	}

	function my_acf_update_value( $value, $post_id, $field  ) {
	    // only do it to certain custom fields
	    if( $field['name'] == 'activated_custom_post_types' ) {
	        // get the old (saved) value
	        $old_value = get_field('field_5bbe0f502774c', $post_id);
	        
	        // get the new (posted) value
	        $new_value = $_POST['acf']['field_5bbe0f502774c'];
	        
	        // check if the old value is the same as the new value
	        if( $old_value != $new_value ) {
	            // Do something if they are different
	        	$this->registerCustomPostTypes($old_value, $new_value);
	        } else {
	            // Do something if they are the same
	        }
	    }

		// don't forget to return to be saved in the database
	    return $value;
	}

	public function registerCustomPostTypes($new_value) {
		die(print_r("register" . print_r($new_value)));
	}
}
