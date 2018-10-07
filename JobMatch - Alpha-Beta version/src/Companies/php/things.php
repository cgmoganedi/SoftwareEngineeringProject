<?php
include_once 'connection.php';

function Query($field, $table, $id,$conn)
{
    $sql = "SELECT ".$field." FROM ".$table." WHERE ID = '$id'";
    $result = mysqli_query($conn, $sql);

    if(!$result)
    {
        echo 'Error on getting user data';
    }
    else
    {
        while ($row = $result->fetch_assoc())
        {
            $output[] = $row;
            //echo $row.'</br>';
            return $output[0][$field];
        }
    }
}