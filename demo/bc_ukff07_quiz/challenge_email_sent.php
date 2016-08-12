<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>British Council</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="general.css" rel="stylesheet" type="text/css">
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




$query1 = "insert into bc_ukff07_comment (yourFriendEmail,yourEmail,  yourName,comments) values ('".$target_email."','".$sender_email."','".$sender_name."','".$comments."')";

$query1 = str_replace("\n", "<br>",$query1);

mysql_query($query1); 





// subject

$subject = '=?utf-8?B?V2luIHR3byBPYXNpcyB0aWNrZXRzIHRvIExvbmRvbiDotI/lj5Yy5by1T2FzaXPkvoblm57lgKvmlabmqZ/npag=?=';



// message

$message = " 

<table width='620' border='0' align='center' cellpadding='0' cellspacing='0'>
      <tr>
        <td><table width=100% border=0 cellspacing=15 cellpadding=0 bgcolor=#E5E5E5>
            <tr>
              <td><p><font color=#333333 size=2 face='Arial, Helvetica, sans-serif'>
                  ".$comments."
                  </font></p>
                <p><font color=#333333 size=2 face='Arial, Helvetica, sans-serif'>
                  ".$sender_name."
                  </font></p></td>
            </tr>
          </table></td>
      </tr>
  <tr>
    <td align='center'><font size='2' face='Arial, Helvetica, sans-serif'>If cannot read this email, please click <a name='click_to_view' href='http://www.moni-media.net/clients/britishcouncil/ukff07/viral/eDM2.html' target='_blank' xt='SPCLICK' >here</a>. </font></td>
  </tr>
  <tr>
    <td><a  xt='SPCLICK'  name='TopBanner' href='http://www.britishcouncil.org.hk/ukff07/en/'><img src='http://www.moni-media.net/clients/britishcouncil/ukff07/viral/images/eDM_header.gif'  name='Cont_6' width='620' height='100' border='0'></a></td>
  </tr>
  <tr>
    <td><img  name='Cont_7' src='http://www.moni-media.net/clients/britishcouncil/ukff07/viral/images/eDM_banner.jpg' width='620' height='200'></td>
  </tr>
  <tr>
    <td bgcolor='#E5E5E5'><div style='background-image:url(http://www.moni-media.net/clients/britishcouncil/ukff07/viral/images/eDM_body_bg.gif); background-position:bottom; background-repeat:no-repeat; background-color:E5E5E5'>
        <table width='620' border='0' cellspacing='0' cellpadding='0'>
          <tr>
            <td width='460' valign='top'><div style='padding:5px 10px; font-family:Arial; font-size:12px; color:#333333'>
                <p><strong>Here&#8217;s your chance to win two  Oasis tickets to London</strong>*.  All you have to do is complete a quiz about the films featured in the UK Film  Festival 2007. <br>
                  * Excluding tax  payment </p>
                <p>The UK Film Festival 2007, which is jointly  organised by the British Council and the British Consulate-General, presents 14  films adapted from a varied and diverse mixture of literary works. </p>
                <p>The UK Film Festival runs from 5 to 21  October. Tickets are available from 8 September onwards. </p>
                <p>Learn more about the festival at <a  xt='SPCLICK'  name='Learn_More_EN' href='http://www.britishcouncil.org.hk/ukff07/en/'>www.britishcouncil.org.hk/ukff07</a>! </p>
                <div><img  name='Cont_8' src='http://www.moni-media.net/clients/britishcouncil/ukff07/viral/images/eDM_divider.gif' width='440' height='20'></div>
                <p>&#23436;&#25104;&#38364;&#26044;&#33521;&#22283;&#38651;&#24433;&#31680;2007&#30340;&#28204;&#35430;&#65292;&#21363;&#26377;&#27231;&#26371;&#36111;&#21462;2&#24373;Oasis&#20358;&#22238;&#20523;&#25958;&#27231;&#31080;*&#65281; <br>
                  * &#24471;&#29518;&#32773;&#38920;&#33258;&#34892;&#25903;&#20184;&#26377;&#38364;&#31237;&#27454; </p>
                <p>&#33521;&#22283;&#38651;&#24433;&#31680;2007&#30001;&#33521;&#22283;&#25991;&#21270;&#21332;&#26371;&#21450;&#33521;&#22283;&#39376;&#39321;&#28207;&#32317;&#38936;&#20107;&#39208;&#21512;&#36774;&#65292;&#21576;&#29563;14&#37096;&#25913;&#32232;&#33258;&#32147;&#20856;&#21517;&#33879;&#25110;&#26274;&#37559;&#23567;&#35498;&#30340;&#38651;&#24433;&#65292;&#38988;&#26448;&#22810;&#27171;&#65292;&#21508;&#36969;&#20854;&#36969;&#12290; </p>
                <p>&#38651;&#24433;&#31680;&#26044;10&#26376;5&#26085;&#33267;21&#26085;&#26399;&#38291;&#33289;&#34892;&#65292;&#38272;&#31080;9&#26376;8&#26085;&#36215;&#26377;&#21806;&#12290; </p>
                <p>&#30331;&#20837;<a  xt='SPCLICK'  name='Learn_More_TC' href='http://www.britishcouncil.org.hk/ukff07/tc/'>www.britishcouncil.org.hk/ukff07</a>&#20102;&#35299;&#26356;&#22810;&#35443;&#24773;&#65281; </p>
              </div></td>
            <td width='160' align='center' valign='top'><div style='padding:10px 0'><a  xt='SPCLICK'  name='Join_The_Quiz' href='http://www.moni-media.net/clients/britishcouncil/ukff07/viral/quiz/index.html'><img  name='Cont_9' src='http://www.moni-media.net/clients/britishcouncil/ukff07/viral/images/eDM_btn_join.gif' width='140' height='40' border='0'></a></div>
              <div style='padding:10px 0'> <a  xt='SPCLICK'  name='Forward' href='http://www.moni-media.net/clients/britishcouncil/ukff07/viral/forward_email.php'><img  name='Cont_10' src='http://www.moni-media.net/clients/britishcouncil/ukff07/viral/images/eDM_btn_forward.gif' width='140' height='40' border='0'></a></div></td>
          </tr>
        </table>
      </div></td>
  </tr>
  <tr>
    <td><table width='620' border='0' cellpadding='0' cellspacing='0'>
        <tr>
          <td><a  xt='SPCLICK'   name='bottom_britishcouncil' href='http://www.britishcouncil.org.hk/'><img  name='Cont_12' src='http://www.moni-media.net/clients/britishcouncil/ukff07/viral/images/eDM2_logo_1.gif' width='140' height='80' border='0'></a></td>
          <td><a  xt='SPCLICK'  name='bottom_britishconsulate' href='http://www.britishconsulate.org.hk/'><img  name='Cont_13' src='http://www.moni-media.net/clients/britishcouncil/ukff07/viral/images/eDM2_logo_2.gif' width='70' height='80' border='0'></a></td>
          <td><a  xt='SPCLICK'  name='bottom_bc_cinema' href='http://bc.cinema.com.hk/'><img  name='Cont_14' src='http://www.moni-media.net/clients/britishcouncil/ukff07/viral/images/eDM2_logo_3.gif' width='120' height='80' border='0'></a></td>
          <td><a  xt='SPCLICK'  name='bottom_goldenscene' href='http://www.goldenscene.com/'><img  name='Cont_15' src='http://www.moni-media.net/clients/britishcouncil/ukff07/viral/images/eDM2_logo_4.gif' width='100' height='80' border='0'></a></td>
          <td><a  xt='SPCLICK'  name='bottom_oasishk' href='http://www.oasishongkong.com/'><img  name='Cont_16' src='http://www.moni-media.net/clients/britishcouncil/ukff07/viral/images/eDM2_logo_5.gif' width='90' height='80' border='0'></a></td>
          <td><img src='http://www.moni-media.net/clients/britishcouncil/ukff07/viral/images/eDM2_logo_6.gif' width='100' height='80'></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><div style='font-family:Arial; font-size:9px; color:#666666; padding:10px 0'>
        <p>The highest scorer who completes the quiz  in the shortest time will get the chance to win a pair of Oasis tickets* worth  over HK$17000! <br>
          * Excluding tax  payment <br>
          &#28204;&#35430;&#20013;&#24471;&#20998;&#26368;&#39640;&#65292;&#32780;&#21448;&#26044;&#26368;&#30701;&#26178;&#38291;&#20839;&#23436;&#25104;&#28204;&#35430;&#32773;&#65292;&#21363;&#21487;&#36111;&#21462;2&#24373;Oasis&#20358;&#22238;&#20523;&#25958;&#27231;&#31080;* (&#32317;&#20540;&#36926;&#28207;&#24163;$17000)&#65281;
          * &#24471;&#29518;&#32773;&#38920;&#33258;&#34892;&#25903;&#20184;&#26377;&#38364;&#31237;&#27454;</p>
        </div></td>
  </tr>
