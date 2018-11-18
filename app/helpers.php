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

if (! function_exists('set_route_active')) {
	
	function set_route_active($route){
		return Route::is($route) ? 'active' : '';
	}
}