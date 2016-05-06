<?php
	function stop($lap) {
		if($lap == 121) {
			exit();
		}
	}

	function secondDump($lap, $contents) {
		if($lap == 1) {var_dump($contents);}
	}