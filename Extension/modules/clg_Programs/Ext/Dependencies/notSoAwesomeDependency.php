<?php
$dependencies['clg_Programs']['ateeq'] = array(
	'hooks' 		=> array("edit"),
	'trigger' 		=> true,
	'triggerFields' => array("name"),
	'onload' 		=> true,
	'actions' 		=> array(
		array(
			'name' 			=> 'setRequired',
			'params' 		=> array(
				'target'	=> 'description',
				'label' 	=> 'description_label',
				'value' 	=> 'equal($name,"closed")',
				),
			),
		),
	);