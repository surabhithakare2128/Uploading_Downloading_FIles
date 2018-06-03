<?php

class uploads extends \database\collection
{
    protected static $modelName = 'uploads';

    public static function findAll()
    {
        //$filename = $_POST['t'];
                       
        $tableName = get_called_class();
        $sql = 'SELECT id, filename, name, type, size FROM uploads';

        //print_r($sql);

        //grab all records
        $recordsSet = self::getResults($sql);

        if (is_null($recordsSet)) {
            return FALSE;
        } 
        else {
            return $recordsSet;
        }
    }
}
