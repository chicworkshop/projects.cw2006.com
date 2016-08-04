<?php
  session_start();
  $_SESSION = $_POST;
  $cookie_color = $_SESSION['cookie_color'];
  $message = trim(strip_tags($_SESSION['message']));
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $friendname = $_SESSION['friendname'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Emirates | Book online and win</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<script type="text/javascript">

// Conversion Name:Preview Page
// INSTRUCTIONS
// The Conversion Tags should be placed at the top of the <BODY> section of the HTML 
// page. 
// In case you want to ensure that the full page loads as a prerequisite for a conversion
// being recorded, place the tag at the bottom of the page. Note, however, that this may
// skew the data in the case of slow-loading pages and in general not recommended.
//
// NOTE: It is possible to test if the tags are working correctly before campaign launch 
// as follows:  Browse to http://bs.serving-sys.com/BurstingPipe/testmode.asp, which is 
// a page that lets you set your local machine to "testing" mode.  In this mode, when
// visiting a page that includes an conversion tag, a new window will open, showing you
// the data sent by the conversion tag to the Eyeblaster servers.
//
// END of instructions (These instruction lines can be deleted from the actual HTML).

var ebRand = Math.random()+ ' ';
ebRand = ebRand * 1000000;
//<![CDATA[
document.write('<scr'+'ipt src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&ActivityID=19318&rnd=' + ebRand + '"></scr' + 'ipt>');
//]]>
</script>
<noscript>
<img width="1" height="1" style="border:0" src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&ActivityID=19318" />
</noscript>
<div id="wrapper">
	<div class="message"><a href="javascript: history.go(-1)"><img src="images/btn_back_en.png" alt="Back" width="80" height="20" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="sent_en.php"><img src="images/btn_send_en.png" alt="Send" width="80" height="20" border="0" /></a></div>
	<table width="540" height="850" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
		<tr>
			<td><img src="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/images/email_message_en_002_01.jpg" width="540" height="50" alt=""></td>
		</tr>
		<tr>
			<td background="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/images/email_message_en_002_02.jpg"><table width="540" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="50"><img src="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/images/spacer.gif" alt="" width="50" height="40"></td>
						<td align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF;">Dear <?php print $friendname?> ,</td>
						<td width="50"><img src="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/images/spacer.gif" alt="" width="50" height="40"></td>
					</tr>
					<tr>
						<td><img src="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/images/spacer.gif" alt="" width="50" height="120"></td>
						<td align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#333333;"><?php print $message?></td>
						<td><img src="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/images/spacer.gif" alt="" width="50" height="120"></td>
					</tr>
					<tr>
						<td><img src="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/images/spacer.gif" alt="" width="50" height="20"></td>
						<td align="right" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF;">From <?php print $firstname?></td>
						<td><img src="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/images/spacer.gif" alt="" width="50" height="20"></td>
					</tr>
				</table></td>
		</tr>
		<tr>
			<td><img src="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/images/email_message_002__03_.jpg" width="540" height="110" alt=""></td>
		</tr>
		<tr>
			<td><img src="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/images/email_message_en_002_04_<?php print $cookie_color ?>.jpg" width="540" height="150" alt=""></td>
		</tr>
		<tr>
			<td><img src="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/images/email_message_en_002_05.jpg" width="540" height="80" alt=""></td>
		</tr>
		<tr>
			<td><img src="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/images/email_message_en_002_06.jpg" width="540" height="75" alt=""></td>
		</tr>
		<tr>
			<td><img src="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/images/email_message_en_002_07.jpg" width="540" height="75" alt=""></td>
		</tr>
		<tr>
			<td><img src="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/images/email_message_en_001_10.jpg" width="540" height="130" alt=""></td>
		</tr>
	</table>
</div>
<? include "../../include/google-analytics.php"; ?>
</body>
</html>
