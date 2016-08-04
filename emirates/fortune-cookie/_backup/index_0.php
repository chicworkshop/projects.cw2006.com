<?php
session_start();
unset($_SESSION['id']);
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
		<div id="pageTitle"><img src="images/pageTitle_customise.png" alt="Customise a cookie and send some luck to a friends." width="340" height="60" /></div>
		<div id="main">
			<form id="form1" name="form1" method="post" action="preview_0.php">
				Select a color for your cookie:
				<table border="0" align="center" cellpadding="0" cellspacing="0" class="tblSelCookie">
					<tr>
						<td><img src="images/img_cookie_orgional.png" alt="Orgional Color" width="60" height="50" /></td>
						<td><img src="images/img_cookie_red.png" alt="Color Red" width="60" height="50" /></td>
						<td><img src="images/img_cookie_blue.png" alt="Color Blue" width="60" height="50" /></td>
						<td><img src="images/img_cookie_pink.png" alt="Color Pink" width="60" height="50" /></td>
					</tr>
					<tr>
						<td><label>
							<input type="radio" name="cookie_color" id="cookie_color1" value="original" />
							</label></td>
						<td><label>
							<input type="radio" name="cookie_color" id="cookie_color2" value="red" />
							</label></td>
						<td><label>
							<input type="radio" name="cookie_color" id="cookie_color3" value="blue" />
							</label></td>
						<td><label>
							<input type="radio" name="cookie_color" id="cookie_color4" value="pink" />
							</label></td>
					</tr>
				</table>
				<table width="420" border="0" align="center" cellpadding="0" cellspacing="0" class="tblNormal">
					<tr>
						<td align="left">Type in your message:</td>
						<td align="left"><label>
							<textarea name="message" id="message" rows="3" cols="30" /></textarea>
							</label></td>
					</tr>
					<tr>
						<td align="left">Your title:</td>
						<td align="left"><label>
							<input type="radio" name="suffix" id="suffix1" value="Mr." />
							Mr.</label>
							&nbsp;&nbsp;
							<label>
							<input type="radio" name="suffix" id="suffix2" value="Mrs." />
							Mrs.</label>
							&nbsp;&nbsp;
							<label>
							<input type="radio" name="suffix" id="suffix3" value="Miss" />
							Miss</label></td>
					</tr>
					<tr>
						<td align="left">Your first name:</td>
						<td align="left"><input type="text" name="firstname" id="firstname" /></td>
					</tr>
					<tr>
						<td align="left">Your last name:</td>
						<td align="left"><input type="text" name="lastname" id="lastname" /></td>
					</tr>
					<tr>
						<td align="left">Your email:</td>
						<td align="left"><input type="text" name="email" id="email" /></td>
					</tr>
					<tr>
						<td align="left">Friends name:</td>
						<td align="left"><input type="text" name="friendname" id="friendname" /></td>
					</tr>
					<tr>
						<td align="left">Friends email:</td>
						<td align="left"><input type="text" name="friendemail" id="friendemail" /></td>
					</tr>
					<tr>
						<td colspan="2" align="left"><label>
							<input type="checkbox" name="terms" id="terms" />
							I agree to the <a href="#">terms &amp; conditions</a>*</label></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="image" src="images/btn_preview.png" alt="Preview" /></td>
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
