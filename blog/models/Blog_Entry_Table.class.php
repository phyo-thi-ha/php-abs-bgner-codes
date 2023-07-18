<?php
class Blog_Entry_Table{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function saveEntry($title,$entry){
        $entrySQL = "INSERT INTO blog_entry (title,entry_text) VALUES (? , ?)";
        $entryStatement = $this->db->prepare($entrySQL);
        $formData = array($title,$entry);
        try{
            $entryStatement->execute($formData);
        } catch (Exception $e) {
            $msg = "<p>Yot tried to run this sql: $entrySQL</p>
                    <P>Exception: $e</P>";
            trigger_error($msg);
        }

    }
}