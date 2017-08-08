<?php
$hook_array['before_save'][] = array(
	1,
	'custom Logic',
	'custom/notSoAwesomeHook.php',
	'ApplicationHookConsumer',	//reference class name
	'before_save_method', 		//Method to be declared in class
	);
