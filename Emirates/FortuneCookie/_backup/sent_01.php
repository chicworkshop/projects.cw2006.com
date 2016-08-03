<?php
  session_start();
  $cookie_color = $_SESSION['cookie_color'];
  $message = $_SESSION['message'];
  $suffix = $_SESSION['suffix'];
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $email = $_SESSION['email'];
  $friendname = $_SESSION['friendname'];
  $friendemail = $_SESSION['friendemail'];

  $suffix1 = ($suffix == "Mr." ) ? "checked" : "";
  $suffix2 = ($suffix == "Mrs." ) ? "checked" : "";
  $suffix3 = ($suffix == "Miss" ) ? "checked" : "";

if(!isset($_SESSION['id'])){
  include "connect.php";
  $query = "INSERT INTO `list` ( `id` , `cookie_color` , `message` , `suffix` , `firstname` , `lastname` , `email` , `friendname` , `friendemail` , `ip` , `date` ) VALUES (NULL , '{$cookie_color}', '{$message}', '{$suffix}', '{$firstname}', '{$lastname}', '{$email}', '{$friendname}', '{$friendemail}', '{$_SERVER['REMOTE_ADDR']}', NOW( ));";
  mysql_query($query);
  $_SESSION['id'] = mysql_insert_id();
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
	<div id="container">
		<div id="pageTitle"><img src="images/pageTitle_thank.png" alt="Thank you. Your email has been sent." width="340" height="60" /></div>
		<div id="main">
			<form id="form1" name="form1" method="post" action="subscribed.php">
				<table width="420" border="0" align="center" cellpadding="0" cellspacing="0" class="tblNormal">
					<tr>
						<td colspan="2" align="left"><label>
							<input type="checkbox" name="offer" id="offer" />
							I want to subscribe to Emirates special offer email.</label></td>
					</tr>
					<tr>
						<td align="left">Your title:</td>
						<td align="left"><label>
							<input type="radio" name="suffix" id="suffix1" value="Mr." <?php print $suffix1 ?> />
							Mr.</label>
							&nbsp;&nbsp;
							<label>
							<input type="radio" name="suffix" id="suffix2" value="Mrs." <?php print $suffix2 ?> />
							Mrs.</label>
							&nbsp;&nbsp;
							<label>
							<input type="radio" name="suffix" id="suffix3" value="Miss" <?php print $suffix3 ?> />
							Miss</label></td>
					</tr>
					<tr>
						<td align="left">Your first name:</td>
						<td align="left"><input type="text" name="firstname" id="firstname" value="<?php print $firstname ?>" /></td>
					</tr>
					<tr>
						<td align="left">Your last name:</td>
						<td align="left"><input type="text" name="lastname" id="lastname" value="<?php print $lastname ?>" /></td>
					</tr>
					<tr>
						<td align="left">Your email:</td>
						<td align="left"><input type="text" name="email" id="email" value="<?php print $email ?>" /></td>
					</tr>
					<tr>
						<td colspan="2" align="left"><label>
							<input type="checkbox" name="terms2" id="terms2" />
							I agree to the <a href="#">terms &amp; conditions</a>*</label></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="image" src="images/btn_submit.png" alt="Submit" /></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><div style="background:#ffffff; margin:10px 0"><img src="images/spacer.gif" alt="" /></div></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><a href="index.php"><img src="images/btn_send_to_more.png" alt="Send to more friends" width="300" height="20" border="0" /></a></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><a href="#"><img src="images/btn_learn_more.png" alt="Subscribe to Emirates special offers email." width="300" height="20" border="0" /></a></td>
					</tr>
				</table>
			</form>
			<div id="footer"><img src="images/footer.png" alt="" /></div>
		</div>
	</div>
</div>
<? include "/include/google-analytics.php"; ?>
</body>
</html>
