<?php

namespace App\Acf;

class DataCurator
{
	public function __construct()
	{
		/**
		 * Add users list to the data_curator field
		 */
		add_filter('acf/load_field/name=data_curator', function($field) {	
		
			$field['choices'] = array();
			
			$users = get_users();
			
			foreach ($users as $user) {
				$field['choices'][ $user->ID ] = $user->user_firstname . ' ' . $user->user_lastname;
			}
		
			return $field;
		});
	}
}

