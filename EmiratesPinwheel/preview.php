<?php
  session_start();
  $_SESSION = $_POST;
  $pinwheel_color = $_SESSION['pinwheel_color'];
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
<div id="wrapper">
	<div class="message">
		<div class="btnContainer">
			<div class="buttonwrapper"> <a class="ovalbutton floatLeft" href="javascript: history.go(-1)" style="width:43%"><span>返回</span></a> <a class="ovalbutton floatLeft" href="sent.php" style="margin-left: 10px;width:43%"><span>传送</span></a> </div>
		</div>
		<!--<a href="javascript: history.go(-1)"><img src="images/btn_back_en.png" alt="Back" width="80" height="20" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="sent_en.php"><img src="images/btn_send_en.png" alt="Send" width="80" height="20" border="0" /></a>-->
	</div>
	<table width="540" height="800" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
		<tr>
			<td width="540" height="470" background="http://mkt.cw2006.com/projects/EmiratesPinwheel/images/email_message_001_01_<?php print $pinwheel_color ?>.jpg"><table width="540" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="200"><img src="http://mkt.cw2006.com/projects/EmiratesPinwheel/images/spacer.gif" alt="" width="200" height="470"></td>
						<td width="340" valign="top"><table width="340" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td><img src="http://mkt.cw2006.com/projects/EmiratesPinwheel/images/spacer.gif" alt="" width="340" height="260"></td>
								</tr>
								<tr>
									<td align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF; padding: 0 0 0 80px">亲爱的<?php print $friendname?> ,</td>
								</tr>
								<tr>
									<td><img src="http://mkt.cw2006.com/projects/EmiratesPinwheel/images/spacer.gif" alt="" width="340" height="60"></td>
								</tr>
								<tr>
									<td align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#ffffff; padding:0 40px 0 0; letter-spacing: 3px"><?php print $message?></td>
								</tr>
								<tr>
									<td><img src="http://mkt.cw2006.com/projects/EmiratesPinwheel/images/spacer.gif" alt="" width="340" height="50"></td>
								</tr>
								<tr>
									<td align="right" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF; padding: 0 40px 0 0"><?php print $firstname?>上</td>
								</tr>
							</table></td>
					</tr>
				</table></td>
		</tr>
		<tr>
			<td><img src="http://mkt.cw2006.com/projects/EmiratesPinwheel/images/email_message_001_02.jpg" width="540" height="45" alt=""></td>
		</tr>
		<tr>
			<td><img src="http://mkt.cw2006.com/projects/EmiratesPinwheel/images/email_message_001_03.jpg" width="540" height="70" border="0"></td>
		</tr>
		<tr>
			<td><img src="http://mkt.cw2006.com/projects/EmiratesPinwheel/images/email_message_001_04.jpg" width="540" height="70" border="0"></td>
		</tr>
		<tr>
			<td><img src="http://mkt.cw2006.com/projects/EmiratesPinwheel/images/email_message_001_05.jpg" width="540" height="70" border="0"></td>
		</tr>
		<tr>
			<td><img src="http://mkt.cw2006.com/projects/EmiratesPinwheel/images/email_message_001_06.jpg" width="540" height="75" alt=""></td>
		</tr>
	</table>
</div>
<? include "../../include/google-analytics.php"; ?>
</body>
</html>
