<?php

function array_remove($selections, $arr)
{
    $result = $arr;
    foreach ($selections as $selection) {
        unset($result[$selection]);
    }
    return $result;
}


function autoload($class){
    $paths = [
        "classes",
        "models",
        "controllers",
        "core",
    ];
    
    foreach($paths as $path){
        $filePath = "mvc/app/$path/$class.php";
        if(file_exists($filePath)){
            require_once $filePath;
            break;
        }
    }
}

spl_autoload_register("autoload");