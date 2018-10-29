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
				    'section-news' => 'group_5bd01c9054d92',
					'options-theme-data-curator' => 'group_5ac48d9ea70de',
					'template-top-links' => 'group_5accade8e6c07',
					'front-page' => 'group_5bc5f5f211eac',
					'blurb' => 'group_5bc5c8dd38eaf',
					'blurbs' => 'group_5bc5e091993ac'
				));
				$acfExportManager->import();
			}
		});
	}
}

