<?php

include_once "models/Blog_Entry_Table.class.php";
$entryTable = new Blog_Entry_Table($db);
$editorSubmitted = isset($_POST['action']);
if( $editorSubmitted ){
    $buttonClicked = $_POST['action'];
    $save = ($buttonClicked ==='save');
    $id = $_POST['id'];
    //id id = 0 the editor was empty
    //so user tries to save a new entry
    $insertNewEntry = ($save and $id==='0');
    $deleteEntry = ($buttonClicked === 'delete');
    //if $insertNewEntry is false you know that entry_id was NOT 0
    //That happens when an existing entry was displayed in editor
    //in other words: user tries to save an existing entry
    $updateEntry = ( $save and $insertNewEntry===false);
    //get title and entry data from editor form
    $title = $_POST['title'];
    $entry = $_POST['entry'];
    if ($insertNewEntry){
        $savedEntryId = $entryTable->saveEntry($title,$entry);

    } else if ($updateEntry){
        $entryTable->updateEntry($id,$title,$entry);
        $savedEntryId = $id;
    }
    else if($deleteEntry) {
        $entryTable->deleteEntry($id);
    }
}
$entryRequested = isset($_GET['id']);
if ($entryRequested){
    $id = $_GET['id'];
    $entryData = $entryTable->getEntry($id);
    $entryData->entry_id = $id;
    $entryData->message = "";
}

$entrySaved = isset($savedEntryId);
if($entrySaved){
    $entryData = $entryTable->getEntry($savedEntryId);
    $entryData->message = "Entry was saved";
}
$editorOutput = include_once "views/admin/editor-html.php";
return $editorOutput;