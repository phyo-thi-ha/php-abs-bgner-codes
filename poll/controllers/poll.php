<?php
include_once "models/Poll.class.php";
$poll = new Poll($db);
$isPollSubmiteted = isset($_POST['user-input']);
if($isPollSubmiteted){
    $input = $_POST['user-input'];
    $poll->updatePoll($input);
}
$pollData = $poll->getPollData();
$pollAsHTML = include_once "views/poll-html.php";
return $pollAsHTML;
