<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Subheader field for text,textpic,html,image in BE',
	'description' => 'Show subheader field in BE not to only to ctype header, but also for text,textpic,html,image',
	'category' => 'be',
	'state' => 'stable',
	'author' => 'Fabian Thommen',
	'author_email' => 'ft@taywa.ch',
	'author_company' => 'taywa gmbh, Zürich',
	'clearCacheOnLoad' => 1,
	'version' => '0.0.2',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-8.99.99',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);
