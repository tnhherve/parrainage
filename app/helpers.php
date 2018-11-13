<?php

if (! function_exists('page_title')) {
	
	function page_title($title){
		$var = "Paratel - ENSPM";
		if ($title==='') {
			return $var;
		}else{
			return $title.' | '.$var;
		}
	}
}