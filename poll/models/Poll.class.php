<?php

class Poll{
    private $db;

    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
    }

    public function getPollData(){
        $sql = "SELECT poll_question, yes, no FROM poll WHERE poll_id = 1";
        $statement = $this->db->prepare($sql);
        $statement->execute();
        $pollData = $statement->fetchObject();
        return $pollData;
    }

    public function updatePoll($input){
        if ($input == "yes"){
            $updateSQL = "UPDATE poll SET yes = yes+1 WHERE poll_id=1";
        } else {
            $updateSQL = "UPDATE poll SET no = no+1 WHERE poll_id=1";
        }
        $updateStatement = $this->db->prepare($updateSQL);
        $updateStatement->execute();
    }

}