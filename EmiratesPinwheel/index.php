<?php
  session_start();
  if(isset($_SESSION['id'])){ unset($_SESSION['friendname']); unset($_SESSION['friendemail']);}

  $pinwheel_color = (isset($_SESSION['pinwheel_color'])) ? $_SESSION['pinwheel_color'] : "";
  $message = (isset($_SESSION['message'])) ? trim($_SESSION['message']) : "";
  $suffix = (isset($_SESSION['suffix'])) ? $_SESSION['suffix'] : "";
  $firstname = (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : "";
  $lastname = (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : "";
  $email = (isset($_SESSION['email'])) ? $_SESSION['email'] : "";
  $friendname = (isset($_SESSION['friendname'])) ? $_SESSION['friendname'] : "";
  $friendemail = (isset($_SESSION['friendemail'])) ? $_SESSION['friendemail'] : "";
  $offer = (isset($_SESSION['offer'])) ? "checked" : "";


  //$pinwheel_array = array("green", "red", "yellow", "purple");
  //foreach ($pinwheel_array as $i=>$value){
  //  ${"pinwheel_color".($i+1)} = ($pinwheel_color == $value) ? "checked" : "";
  //}
  //$defaultpinwheel = false;
  //for($i=1; $i<5; $i++) {
  //  if(${"pinwheel_color$i"} == "checked"){$defaultpinwheel = true;}
  //}
  //$pinwheel_color1 = (!$defaultpinwheel)? "checked" : $pinwheel_color1;

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
				document.form1.action="preview.php";
			}
			if (link=="submit"){
				document.form1.action="sent.php";
			}	

			document.form1.submit();			
		}else{
			alert(err);
		}

		
	}
//-->
</SCRIPT>
</head>
<body>
<div id="wrapper">
	<div id="container" style="background: url(images/pageBg_index.jpg) no-repeat;height: 750px;">
		<div id="pageTitle"></div>
		<div id="main">
			<form id="form1" name="form1" method="post" action="">
				<table border="0" align="center" cellpadding="0" cellspacing="0" class="tblSelCookie">
					<tr>
						<td><label>
							<input name="pinwheel_color" type="radio" id="pinwheel_color1" value="green" checked="checked" <?php print $pinwheel_color1 ?> />
							</label></td>
						<td><label>
							<input type="radio" name="pinwheel_color" id="pinwheel_color2" value="red" <?php print $pinwheel_color2 ?> />
							</label></td>
						<td><label>
							<input type="radio" name="pinwheel_color" id="pinwheel_color3" value="yellow" <?php print $pinwheel_color3 ?> />
							</label></td>
						<td><label>
							<input type="radio" name="pinwheel_color" id="pinwheel_color4" value="purple" <?php print $pinwheel_color4 ?> />
							</label></td>
					</tr>
				</table>
				<div class="inputMessage">
					<label>
					<input type="text" name="message" id="message" maxlength="24" value="<?php print $message ?>" />
					<!--<textarea name="message" id="message" rows="3" cols="30" onKeyPress="limitText(this,24);" /></textarea>-->
					</label>
				</div>
				<div class="input">
					<label>
					<input type="radio" name="suffix" id="suffix1" value="Mr." />
					</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<input type="radio" name="suffix" id="suffix2" value="Mrs." />
					</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<input type="radio" name="suffix" id="suffix3" value="Miss"  />
					</label>
				</div>
				<div class="input">
					<input type="text" name="firstname" id="firstname" value="<?php print $firstname ?>" />
				</div>
				<div class="input">
					<input type="text" name="lastname" id="lastname" value="<?php print $lastname ?>" />
				</div>
				<div class="input">
					<input type="text" name="email" id="email" value="<?php print $email ?>" />
				</div>
				<div class="input">
					<input type="text" name="friendname" id="friendname" value="<?php print $friendname ?>" />
				</div>
				<div class="input">
					<input type="text" name="friendemail" id="friendemail" value="<?php print $friendemail ?>" />
					<input type="hidden" name="lang" id="lang" value="sc" />
				</div>
				<div class="inputCheckbox">
					<input type="checkbox" name="offer" id="offer" <?php print $offer ?> />
				</div>
				<div class="inputTerms"> <a href="http://www.emirates.com/hk/English/sitetools/terms_and_conditions.aspx" target="_blank"><img src="images/spacer.gif" alt="" width="130" height="20" /></a></div>
				<div class="btn"> <a href="#" onClick="sub_mit('preview');"><img src="images/spacer.gif" alt="" width="60" height="20" /></a><img src="images/spacer.gif" alt="" width="60" height="20" /><a href="#" onClick="sub_mit('submit');" style="margin-left: 30px"><img src="images/spacer.gif" alt="" width="60" height="20" /></a> </div>
			</form>
			<div id="footer"></div>
		</div>
	</div>
</div>
<? include "../../include/google-analytics.php"; ?>
</body>
</html>
