<?php

namespace App\Acf;

class Import
{
	public function __construct()
	{
		/**
		 * ACF auto import and export fields
		 */
		add_action('init', function() {
			if (class_exists('AcfExportManager\AcfExportManager')) {
				$acfExportManager = new \AcfExportManager\AcfExportManager();
				$acfExportManager->setTextdomain('halland');
				$acfExportManager->setExportFolder(__DIR__);
				$acfExportManager->autoExport(array(
					'theme-options' => 'group_5b3239313bbe6',
				    // 'options-theme-cookie-notice' => 'group_5aa63e3f4d0c8',
					'options-theme-data-curator' => 'group_5ac48d9ea70de',
					'template-top-links' => 'group_5accade8e6c07'
				));
				$acfExportManager->import();
			}
		});
	}
}

