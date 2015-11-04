<?php

function LangChecker()
{
 	// let's check the lang (by default it's en)
	// TODO: get the lang using navigator
	if (isset($_GET['lang']))
	{
	    if(trim($_GET['lang']) == 'fr') {
	        $curr_lang = 'fr';
	        require_once('../lang/fr.php');
	    }
	    else
	    if(trim($_GET['lang']) == 'en'){
	        $curr_lang = 'en';
	        require_once('../lang/en.php');
	    }
	    else{
	        $curr_lang = 'en';
	        require_once('../lang/en.php');
	    }
	}
	else{
	    $curr_lang = 'en';
	    require_once('../lang/en.php');
	}
	// don't forget this one
	require_once('../lang/selector.php');
} 


function ShowDir($dir = './logs')
{
	$handle = opendir($dir);
    while ($months = readdir($handle))
    {
        // Is there is a way to make this proper?
        if ($months !== '.') {
            if ($months !== '..')
                echo "$months\n";
        }
    }
    closedir($handle);
}

?>