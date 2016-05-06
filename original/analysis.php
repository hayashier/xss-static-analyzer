<?php
	function trace_param($param, $obj, $i = 0) {//token form, return value: value

		if ($param[1] === 'new') {
			return  $obj->var_declares_global[$obj->tokens[$i-2][1]][0]->tokens[0][1];
		}
		else if ($obj->var_declares_global[$param[1]][0]->tokens[2][1] === 'new') {
			return $obj->var_declares_global[$param[1]][0]->tokens[3][1];
		}

		while(!empty($param[1]) && $param[1] !== 'new'){
			$param_before = $param;
			$param = $obj->var_declares_global[$param[1]][0]->tokens[2];
		}

		return $param_before[1];
	}