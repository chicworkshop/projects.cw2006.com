<?php
  session_start();
  if(isset($_POST['pinwheel_color'])){$_SESSION = $_POST;}

  $pinwheel_color = $_SESSION['pinwheel_color'];
  $message = trim(strip_tags($_SESSION['message']));
  $suffix = $_SESSION['suffix'];
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $email = $_SESSION['email'];
  $friendname = $_SESSION['friendname'];
  $friendemail = $_SESSION['friendemail'];
  $offer = (isset($_SESSION['offer'])) ? "Y" : "N";
  $lang = $_SESSION['lang'];

if(!isset($_SESSION['id'])){
  include "connect.php";
  $query = "INSERT INTO `EmiratesPinwheel` ( `id` , `pinwheel_color` , `message` , `suffix` , `firstname` , `lastname` , `email` , `friendname` , `friendemail` , `offer` , `lang` , `ip` , `date` ) VALUES (NULL , '{$pinwheel_color}', '{$message}', '{$suffix}', '{$firstname}', '{$lastname}', '{$email}', '{$friendname}', '{$friendemail}', '{$offer}', '{$lang}', '{$_SERVER['REMOTE_ADDR']}', NOW( ));";
  mysql_query($query);
  $_SESSION['id'] = mysql_insert_id();
  $to=$friendemail;
  $subject=$firstname."为你送上幸运风车";
  $body=file_get_contents('email_message_001.html');
  $arr1=array("!friendname","!message","!firstname","!pinwheel_color");
  $arr2=array($friendname,$message,$firstname,$pinwheel_color);
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
<div id="wrapper">
	<div id="container" style="background: url(images/pageBg_sent.jpg) no-repeat;height: 365px;">
		<div id="pageTitle"></div>
		<div class="sentbtn"><a href="index.php"><img src="images/spacer.gif" alt="" width="540" height="35" /></a></div>
		<div class="sentbtn"><a href="http://www.emirates.com/cn/chinese/destinations_offers/special_offers/book_onlin_and_win/book_online_and_win_skywards_miles.aspx?cid=114943"><img src="images/spacer.gif" alt="" width="540" height="35" /></a></div>
	</div>
</div>
<? include "../../include/google-analytics.php"; ?>
</body>
</html>
