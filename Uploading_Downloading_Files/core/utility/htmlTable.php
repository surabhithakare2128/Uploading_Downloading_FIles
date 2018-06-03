<?php

namespace utility;

class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {

        $tableGen = '<table border="8" bordercolor="black" align="center" cellpadding="10" bgcolor="#d3d3d3" >';
        $tableGen .= '<tr>';
        $tableGen .= '<th>Download Option</th>';
        $tableGen .= '<th>File Name</th>';
        $tableGen .= '<th>Name</th>';
        //$tableGen .= '<th>Blob</th>';
        $tableGen .= '<th>Type</th>';
        $tableGen .= '<th>Size</th>';
        $tableGen .= '</tr>';

        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {
                    $tableGen .= '<td><a href="index.php?page=uploads&action=downloadFile&id=' . $value .' ">Download</a></td>';
                } else {
                    $tableGen .= '<td>' . $value . '</td>';
                }
            }
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table>';

        return $tableGen;
    }

    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table border="8" bordercolor="black" align="center" cellpadding="10" bgcolor="#d3d3d3" >';

        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';

        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
    
    public static function genarateTableFromMultiArra($array)
    {

        $tableGen = '<table border="8" bordercolor="black" align="center" cellpadding="10" bgcolor="#d3d3d3" >';
        $tableGen .= '<tr>';
        //this grabs the first element of the array so we can extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
            $tableGen .= '<th bgcolor="#708090">' . $heading . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {


                    $tableGen .= '<td>' . $value .  '</td>';

                } else {
                    $tableGen .= '<td>' . $value . '</td>';
                }
            }
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table>';

        return $tableGen;
    }


}

?>