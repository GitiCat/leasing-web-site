<?php

function autoload($classname) {
    $filename = strtolower($classname) . '.php';
    $expArr = explode('_', $classname);

    if(empty($expArr[0]) OR $expArr[1] == 'Base') {
        $folder = 'classes';
    } else {
        switch(strtolower($expArr[0])) {
            case 'controller':
                $folder = 'controllers';
                break;
            
            case 'model':
                $folder = 'models';
                break;
            
            default:
                $folder = 'classes';
                break;
        }
    }

    $file = SITE_PATH . DS . 'src' . DS . $folder . DS . $filename;

    if(!file_exists($file)) {
        return false;
    }
    
    include($file);
}