<?php

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