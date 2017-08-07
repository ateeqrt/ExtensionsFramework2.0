<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/clg_Programs/Ext/Dependencies/notSoAwesomeDependency.php

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
?>
