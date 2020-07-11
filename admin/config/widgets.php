<?php

$config['widgets'] = array(
    /*
    array(
        'module' => 'news',
        'icon'	=> 'fa-text-width',
        'type'	=> 'app-full app-success',
    ),
    */
	array(
		'module' => 'callyou',
		'icon'	=> 'fa-phone',
		'info'	=> 'Yeni',
	),
	array(
		'module' => 'contact',
		'icon'	=> 'fa-envelope',
		'info'	=> 'Yeni',
		'where' => array('viewed' => 0)
	),
	array(
		'module' => 'tapu',
		'icon'	=> 'fa-map',
		'info'	=> 'Yeni',
		'where' => array('viewed' => 0)
	),
);
