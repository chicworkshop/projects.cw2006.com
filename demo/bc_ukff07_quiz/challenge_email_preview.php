<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>British Council</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?
//db connection string 
include 'db_connect.php';
	$query1 = "select * from bc_ukff07_score where yourEmail = ".$sender_email;

$result = mysql_query( "select * from bc_ukff07_score where yourEmail = '".$sender_email."'" ) or die("SELECT Error: ".mysql_error());
		$r=  mysql_num_rows ($result);

//  if($r!=0){
//		echo "<SCRIPT LANGUAGE='JavaScript'>window.location='http://www.moni-media.net/clients/wsi/newsletter/issue01/quiz/error.htm';</SCRIPT>";
//	} else {

	
	$country="";
	$yourFriendName="";
	$yourFriendEmail="";
	$yourMessage="";
	$newsLetter="";
	//$questions="";
	//$time="";
	$query = "insert into bc_ukff07_score (score ,yourName ,yourEmail , country , yourFriendName , yourFriendEmail ,yourMessage , newsLetter, questions, time, yourPhoneNo, createdatetime) values ('".$score."','".$sender_name."','".$sender_email."','".$hkid."','".$yourFriendName."','".$yourFriendEmail."','".$message."','".$newsLetter."','".$questions."','".$time."','".$yourPhoneNo."',now())";

  $query = str_replace("\n", "<br>",$query);
//	echo "<br>".$query;

	mysql_query($query); 
//}

?>
<div align="center" style="padding:20px">
  <SCRIPT LANGUAGE="JavaScript">
