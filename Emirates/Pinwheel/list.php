<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Emirtes - Pinwheel Report</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="report">
	<?php
  include "connect.php";
  $query = "SELECT * FROM ($dbtabel)";
  $result = mysql_query($query);
  $num_fields = mysql_num_fields($result);

// Printing results in HTML
echo "<table border=0 cellpadding=0 cellspacing=1>\n";
    echo "\t<tr>\n";
     for ($i=0; $i<$num_fields; $i++) {
        echo "\t\t<th>".mysql_field_name($result, $i)."</th>\n";
     }
    echo "\t</tr>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";
?>
	<? include "../../include/google-analytics.php"; ?>
</div>
</body>
</html>
