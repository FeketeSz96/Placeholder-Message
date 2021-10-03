<?php
function lib(string|array $library) : void{
    global $PAGE;
    if (is_array($library)) {
        foreach ($library as $lib){
            require_once "private/lib/$lib.php";
        }
    }else{
        require_once "private/lib/$library.php";
    }
}