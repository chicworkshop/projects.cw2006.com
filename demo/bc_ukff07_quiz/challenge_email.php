<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>British Council</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="general.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
var x = screen.availLeft;
var y = screen.availTop;
var w = screen.availWidth;
var h = screen.availHeight;

window.moveTo(x,y);
window.resizeTo(w,h);

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
</head>
<body>
<!-- Kenneth modifed , added <form> -->
<?
//db connection string
include '../db_connect.php';

//update
$query = "UPDATE tbl_counterHP SET counter_hit = counter_hit + 1";
mysql_query($query); 

?>
<SCRIPT LANGUAGE="JavaScript">
<!--
	function sub_mit(link){
			t= document.form1.target_email.value;
			s= document.form1.sender_email.value;
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
				document.form1.action="challenge_email_preview.php";
			}
			if (link=="submit"){
				document.form1.action="challenge_email_sent.php";
			}	

			document.form1.submit();			
		}else{
			alert(err);
		}

		
	}

//-->
</SCRIPT>
<form method="post" action="" name="form1">
  <div style="padding:30px 0">
    <table width="620" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E5E5E5">
      <tr>
        <td><div><a href="http://www.britishcouncil.org.hk/ukff07/en/"><img src="images/eDM_header.gif" width="620" height="100" border="0"></a></div>
          <div class="pageName">Challenge Your Friend</div>
          <div class="pageContent"> Fill out the form below to forward this message.<br>
            <br>
            Your Friend's E-mail 朋友姓名電郵*: <span style="font-size:7pt">(required必需)</span><br>
            <input name="target_email" type="text" size="40">
            <br>
            Separate multiple addresses with commas. <br>
            <br>
            Your E-mail: <br>
            <input name="sender_email" type="text" size="40">
            <br>
            <br>
            Your Name:<br>
            <input name="sender_name" type="text" size="40">
            <br>
            <br>
            Comments: (optional)<br>
            <font color="#FFFFFF">
            <textarea name="comments" cols="35" rows="7">

            </textarea>
            </font></font> <br>
            <br>
            <input type="button" name="Submit" value="Submit" onClick="sub_mit('submit');">
            <input type="button" name="Preview" value="Preview" onClick="sub_mit('preview');">
            <input type="reset" name="Reset" value="Reset">
          </div></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>
