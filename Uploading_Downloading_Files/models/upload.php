<?php

final class upload extends database\model
{
    public $id;
    public $filename;
    public $name;
    public $fileBlob;
    protected static $modelName = 'upload';

    public static function getTablename()
    {

        $tableName = 'uploads';
        return $tableName;
    }
}

?>
