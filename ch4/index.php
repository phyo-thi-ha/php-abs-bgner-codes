<?php
ini_set( "display_errors", 1 );
error_reporting(E_ALL);
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->addCSS( 'css/layout.css');
$pageData->addCSS('css/navi.css');
$pageData->title = "Dynamic image gallery";
$pageData->content = include_once "views/navigation.php";
//$pageData->content .= "<div>...and a form here</div>";
$navigationIsClicked = isset($_GET['page']);
if($navigationIsClicked){
    $fileToLoad = $_GET['page'];
} else {
    $fileToLoad = "gallery";
}
$pageData->content .= include_once "views/$fileToLoad.php";
$page = include_once "templates/page.php";
echo $page;