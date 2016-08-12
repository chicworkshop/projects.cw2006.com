<?
$dbh=mysql_connect ("localhost", "monimed_admin", "password") or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ("monimed_counterDB");  
?>