<?php
/**
 * (c) Copyright 2017 Destiny MIS
 * Utility.php
 * Contains DB connection
 */
session_start();
error_reporting(E_ALL);

function opendb(){
    $con=array(
        "host"=>"localhost",
        "username"=>"root",
        "password"=>"",
        "db_name"=>"destiny-mis-web"
    );
    return mysqli_connect($con['host'],$con['username'],$con['password'],$con['db_name']);
}
function closedb($con){
    mysqli_close($con);
}
