<?php

class Uploader{
    private $fileName;
    private $fileData;
    private $destination;
    public function __construct($key)
    {
        $this->fileName = $_FILES[$key]['name'];
        echo $this->fileName;
        $this->fileData = $_FILES[$key]['tmp_name'];
    }

    public function saveIn($folder){
        $this->destination = $folder;
    }
    public function save(){
        $folderIsWritebale = is_writable($this->destination);
        if($folderIsWritebale){
            $name = "$this->destination/$this->fileName";
            $success = move_uploaded_file($this->fileData,$name);
        } else {
            trigger_error("cannot write to $this->destination");
            $success = false;
        }
        return $success;
    }
}