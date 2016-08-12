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
<B>Score result of players</B><br>
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
        <td>Submit Time</td>
  </tr>
  <?

$i = 1;

while ($rs = mysql_fetch_row($result)){ 



//	if ($i <=20){

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



//$hkTime = time() + (12 * 60 * 60);
//$hkTime = time();
//strtotime("2007-01-01");
$timeStr=$rs[11];

$mon = substr($timeStr,5,2);
$day = substr($timeStr,8,2);
$year = substr($timeStr,0,4);

$hour=substr($timeStr,11,2);
$min=substr($timeStr,14,2);
$sec=substr($timeStr,17,2);

$svrTime = mktime($hour,$min,$sec,$mon,$day,$year);
$hkTime = $svrTime + (12 * 60 * 60);

//echo 'Now:       '. date('Y-m-d h:i:s') ."\n";
//echo '+10 Hrs: '. date('Y-m-d', $hkTime) ."\n";

//echo 'Next Week: '. date('Y-m-d', strtotime('+10 hour')) ."\n";



			print "<td>".date('Y-m-d H:i:s', $hkTime)."&nbsp;</td>";

//			print "<td>".$rs[11]."&nbsp;</td>";

			

			print "</tr>";

	

//	}

	$i = $i+1;

}



?>
</table>
<noscript><img width="0" height="0" src="http://bchongkong.mtk1.com/perl/mtk1.pl?js=0" /></noscript><script src="http://bchongkong.mtk1.com/js/mtk1.js"></script>
</body>
</html>
