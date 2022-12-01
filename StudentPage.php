<?php
session_start();
include("db_connect.php");
extract($_POST);
$rno=$_SESSION['rno'];
$sname=$_SESSION['sname'];
$course=$_SESSION['course'];;
$dept=$_SESSION['dept'];
$msg="";
$cdate=date('d-m-Y');
if(isset($Submit))
{
	 $qry1= "insert into feedbacks values('$cdate','$rno','$sname','$course','$dept','$subject','$spec')";
	 $exe=mysql_query($qry1,$connect)or show_error();
	 $msg="Your Query Posted Successfully...";	 
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
					<a href="homepage.php"><span>H</span>ome</a>						
				</li>
				<li>
					<a href="StaffDetails.php"><span>S</span>taff</a>
				</li>
				<li>
					<a href="AluminiDetails.php"><span>A</span>lumini</a>
				</li>
				<li>
					<a href="ViewCircular.php"><span>C</span>ircular</a>
				</li>
				<li>		
					<a href="StudentPage.php"><span>C</span>omments</a>
				</li>
				<li>
				    <a href="image gallary.html"><span>I</span>mage gallary</a>				
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
		    <p align="center" class="style4">comments </p>
			<form method="post" action="">
			  <table width="426" border="0" align="center" bgcolor="#999966">
                <tr>
                  <td height="37"><strong class="style30">Register Number </strong></td>
                  <td><?php echo $rno;?></td>
                </tr>
                <tr>
                  <td width="158" height="37"><span class="style25">Student Name </span></td>
                  <td width="252"><?php echo $sname;?></td>
                </tr>
                <tr>
                  <td height="40"><span class="style25">Course</span></td>
                  <td><?php echo $course;?></td>
                </tr>
                <tr>
                  <td height="41"><span class="style25">Department</span></td>
                  <td><?php echo $dept;?></td>
                </tr>
                <tr>
                  <td height="51"><span class="style30">Subject</span></td>
                  <td><input name="subject" type="text" class="txt" id="subject" required title="Enter Subject"/></td>
                </tr>
                <tr>
                  <td height="41"><span class="style30">Comments</span></td>
                  <td><textarea name="spec" cols="30" rows="5" id="spec" title="Enter Comments" required="required"></textarea></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><input name="Submit" type="submit" class="btn" value="Post" /></td>
                </tr>
              </table>
			</form>
		    <p align="center" class="style26"><?php if($msg!=null)echo $msg; ?></p>
		  </div>
		</div>
	</div>
	<div class="footer">
	  <div>
			<p> All Rights Reserved			</p>
	  </div>
</div>
</body>
</html>