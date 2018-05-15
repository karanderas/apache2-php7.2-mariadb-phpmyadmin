<?php

define("DBUSER","root");
define("DBHOST","database");
define("DBNAME","mvcdocker2");
define("DBPWD","password");
define("DBPORT","3306");
define("DBDRIVER","mysql");


define("DS", "/");
//dirname($_SERVER['SCRIPT_NAME']) => /projet IW
//dirname($_SERVER['SCRIPT_NAME']) => /
$scriptName = (dirname($_SERVER["SCRIPT_NAME"]) == "/")?"":dirname($_SERVER["SCRIPT_NAME"]);

define("DIRNAME", $scriptName.DS);


