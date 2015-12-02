<?php
    defined('_VKL_INIT')||(header("HTTP/1.1 403 Forbidden")&die('403.2 - Read access is denied.'));

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
