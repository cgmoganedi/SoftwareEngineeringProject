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
            return $output[0][$field];
        }
    }
}

function Query2($field, $table,$conn)
{
    $result_array = array();
    $sql = "SELECT ".$field." FROM ".$table." WHERE 1";
    $result = mysqli_query($conn, $sql);

    if(!$result)
    {
        echo 'Error on getting user data';
    }
    else
    {
        $count = 0;
        while ($row = $result->fetch_assoc())
        {
            $output[] = $row;
            array_push($result_array,strtoupper($output[$count][$field]));
            $count += 1;
        }
    }

    return $result_array;
}