<!--
function subform(link){
	document.form1.link.value = link;
	document.form1.submit();
}
//-->
</SCRIPT>
  <FORM METHOD=POST ACTION="challenge_email_sent.php" name="form1">
    <INPUT TYPE="hidden" name="target_email" value="<?=$target_email?>">
    <INPUT TYPE="hidden" name="sender_email" value="<?=$sender_email?>">
    <INPUT TYPE="hidden" name="sender_name" value="<?=$sender_name?>">
    <INPUT TYPE="hidden" name="comments" value="<?=$comments?>">
    <INPUT TYPE="hidden" name="link" value="0">
    <table width="620" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E5E5E5">
      <tr>
        <td><table width="100%" border="0" cellspacing="15" cellpadding="0">
            <tr>
              <td><p><font color="#333333" size="2" face="Arial, Helvetica, sans-serif">
                  <?=$comments?>
                  </font></p>
                <p><font color="#333333" size="2" face="Arial, Helvetica, sans-serif">
                  <?=$sender_name?>
                  </font></p></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td><INPUT TYPE="button" value="Back 返回" onClick="history.go(-1);">
          <INPUT TYPE="submit" value="Send 寄出"></td>
      </tr>
    </table>
  </FORM>
  <div align="center">
    <table width="620" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center"><font size="2" face="Arial, Helvetica, sans-serif">If cannot read this email, please click <a name="click_to_view" href="#" target="_blank" xt="SPCLICK" >here</a>. </font></td>
      </tr>
      <tr>
        <td><a  xt="SPCLICK"  name="TopBanner" href="http://www.britishcouncil.org.hk/ukff07/en/"><img src="images/eDM_header.gif"  name="Cont_6" width="620" height="100" border="0"></a></td>
      </tr>
      <tr>
        <td><img  name="Cont_7" src="images/eDM_banner.jpg" width="620" height="200"></td>
      </tr>
      <tr>
        <td bgcolor="#E5E5E5"><div style="background-image:url(iimages/eDM_body_bg.gif); background-position:bottom; background-repeat:no-repeat; background-color:E5E5E5">
            <table width="620" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="460" valign="top"><div style="padding:5px 10px; font-family:Arial; font-size:12px; color:#333333">
                    <p><strong>Here&#8217;s your chance to win two  Oasis tickets to London</strong>*.  All you have to do is complete a quiz about the films featured in the UK Film  Festival 2007. <br>
                      * Excluding tax  payment </p>
                  <p>The UK Film Festival 2007, which is jointly  organised by the British Council and the British Consulate-General, presents 14  films adapted from a varied and diverse mixture of literary works. </p>
                  <p>The UK Film Festival runs from 5 to 21  October. Tickets are available from 8 September onwards. </p>
                  <p>Learn more about the festival at <a  xt="SPCLICK"  name="Learn_More_EN" href="http://www.britishcouncil.org.hk/ukff07/en/">www.britishcouncil.org.hk/ukff07</a>! </p>
                  <div><img  name="Cont_8" src="images/eDM_divider.gif" width="440" height="20"></div>
                  <p>完成關於英國電影節2007的測試，即有機會贏取2張Oasis來回倫敦機票*！ <br>
                    * 得獎者須自行支付有關稅款 </p>
                  <p>英國電影節2007由英國文化協會及英國駐香港總領事館合辦，呈獻14部改編自經典名著或暢銷小說的電影，題材多樣，各適其適。 </p>
                  <p>電影節於10月5日至21日期間舉行，門票9月8日起有售。 </p>
                  <p>登入<a xt="SPCLICK" name="Learn_More_TC" href="http://www.britishcouncil.org.hk/ukff07/tc/">www.britishcouncil.org.hk/ukff07</a>了解更多詳情！ </p>
                </div></td>
                <td width="160" align="center" valign="top"><div style="padding:10px 0"><a  xt="SPCLICK"  name="Join_The_Quiz" href="http://demo.chicworkshop.com/flash/bc_ukff07_quiz/"><img  name="Cont_9" src="images/eDM_btn_join.gif" width="140" height="40" border="0"></a></div>
                    <div style="padding:10px 0"> <a  xt="SPCLICK"  name="Forward" href="forward_email.php"><img  name="Cont_10" src="images/eDM_btn_forward.gif" width="140" height="40" border="0"></a></div></td>
              </tr>
            </table>
        </div></td>
      </tr>
      <tr>
        <td><table width="620" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td><a  xt="SPCLICK"   name="bottom_britishcouncil" href="http://www.britishcouncil.org.hk/"><img  name="Cont_12" src="images/eDM2_logo_1.gif" width="140" height="80" border="0"></a></td>
              <td><a  xt="SPCLICK"  name="bottom_britishconsulate" href="http://www.britishconsulate.org.hk/"><img  name="Cont_13" src="images/eDM2_logo_2.gif" width="70" height="80" border="0"></a></td>
              <td><a  xt="SPCLICK"  name="bottom_bc_cinema" href="http://bc.cinema.com.hk/"><img  name="Cont_14" src="images/eDM2_logo_3.gif" width="120" height="80" border="0"></a></td>
              <td><a  xt="SPCLICK"  name="bottom_goldenscene" href="http://www.goldenscene.com/"><img  name="Cont_15" src="images/eDM2_logo_4.gif" width="100" height="80" border="0"></a></td>
              <td><a  xt="SPCLICK"  name="bottom_oasishk" href="http://www.oasishongkong.com/"><img  name="Cont_16" src="images/eDM2_logo_5.gif" width="90" height="80" border="0"></a></td>
              <td><img src="images/eDM2_logo_6.gif" width="100" height="80"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><div style="font-family:Arial; font-size:9px; color:#666666; padding:10px 0">
            <p>The highest scorer who completes the quiz  in the shortest time will get the chance to win a pair of Oasis tickets* worth  over HK$17000! <br>
              * Excluding tax  payment <br>
              測試中得分最高，而又於最短時間內完成測試者，即可贏取2張Oasis來回倫敦機票* (總值逾港幣$17000)！ * 得獎者須自行支付有關稅款</p>
        </div></td>
      </tr>
    </table>
  </div>
</div>
</body>
</html>
