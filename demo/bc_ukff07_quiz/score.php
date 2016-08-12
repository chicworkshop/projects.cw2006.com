<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>British Council - UKFF07</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
body {
	background-color: #FFFFFF;
	margin-left: 20px;
	margin-top: 20px;
	margin-right: 20px;
	margin-bottom: 20px;
}
body, td, th {
	color: #333333;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9pt;
}
</style>
</head>
<body>
<?

//db connection string

include 'db_connect.php';



//show the result

$result = mysql_query( "SELECT questions , time, score, yourName ,yourEmail ,yourPhoneNo, country , yourFriendName , yourFriendEmail ,yourMessage , newsLetter, createdatetime  from bc_ukff07_score order by questions desc, time asc, score desc" ) or die("SELECT Error: ".mysql_error());



?>
<B>Score result of top 20 players</B><br>
<br>
<table width="100%" border="1" bordercolor="#AAAAAA" cellpadding="5" cellspacing="0" style="border-collapse:collapse">
  <tr>
    <td height="30" bgcolor="#FFFFFF">Rank</td>
    <td bgcolor="#FFFFFF">Score</td>
    <td bgcolor="#FFFFFF">Correct</td>
    <td bgcolor="#FFFFFF">Time (ms)</td>
    <td bgcolor="#FFFFFF">Your name</td>
    <td bgcolor="#FFFFFF">Your email</td>
    <td bgcolor="#FFFFFF">Your phone no</td>
    <td bgcolor="#FFFFFF">HKID</td>
    <!-- <td>Friend name</td> -->
    <!-- <td>Friend email</td> -->
    <!-- <td>Your Message</td> -->
    <!--    <td>newsletter</td>-->
    <!--    <td>Submit Time</td>-->
  </tr>
  <?

$i = 1;

while ($rs = mysql_fetch_row($result)){ 



	if ($i <=20){

			print "<tr>";



			print "<td>".$i."&nbsp;</td>";
			print "<td>".$rs[2]."&nbsp;</td>";

			print "<td>".$rs[0]."&nbsp;</td>";

			print "<td>".$rs[1]."&nbsp;</td>";


			print "<td>".$rs[3]."&nbsp;</td>";

			print "<td>".$rs[4]."&nbsp;</td>";

			print "<td>".$rs[5]."&nbsp;</td>";

			print "<td>".$rs[6]."&nbsp;</td>";

			//print "<td>".$rs[7]."&nbsp;</td>";

			//print "<td>".$rs[8]."&nbsp;</td>";

			//print "<td>".$rs[9]."&nbsp;</td>";

//			print "<td>".$rs[10]."&nbsp;</td>";

//			print "<td>".$rs[11]."&nbsp;</td>";

			

			print "</tr>";

	

	}

	$i = $i+1;

}



?>
</table>
</body>
</html>
