<?php
if(!defined('sugarEntry') || !sugarEntry)
	die("Not a valid sugar entry point");
class ApplicationHookConsumer{
	function before_save_method($bean,$event,$arguments){
		echo "Bean about to be saved!"
	}
}