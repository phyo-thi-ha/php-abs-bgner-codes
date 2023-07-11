<?php
return "<!DOCTYPE html>
<html lang='en'>
<head>
<title>$pageData->title</title>
<meta http-equiv='Content-Type' content='text/html;charset=utf-8'>
<style>
$pageData->embeddedStyle
</style>
$pageData->css

</head>
<body>
$pageData->content
$pageData->scriptElements
</body>
</html>";