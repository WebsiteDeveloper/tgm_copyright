<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "tgm_copyright"
 *
 * Auto generated by Extension Builder 2016-02-04
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TgM Picture Copyrights',
	'description' => 'This extension will add a copyright field on every image palette and generate a list of all copyright images from the FAL.',
	'category' => 'plugin',
	'author' => 'Paul Beck',
	'author_email' => 'pb@teamgeist-medien.de',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '0.1.2',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.6.99',
			'filemetadata' => '6.2.0-7.6.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);