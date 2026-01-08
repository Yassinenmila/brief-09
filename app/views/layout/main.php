<?php 
if($_SERVER['REQUEST_URI']==='/login'|| $_SERVER['REQUEST_URI']==='/signup'){
    require $viewfile;
}else{
require_once __DIR__."/../parts/header.views.php";

require $viewfile;

require_once __DIR__."/../parts/footer.views.php";
}