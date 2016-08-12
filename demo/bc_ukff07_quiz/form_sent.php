<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>British Council</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="general.css" rel="stylesheet" type="text/css">
</head>
<?

//db connection string 

include 'db_connect.php';

	$query1 = "select * from bc_ukff07_score where yourEmail = ".$sender_email;



$result = mysql_query( "select * from bc_ukff07_score where yourEmail = '".$sender_email."'" ) or die("SELECT Error: ".mysql_error());

		$r=  mysql_num_rows ($result);



//  if($r!=0){

//		echo "<SCRIPT LANGUAGE='JavaScript'>window.location='http://www.moni-media.net/clients/wsi/newsletter/issue01/quiz/error.htm';</SCRIPT>";

//	}



	

	$country="";

	$yourFriendName="";

	$yourFriendEmail="";

	$yourMessage="";

	$newsLetter="";

	//$questions="";

	//$time="";

	$query = "insert into bc_ukff07_score (score ,yourName ,yourEmail , country , yourFriendName , yourFriendEmail ,yourMessage , newsLetter, questions, time, yourPhoneNo, createdatetime) values ('".$score."','".$sender_name."','".$sender_email."','".$hkid."','".$yourFriendName."','".$yourFriendEmail."','".$message."','".$newsLetter."','".$questions."','".$time."','".$yourPhoneNo."',now())";





?>
<?$query = str_replace("\n", "<br>",$query);?>
<?

	//echo "<br>".$query;

	mysql_query($query); 



?>
<?



 $yourMessage ="

 

 

";



	// To send HTML mail, the Content-type header must be set

	/*

		$headers  = 'MIME-Version: 1.0' . "\r\n";

		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		$subject = 'Wall Street Institute';

		// Additional headers

		//$headers .= 'To:  <'.$val.'>' . "\r\n";

		//$headers .= 'Bcc:  <'.$val.'>' . "\r\n";



		$headers .= 'From:'.$yourName.' <'.$yourEmail.'>' . "\r\n";



		// Mail it

		mail($yourFriendEmail, $subject, $yourMessage, $headers);

	

	*/

?>
<body>
<div style="20px">
  <table width="620" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E5E5E5">
    <tr>
      <td><div><a href="http://www.britishcouncil.org.hk/ukff07/en/"><img src="images/eDM_header.gif" width="620" height="100" border="0"></a></div>
<!--        <div class="pageName">Forward to Friend<br>
          告訴朋友</div> -->
        <div class="pageContent">
          <div style="padding:10px 0">
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
