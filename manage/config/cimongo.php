<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Generally localhost
$config['host'] = "localhost";
// Generally 27017
$config['port'] = 27017;
// The database you want to work on
$config['db'] = "data";
// Required if Mongo is running in auth mode
$config['user'] = "gone";
$config['pass'] = "gone123";

/*  
 * Defaults to FALSE. If FALSE, the program continues executing without waiting for a database response. 
 * If TRUE, the program will wait for the database response and throw a MongoCursorException if the update did not succeed.
*/
//$config['query_safety'] = TRUE;
$config['w'] = 0;
//If running in auth mode and the user does not have global read/write then set this to true
//$config['db_flag'] = TRUE;

//consider these config only if you want to store the session into mongoDB
//They will be used in MY_Session.php
$config['sess_use_mongo'] = false;
$config['sess_collection_name']	= 'ci_sessions';
 