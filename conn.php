<?php

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='xyz';

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);

// check connection

if($conn->connect_error)
{
    echo "connection failed". $conn->connect_error;
    exit();
}

function select_data($sql);
{
    global $conn;
    $res=mysqli_query($conn,$sql);
        if($re)
        {
            return $res;
        }
        else
        {
            return false;
        }
      
}

function insert_data($sql);
{
    global $conn;
    $res=mysqli_query($conn,$sql);
        if($re)
        {
            return true;
        }
        else
        {
            return false;
        }
      
}

function delete_data($sql);
{
    global $conn;
    $res=mysqli_query($conn,$sql);
        if($re)
        {
            return True;
        }
        else
        {
            return false;
        }
      
}

function update_data($sql);
{
    global $conn;
    $res=mysqli_query($conn,$sql);
        if($re)
        {
            return $res;
        }
        else
        {
            return false;
        }
      
}

function count_data($sql);
{
    global $conn;
    $res=mysqli_query($conn,$sql);
        if($re)
        {
            return  mysqli_num_rows($res);
        }
        else
        {
            return false;
        }
      
}
?>