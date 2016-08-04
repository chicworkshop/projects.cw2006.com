<?php
  session_start();
  $cookie_color = "red";
  $message = "Go back and agree to the terms & conditions";
  $suffix = "";
  $firstname = "Admin";
  $lastname = "";
  $email = "";
  $friendname = $_POST['firstname'];
  $friendemail = "";


if(isset($_POST['terms'])){
  $_SESSION = $_POST;
  $cookie_color = $_POST['cookie_color'];
  $message = $_POST['message'];
  $suffix = $_POST['suffix'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $friendname = $_POST['friendname'];
  $friendemail = $_POST['friendemail'];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Emirtes - Fortune Cookie</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div class="message"><a href="index.php"><img src="images/btn_back.png" alt="Send" width="80" height="20" border="0" /></a><?php if(isset($_POST['terms'])): ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="sent_0.php"><img src="images/btn_send.png" alt="Send" width="80" height="20" border="0" /></a><?php endif; ?></div>
	<!-- ImageReady Slices (email_message_001.psd) -->
	<table width="540" height="850" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
		<tr>
			<td colspan="3"><img src="images/email_message_001_01.jpg" width="540" height="60" alt="" /></td>
		</tr>
		<tr>
			<td><img src="images/email_message_001_02.jpg" width="70" height="120" alt="" /></td>
			<td width="400" height="120" bgcolor="#f4f4f4"><table width="380" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#333333;">Dear <?php print $friendname?></td>
					</tr>
					<tr>
						<td align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#333333;"><?php print $message?></td>
					</tr>
					<tr>
						<td align="right" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#333333;">From <?php print $firstname?></td>
					</tr>
				</table></td>
			<td><img src="images/email_message_001_04.jpg" width="70" height="120" alt="" /></td>
		</tr>
		<tr>
			<td colspan="3"><img src="images/email_message_001_05_<?php print $cookie_color ?>.jpg" width="540" height="180" alt="" /></td>
		</tr>
		<tr>
			<td colspan="3"><img src="images/email_message_001_06.png" width="540" height="280" alt="" /></td>
		</tr>
		<tr>
			<td colspan="3"><a href="#"><img src="images/email_message_001_07.png" alt="" width="540" height="40" border="0" /></a></td>
		</tr>
		<tr>
			<td colspan="3"><a href="http://mkt.cw2006.com/projects/EmiratesFortuneCookie/"><img src="images/email_message_001_08.png" alt="" width="540" height="40" border="0" /></a></td>
		</tr>
		<tr>
			<td colspan="3"><a href="#"><img src="images/email_message_001_09.png" alt="" width="540" height="40" border="0" /></a></td>
		</tr>
		<tr>
			<td colspan="3"><img src="images/email_message_001_10.png" width="540" height="90" alt="" /></td>
		</tr>
	</table>
	<!-- End ImageReady Slices -->
</div>
<? include "/include/google-analytics.php"; ?>
</body>
</html>
