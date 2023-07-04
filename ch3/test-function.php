<?php
 function p(){
    return "<p>This paragraph came from a function</p>";
}
$output = p();
$output .= "<h1>Just some heading</h1>";
$output .= p();
echo $output;