</table>








";

?>
<?php





		// To send HTML mail, the Content-type header must be set

		$headers  = 'MIME-Version: 1.0' . "\r\n";

		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";



		



		$headers .= 'From:'.$sender_name.' <'.$sender_email.'>' . "\r\n";



		// Mail it

		mail($target_email, $subject, $message, $headers);







	//$query = "insert into tbl_loggerHP (sender , receiver) values ('".$sender_email."','".$val."')";

	//mysql_query($query); 



?>
<!-- start -->
<div style="20px">
  <table width="620" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E5E5E5">
    <tr>
      <td><div><a href="http://www.britishcouncil.org.hk/ukff07/en/"><img src="images/eDM_header.gif" width="620" height="100" border="0"></a></div>
        <div class="pageName"></div>
        <div class="pageContent">
          <div style="padding:10px 0"> Your message has been sent to:<br>
            你的訊息已被傳送到:<br>
            <br>
            <?
				$target = str_replace(",", "<br>", $target_email);
				print $target;
			?>
          </div>
          <div style="padding:10px 0; text-align:center; font-size:10pt">If you want to win greater prizes, join our <a href="http://www.britishcouncil.org.hk/ukff07/en/activities/Film_Review.html">Film Review Writing competition</a>! <br>
            如果想贏取更豐富的獎品，歡迎參加我們的<a href="http://www.britishcouncil.org.hk/ukff07/tc/activities/Film_Review.html">影評創作比賽</a>！ <br>
            <br>
            <br>
            [<a href="http://www.britishcouncil.org.hk/ukff07/en/">Back to UK Film Festival 2007 website</a>] <br>
            [<a href="http://www.britishcouncil.org.hk/ukff07/tc/">返回英國電影節2007網頁</a>] </div>
        </div></td>
    </tr>
  </table>
</div>
<noscript><img width="0" height="0" src="http://bchongkong.mtk1.com/perl/mtk1.pl?js=0" /></noscript><script src="http://bchongkong.mtk1.com/js/mtk1.js"></script>
</body>
</html>
