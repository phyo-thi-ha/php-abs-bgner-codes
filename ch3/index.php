<?php
error_reporting(E_ALL);
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->css = "<link rel='stylesheet' href='css/layout.css'>";
$pageData->title = "Building and processing HTML forms with PHP";
$pageData->content = include_once "views/navigation.php";
//$pageData->content .= "<div>...and a form here</div>";
$navigationIsClicked = isset($_GET['page']);
if($navigationIsClicked){
    $fileToLoad = $_GET['page'];
} else {
    $fileToLoad = "bmi";
}
$pageData->content .= include_once "views/$fileToLoad.php";
$page = include_once "templates/page.php";
echo $page;