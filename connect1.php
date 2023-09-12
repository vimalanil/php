<?php

$dbname="company";
$conn=mysqli_connect("localhost","root","",$dbname);

// Check connection
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}


function select_data($sql)
{

  global $conn;
  $res = mysqli_query($conn, $sql);
  if ($res)
    return $res;
  else
    return False;
}

function insert_data($sql)
{
  
  global $conn;
  $res = mysqli_query($conn, $sql);
  if ($res)
    return True;
  else
    return False;
}

function delete_data($sql)
{
  global $conn;
  $res = mysqli_query($conn, $sql);
  if ($res) 
    return True; // Deleted successfully
  else 
    return False; // Delete operation failed
 }



function update_data($sql)
{
  
  global $conn;
  $res = mysqli_query($conn, $sql);
  if ($res)
    return True;
  else
    return False;
}

function count_data($sql)
{
  global $conn;
  $res = mysqli_query($conn, $sql);
  if ($res)
    return mysqli_num_rows($res);
  else
    return False;
}

?>


