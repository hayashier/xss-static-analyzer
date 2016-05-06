<?php
	function outputDirect($contents, $num) {
		var_dump($contents);
		echo '</br></br>';

		if($num >= 3) {
			exit();
		}
	}

	function output($contents, $num) {
		$file = 'C:\xampp\htdocs\test\output.txt';
		$contents = json_encode($contents);
		$contents .= "\n\n";

		file_put_contents($file, $contents, FILE_APPEND);
	}

	function outputData($user_input,$scanned_files,$file_sinks_count,$user_functions_offset){
		//echo '</br></br></br>User input</br></br>';
		//var_dump($user_input);
		//echo '</br></br></br>scan files</br></br>';
		//var_dump($scanned_files);
		//echo '</br></br></br>file sinks count</br></br>';
		//var_dump($file_sinks_count);
		//echo '</br></br></br>user functions offset</br></br>';
		//var_dump($user_functions_offset);
		echo '</br></br></br>Output</br></br>';
		var_dump($GLOBALS['output']);
		/*
		echo '</br></br></br>Scan functions</br></br>';
		foreach($GLOBALS['scan_functions'] as $key => $value) {
			var_dump($key);var_dump($value);var_dump('<br>');
		}
		echo '<hr>';
		echo '</br></br></br>User functions</br></br>';
		foreach($GLOBALS['user_functions'] as $key => $value) {
			var_dump($key);var_dump($value);var_dump('<br>');
		}*/
		//echo '</br></br></br>Vulnerabilities function</br></br>';
		//var_dump($GLOBALS['vul_func']);
	}