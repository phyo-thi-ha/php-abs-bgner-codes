<?php
$calculateSubmitted = isset($_GET['calculate-submitted']);
if( $calculateSubmitted){
    $weight = $_GET['weight'];
    $height = $_GET['height'];
    $output = calculateBmi($weight,$height);
} else {
    $output = include_once "views/bmi-form.php";
}
return $output;
function calculateBmi($weight,$height){
    $answer = $weight /( 2 * $height);
    return "<p>$answer</p>";
}
