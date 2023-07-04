<?php

return showImages();
function showImages(){
    $out = "<h1>Image Gallery</h1>";
    $out .= "<ul id='images'>";
    $folder = "img";
    $filesInFolder = new DirectoryIterator($folder);
    while ( $filesInFolder->valid()){
        $file = $filesInFolder->current();
        $filname = $file->getFilename();
        $src = "$folder/$filname";
        $mimeType = mime_content_type($src);
    }
    $out .= "<li>I will soon list all images</li>";
    $out .= "</ul>";
    return $out;
}
