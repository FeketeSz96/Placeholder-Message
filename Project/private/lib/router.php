<?php
if(file_exists("private/pages/$PAGE.php")){
    require_once "private/pages/$PAGE.php";
}else{
    require_once "private/pages/mainpages/404.php";
}