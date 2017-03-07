<?php
// Report all PHP errors
ini_set('error_reporting', E_ALL);

require_once 'dbconnect.php'; //Connecting to Mysql DB
require_once 'quarry.php'; //Getting the querry to execute

$query = get_quarry();

$database = new db();

$res = $database->query($query);

$output = $database->result($res);

header('Content-Type: application/json');
print json_encode($output);