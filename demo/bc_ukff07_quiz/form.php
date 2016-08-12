<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>British Council</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="general.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">

<!--

function MM_goToURL() { //v3.0

  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;

  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");

}

//-->

</script>
</head>
<script language="JavaScript" type="text/JavaScript">

<!--

function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}

function resize_2_400x300() {
window.resizeTo(435,500)
}



//-->

</script>
<SCRIPT LANGUAGE="JavaScript">
<!--

function doSubmit() {
  f=document.getElementById("form1");

  if (f.target_email.value!="" && f.target_email.value!=null){
    f.action="challenge_email_sent.php";
    submitType="preview";
  } else {
    f.action="form_sent.php";
    submitType="send";
  }

//  alert("f.action:"+f.action);
  return validate(submitType);

//	document.form1.submit();			
  return false;
}


function validate(){
	msg = "";

	if (document.form1.sender_name.value==""){
		msg +="Please fill in <Your name>.\n";
	}

	if (document.form1.hkid.value==""){
		msg +="Please fill in <ID card number>.\n";
	}

	if (document.form1.sender_email.value==""){
		msg +="Please fill in <Your Email>.\n";
	}

  if (document.form1.sender_email.value!=""){
		if ( !(document.form1.sender_email.value.indexOf("@") >-1 && document.form1.sender_email.value.indexOf(".") >-1) ){
			msg += "Please fill in a valid <Email>  \n";
		}
	}


	if (document.form1.yourPhoneNo.value==""){
		msg +="Please fill in <Your phone number>.\n";
	}

  if (!document.form1.termsCheckbox.checked){
		msg +="Please check <Terms & Conditions>.\n";
	}


	/*
	if (document.form1.yourFriendName.value==""){
		msg +="Please fill in your Friend name .\n";
	}

	if (document.form1.yourFriendEmail.value==""){
		msg +="Please fill in the your friend email .\n";
	}
	*/

	/*
	if (document.form1.yourEmail.value!=""){
		if ( !(document.form1.yourEmail.value.indexOf("@") >-1 && document.form1.yourEmail.value.indexOf(".") >-1) ){
			msg += "Please fill in a valid E-mail.\n";
		}
	}
	*/


	/*
	if (document.form1.yourFriendEmail.value!=""){
		if ( !(document.form1.yourFriendEmail.value.indexOf("@") >-1 && document.form1.yourFriendEmail.value.indexOf(".") >-1) ){
			msg += "Please fill in a valid E-mail for your friend.\n";
		}
	}
	*/

	if (msg==""){
		return true;
	}else{
		alert( msg);
		return false;
	}

}


//-->
</SCRIPT>
<body>
<!--<FORM METHOD=POST ACTION="challenge_email_preview.php" onSubmit="return validate();" name="form1">-->
<form method=post action="" onSubmit="return doSubmit();" name="form1" id="form1">
  <INPUT TYPE="hidden" name="score" value="<?=$score?>">
  <table width="620" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><a href="http://www.britishcouncil.org.hk/ukff07/en/"><img src="images/eDM_header.gif" width="620" height="100" border="0"></a></td>
    </tr>
    <tr>
      <td><div class="pageName">Win 2 Oasis Tickets to London<br>
          贏取2張Oasis來回倫敦機票</div>
        <table width="100%" border="0" cellpadding="0" cellspacing="10" bgcolor="#E5E5E5">
          <tr>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="5">
                <tr valign="top">
                  <td width="240" valign="middle">Your Score 分數: </td>
                  <td valign="middle"><strong><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">
                    <?=$score?>
                    </font></strong>
                    <INPUT TYPE="hidden" name="score" value="<?=$score?>">
                    <INPUT TYPE="hidden" name="questions" value="<?=$questions?>">
                    <INPUT TYPE="hidden" name="time" value="<?=$time?>">
                  </td>
                </tr>
                <tr valign="top">
                  <td width="240" valign="middle">Your 
                    
                    Name 姓名:<br>
                    <span style="font-size:7pt">(Must be same as travel document)<br>
                    (必須與旅遊證件的姓名相同)</span></td>
                  <td valign="middle"><input type="text" name="sender_name" value=""></td>
                </tr>
                <tr valign="top">
                  <td width="240" valign="middle">First 
                    
                    4 digit of HKID Card<br>
                    身份證號碼頭四位數字 : </td>
                  <td valign="middle"><input name="hkid" type="text" maxlength="4"></td>
                </tr>
                <tr valign="top">
                  <td width="240" valign="middle">Your 
                    
                    Email 電郵地址:</td>
                  <td valign="middle"><input type="text" name="sender_email" value=""></td>
                </tr>
                <tr valign="top">
                  <td width="240" valign="middle">Your 
                    
                    phone no. 電話號碼:</td>
                  <td valign="middle"><input type="text" name="yourPhoneNo" value=""></td>
                </tr>
              </table>
              <div style="padding:3px 10px; background-color:#999999; text-align:center; color:#FFFFFF">Challenge a friend</div>
              <table width="100%" border="0" cellpadding="0" cellspacing="5">
                <tr valign="top">
                  <td width="240" valign="middle"> Your Friend's E-mail 朋友電郵*:</td>
                  <td valign="middle"><input name="target_email" type="text" size="35">
                    <br>
                    <span style="font-size:7pt">Separate multiple addresses with commas.</span></td>
                </tr>
                <tr valign="top">
                  <td width="240" valign="middle">Your Message 你的訊息:</td>
                  <td valign="middle"><textarea name="comments" cols="35" rows="4">My score is <?=$score?>. Challenge my score and win 2 Oasis tickets to London with British Council and British Consulate General.</textarea>
                  </td>
                </tr>
                <tr valign="top">
                  <td width="240">&nbsp;</td>
                  <td><input name="termsCheckbox" type="checkbox" value="">
                    <a href="../terms.html" target="_blank">Terms &amp; Conditions 條款及細則</a> </td>
                </tr>
                <tr valign="top">
                  <td width="240">&nbsp;</td>
                  <td><input type="submit" name="Submit" value="Submit 遞交">
                    <input type="reset" name="Reset" value="Reset 重設"></td>
                </tr>
                <tr valign="top">
                  <td width="240">&nbsp;</td>
                  <td></td>
                </tr>
              </table></td>
          </tr>
        </table>
        <div class="pageNote">
          <p>The winner of the quiz will be announced on British   Council’s website on 30 October 2007 and the winner will be notified by phone   and email. The winner shall collect his/her prize from British Council’s office   (3 Supreme Court   Road, Admiralty) in person within two weeks of the   announcement.<br>
            結果將於2007年10月30日在英國文化協會網頁上公佈，得獎者另將獲個別電郵及電話通知。得獎者須於接獲通知兩週內親身前往英國文化協會領取獎品。</p>
          <p>* The email addresses you submit here will be used for   this campaign only. The British Council will NOT keep the email addresses you   enter here.<br>
            * 所輸入的電郵地址只供是項活動使用，英國文化協會將<strong>不會</strong>保留你朋友的電郵地址。</p>
        </div></td>
    </tr>
    <tr>
      <td><div><img src="images/eDM_logo.gif" width="620" height="80"></div></td>
    </tr>
  </table>
</FORM>
<noscript><img width="0" height="0" src="http://bchongkong.mtk1.com/perl/mtk1.pl?js=0" /></noscript><script src="http://bchongkong.mtk1.com/js/mtk1.js"></script>
</body>
</html>
