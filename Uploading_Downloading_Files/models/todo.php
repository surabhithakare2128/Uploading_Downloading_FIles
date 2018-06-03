<?php

final class todo extends database\model
{
    public $id;
    public $owneremail;
    public $ownerid;
    public $createddate;
    public $duedate;
    public $message;
    public $isdone;
    protected static $modelName = 'todo';

    public static function getTablename()
    {

        $tableName = 'todos';
        return $tableName;
    }

    public function validate()
    {
        $valid = TRUE;
       // echo 'myemail: ' . $this->email;
        if($this->message == '') {
            $valid = FALSE;
            echo 'nothing in message';
        }


        return $valid;

    }
}

?>
