<?php
  session_start();
  if(isset($_SESSION['id'])){ unset($_SESSION['friendname']); unset($_SESSION['friendemail']);}

  $cookie_color = (isset($_SESSION['cookie_color'])) ? $_SESSION['cookie_color'] : "";
  $message = (isset($_SESSION['message'])) ? trim($_SESSION['message']) : "";
  $suffix = (isset($_SESSION['suffix'])) ? $_SESSION['suffix'] : "";
  $firstname = (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : "";
  $lastname = (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : "";
  $email = (isset($_SESSION['email'])) ? $_SESSION['email'] : "";
  $friendname = (isset($_SESSION['friendname'])) ? $_SESSION['friendname'] : "";
  $friendemail = (isset($_SESSION['friendemail'])) ? $_SESSION['friendemail'] : "";
  $offer = (isset($_SESSION['offer'])) ? "checked" : "";


  $cookie_array = array("original", "red", "blue", "pink");
  foreach ($cookie_array as $i=>$value){
    ${"cookie_color".($i+1)} = ($cookie_color == $value) ? "checked" : "";
  }
  $defaultcookie = false;
  for($i=1; $i<5; $i++) {
    if(${"cookie_color$i"} == "checked"){$defaultcookie = true;}
  }
  $cookie_color1 = (!$defaultcookie)? "checked" : $cookie_color1;

  $suffix_array = array("Mr.", "Mrs.", "Miss");
  foreach ($suffix_array as $i=>$value){
    ${"suffix".($i+1)} = ($suffix == $value) ? "checked" : "";
  }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Emirates | Book online and win</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<SCRIPT LANGUAGE="JavaScript">
<!--
	function sub_mit(link){
			t= document.form1.email.value;
			s= document.form1.friendemail.value;
			err="";

		if (t==""){
			err += "Please fill in your Friend's E-mail  \n";
		}

		if (t!=""){
			if ( !(t.indexOf("@") >-1 && t.indexOf(".") >-1) ){
				err += "Please fill in a valid Friend's E-mail  \n";
			}
		}

		if (s!=""){
			if ( !(s.indexOf("@") >-1 && s.indexOf(".") >-1) ){
				err += "Please fill in a valid Sender E-mail  \n";
			}
		}

		//alert(err);
		//alert(link);
		if (err==""){
			if (link=="preview"){
				document.form1.action="preview_en.php";
			}
			if (link=="submit"){
				document.form1.action="sent_en.php";
			}	

			document.form1.submit();			
		}else{
			alert(err);
		}

		
	}
function limitText(textArea, length) {
if (textArea.value.length > length) {
textArea.value = textArea.value.substr(0,length);
}
}
//-->
</SCRIPT>
</head>
<body>
<script type="text/javascript">

// Conversion Name:Forward to friend main page
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
document.write('<scr'+'ipt src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&ActivityID=19317&rnd=' + ebRand + '"></scr' + 'ipt>');
//]]>
</script>
<noscript>
<img width="1" height="1" style="border:0" src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&ActivityID=19317" />
</noscript>
<div id="wrapper">
	<div id="container">
		<div id="pageTitle"><img src="images/pageTitle_customise_en.png" alt="Customise a cookie and send some luck to a friends." width="340" height="60" /></div>
		<div id="main">
			<form id="form1" name="form1" method="post" action="">
				Choose your favourite cookie:
				<table border="0" align="center" cellpadding="0" cellspacing="0" class="tblSelCookie">
					<tr>
						<td><img src="images/img_cookie_orgional.png" alt="Orgional Color" width="60" height="50" /></td>
						<td><img src="images/img_cookie_red.png" alt="Color Red" width="60" height="50" /></td>
						<td><img src="images/img_cookie_blue.png" alt="Color Blue" width="60" height="50" /></td>
						<td><img src="images/img_cookie_pink.png" alt="Color Pink" width="60" height="50" /></td>
					</tr>
					<tr>
						<td><label>
							<input name="cookie_color" type="radio" id="cookie_color1" value="original" <?php print $cookie_color1 ?> />
							</label></td>
						<td><label>
							<input type="radio" name="cookie_color" id="cookie_color2" value="red" <?php print $cookie_color2 ?> />
							</label></td>
						<td><label>
							<input type="radio" name="cookie_color" id="cookie_color3" value="blue" <?php print $cookie_color3 ?> />
							</label></td>
						<td><label>
							<input type="radio" name="cookie_color" id="cookie_color4" value="pink" <?php print $cookie_color4 ?> />
							</label></td>
					</tr>
				</table>
				<table width="420" border="0" align="center" cellpadding="0" cellspacing="0" class="tblNormal">
					<tr>
						<td align="left" nowrap="nowrap">Type in <br />
							your message:<br />
							<span style="font-size:80%">(max char: 24)</span></td>
						<td align="left"><label>
						<input type="text" name="message" id="message" maxlength="24" value="<?php print $message ?>" />
							<!--<textarea name="message" id="message" rows="3" cols="30" onKeyPress="limitText(this,24);" /></textarea>-->
							</label></td>
					</tr>
					<tr>
						<td align="left" nowrap="nowrap">Your title:</td>
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
						<td align="left" nowrap="nowrap">Your first name:</td>
						<td align="left"><input type="text" name="firstname" id="firstname" value="<?php print $firstname ?>" /></td>
					</tr>
					<tr>
						<td align="left" nowrap="nowrap">Your last name:</td>
						<td align="left"><input type="text" name="lastname" id="lastname" value="<?php print $lastname ?>" /></td>
					</tr>
					<tr>
						<td align="left" nowrap="nowrap">Your email:</td>
						<td align="left"><input type="text" name="email" id="email" value="<?php print $email ?>" /></td>
					</tr>
					<tr>
						<td align="left" nowrap="nowrap">Friend's name:</td>
						<td align="left"><input type="text" name="friendname" id="friendname" value="<?php print $friendname ?>" /></td>
					</tr>
					<tr>
						<td align="left" nowrap="nowrap">Friend's email:</td>
						<td align="left"><input type="text" name="friendemail" id="friendemail" value="<?php print $friendemail ?>" /></td>
					</tr>
					<tr>
						<td colspan="2" align="left"><input type="checkbox" name="offer" id="offer" <?php print $offer ?> />
							Tick the box to receive special offers and news from Emirates by email*.<br />
							* <a href="http://www.emirates.com/hk/English/sitetools/terms_and_conditions.aspx" target="_blank">Click here</a> to view the terms and conditions.</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="image" id="preview" onClick="sub_mit('preview');" src="images/btn_preview_en.png" alt="Preview"  />
							&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="image" id="send" onClick="sub_mit('submit');" src="images/btn_send_en.png" alt="submit"  /></td>
					</tr>
				</table>
			</form>
			<div id="footer"><img src="images/footer_en.png" alt="" /></div>
		</div>
	</div>
</div>
<? include "../../include/google-analytics.php"; ?>
</body>
</html>
