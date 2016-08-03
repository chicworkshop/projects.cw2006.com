<?php
  session_start();
  if(isset($_POST['cookie_color'])){$_SESSION = $_POST;}

  $cookie_color = $_SESSION['cookie_color'];
  $message = trim(strip_tags($_SESSION['message']));
  $suffix = $_SESSION['suffix'];
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $email = $_SESSION['email'];
  $friendname = $_SESSION['friendname'];
  $friendemail = $_SESSION['friendemail'];
  $offer = (isset($_SESSION['offer'])) ? "Y" : "N";


if(!isset($_SESSION['id'])){
  include "connect.php";
  $query = "INSERT INTO `list` ( `id` , `cookie_color` , `message` , `suffix` , `firstname` , `lastname` , `email` , `friendname` , `friendemail` , `offer` , `ip` , `date` ) VALUES (NULL , '{$cookie_color}', '{$message}', '{$suffix}', '{$firstname}', '{$lastname}', '{$email}', '{$friendname}', '{$friendemail}', '{$offer}', '{$_SERVER['REMOTE_ADDR']}', NOW( ));";
  mysql_query($query);
  $_SESSION['id'] = mysql_insert_id();
  $to=$friendemail;
  $subject=$firstname." has sent you a fortune cookie";
  $body=file_get_contents('email_message_en_002.html');
  $arr1=array("!friendname","!message","!firstname","!cookie_color");
  $arr2=array($friendname,$message,$firstname,$cookie_color);
  $msg=str_replace($arr1,$arr2,$body);
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  $headers .= "From: " .$email. "\r\n";
  mail($to, $subject, $msg, $headers);
}

session_destroy(); 

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

// Conversion Name:Finish Page
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
document.write('<scr'+'ipt src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&ActivityID=19319&rnd=' + ebRand + '"></scr' + 'ipt>');
//]]>
</script>
<noscript>
<img width="1" height="1" style="border:0" src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&ActivityID=19319" />
</noscript>
<div id="wrapper">
	<div id="container">
		<div id="pageTitle"><img src="images/pageTitle_thank_en.png" alt="Thank you. Your email has been sent." width="340" height="60" /></div>
		<div id="main">
			<p></p>
			<p></p>
			<table width="420" border="0" align="center" cellpadding="0" cellspacing="0" class="tblNormal">
				<tr>
					<td align="center"><a href="index_en.php"><img src="images/btn_send_to_more_en.png" alt="Send a cookie to more friends." width="300" height="20" border="0" /></a></td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.emirates.com/hk/English/destinations_offers/special_offers/book_online_and_win_two_tickets_to_bangkok/book_online_and_win_two_tickets_to_bangkok.aspx?cid=113957"><img src="images/btn_learn_more_en.png" alt="Get lucky and win tickets to Bangkok. " width="300" height="20" border="0" /></a></td>
				</tr>
			</table>
			<p></p>
			<p></p>
			<div id="footer"><img src="images/footer_en.png" alt="" /></div>
		</div>
	</div>
</div>
<? include "../../include/google-analytics.php"; ?>
</body>
</html>
