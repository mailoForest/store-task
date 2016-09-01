<?php

if (!function_exists('readline')) {
	
	if (!defined('STDIN')) {
		define('STDIN', fopen('php://stdin', 'r'));
	}
	
	function readline($prompt = '') {
		echo $prompt;
		return stream_get_line(STDIN, 1024, PHP_EOL);
	}
}