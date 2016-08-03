<?php

$dbms = 'mysql';
$dbhost = 'localhost';
$dbport = '';

$dbname = 'cw2006com_db';
$dbuser = 'cw2006_dbuser';
$dbpasswd = 'cw2oo6c0m';

$dbtabel = 'EmiratesPinwheel';

$link = mysql_pconnect($dbhost,$dbuser,$dbpasswd) 
or die("Could not connect"); 
mysql_select_db($dbname) 
or die("Could not select database");
mysql_query("SET NAMES 'utf8'");
?>