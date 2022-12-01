<?php
session_start();
include("db_connect.php");
extract($_POST);
$msg="";
if(isset($Submit))
{
	$qry= "select * from circular where sub='$sub' && cdetail='$cdetail'";
	$exe = mysql_query($qry);
	$num = mysql_num_rows($exe);
 	if($num==1)
 	{
         	$msg="Already Registered Candidate...";
    }
	else
	{ 
     $sno=rand(10000,50000);
	 $qry1= "insert into circular values('$sub','$cdetail')";
	 $exe=mysql_query($qry1,$connect)or show_error();
	 $msg="circular post Successfully...Registered ID:".$sub;
	}
	 
}
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Student Web Interface</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
<!--
.style4 {
	font-size: 18px;
	font-weight: bold;
}
.style25 {color: #000000; font-size: 12px; font-weight: bold; }
.style26 {
	color: #FF0000;
	font-weight: bold;
}
.style27 {color: #FFFFFF;
	font-size: xx-large;
}
.style30 {font-size: 12px; font-weight: bold; }
-->
    </style>
</head>
<body>
	<div class="header">
	  <div>
			<span class="style27"> Student Web Interface</span>
			<ul>
				<li>
					<a href="adminhome.php"><span>H</span>ome</a>
				</li>
				<li>
					<a href="ViewDetails.php"><span>S</span>tudents</a>
				</li>
				<li>
					<a href="StaffProfile.php"><span>S</span>taff</a>
				</li>
				<li>
					<a href="ApplicationForms.php"><span>F</span>orms</a>
				</li>
				<li>
					<a href="AluminiRegister.php"><span>A</span>lumini</a>
				</li>
				<li class="selected">
					<a href="AddCircular.php"><span>C</span>ircular</a>
				</li>
				<li>
					<a href="Syllabus.php"><span>M</span>etireals</a>
				</li>
				
				<li>
					<a href="Feedback.php"><span>C</span>ommends</a>
				</li>
				<li>
					<a href="index.php"><span>L</span>ogout</a>
				</li>
			</ul>
	  </div>
	</div>
	<div class="body">
		<div>
		  <div class="featured"></div>
		  <div>
		    <p align="center" class="style4">Circular </p>
			<form method="post" action="">
			  <table width="426" border="0" align="center" bgcolor="#999966">
                <tr>
                  <td height="41"><span class="style30">Subject </span></td>
					<td><input name="sub" type="text" class="txt" id="sub" required title="Enter Subject"></td>
                </tr><tr>
                  <td height="30"><span class="style30">Circular Details </span></td>
                  <td><input name="cdetail" type="text" class="txt" id="cdetail" required title="Enter "/></td>
                </tr>
				
				<tr>
                  <td colspan="2" align="center"><input name="Submit" type="submit" class="btn" value="Register" /></td>
                </tr>
              </table>
			</form>
		    <p align="center" class="style26"><?php if($msg!=null)echo $msg; ?></p>
		  </div>
		</div>
	</div>
	<div class="footer">
	  <div>
			<p> All Rights Reserved	</p>
	  </div>
</div>
</body>
</html>