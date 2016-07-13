<?php 
function get_section_options($vars){
	$search = array_search("show_advanced", array_keys($vars));
	$tempVars = array_slice($vars, $search);
	$sizeof = sizeof($tempVars);
	foreach ($tempVars as $key => $value) {
    		if(is_array($tempVars[$key])){
                $tempVars[$key] = $tempVars[$key][0];
    		}	
	    }
	    // debug($tempVars);
	    return $tempVars;
    };
