<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "PHP/MySQL blog demo";
$pageData->addCSS("css/blog.css");
//load navigation
$pageData->content = include_once "views/admin/admin-navigation.php";
$navigationIsChecked = isset($_GET['page']);
    if($navigationIsChecked){
    $contrl = $_GET['page'];
} else {
    $contrl = "entries";
}
//load the controller
$pageData->content .= include_once "controllers/admin/$contrl.php";
$page = include_once "views/page.php";
echo $page;