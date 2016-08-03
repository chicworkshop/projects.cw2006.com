<?php
  session_start();
  $offer = (isset($_POST['offer'])) ? "Y" : "N";
  $suffix = $_SESSION['suffix'] =$_POST['suffix'];
  $firstname = $_SESSION['firstname'] = $_POST['firstname'];
  $lastname = $_SESSION['lastname'] = $_POST['lastname'];
  $email = $_SESSION['email'] = $_POST['email'];
  include "connect.php";
  $query = "UPDATE `list` SET `suffix` = '{$suffix}',`firstname` = '{$firstname}',`lastname` = '{$lastname}',`email` = '{$email}',`offer` = 'Y' WHERE `id` ={$_SESSION['id']} LIMIT 1 ;";
  mysql_query($query);
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
		<div id="pageTitle"><img src="images/pageTitle_subscribed.png" alt="Thank you. Your email has been sent." width="340" height="60" /></div>
		<div id="main">
			<form id="form1" name="form1" method="post" action="">
				<table width="460" border="0" align="center" cellpadding="0" cellspacing="0" class="tblNormal">
					<tr>
						<td align="center"><a href="index.php"><img src="images/btn_send_to_more.png" alt="Send to more friends" width="300" height="20" border="0" /></a></td>
					</tr>
					<tr>
						<td align="center"><a href="#"><img src="images/btn_learn_more.png" alt="Subscribe to Emirates special offers email." width="300" height="20" border="0" /></a></td>
					</tr>
				</table>
			</form>
			<div id="footer"><img src="images/footer.png" alt="" /></div>
		</div>
	</div>
</div>
<? include "../../include/google-analytics.php"; ?>
</body>
</html>
