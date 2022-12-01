<?php
session_start();
include("db_connect.php");
extract($_POST);
$msg="";
if(isset($Submit))
{
	$qry= "select * from student where sname='$sname' && course='$crs' && dept='$dept'";
	$exe = mysql_query($qry);
	$num = mysql_num_rows($exe);
 	if($num==1)
 	{
         	$msg="Already Registered Candidate...";
    }
	else
	{ 
     $r=rand(10000,50000);
	 $qry1= "insert into student values('$r','$sname','$crs','$dept','$uname','$pwd')";
	 $exe=mysql_query($qry1,$connect)or show_error();
	 $msg="Student Details Registered Successfully...Registered ID:".$r;
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
				<li class="selected">
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
				<li>
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
		    <p align="center" class="style4">Student Registration </p>
			<form method="post" action="">
			  <table width="426" border="0" align="center" bgcolor="#999966">
                <tr>
                  <td width="158" height="37"><span class="style25">Student Name </span></td>
                  <td width="252"><input name="sname" type="text" class="txt" id="sname" required title="Enter Student Name"/></td>
                </tr>
                <tr>
                  <td height="40"><span class="style25">Course</span></td>
                  <td><select name="crs" class="txt" id="crs">
                      <option>BSc</option>
                      <option>BCA</option>
                      <option>MSc</option>
                      <option>BBA</option>
					  <option>MBA</option>
                      <option>BA-ENG</option>
                      <option>MA-ENG</option>
                      <option>BA-TAMIL</option>
					  <option>MA-TAMIL</option>
					  <option>B-COM</option>
					  <option>M-COM</option>
                    </select>                  </td>
                </tr>
                <tr>
                  <td height="41"><span class="style25">Department</span></td>
                  <td><select name="dept" class="txt" id="dept">
                      <option>Department of Computer Science</option>
                      <option>Department of Businees and management</option>
					   <option>Department of Engilish</option>
					    <option>Department of Tamil</option>
						<option>Department of Commerce</option>
						
                  </select></td>
                </tr>
                <tr>
                  <td height="41"><span class="style30">User Name </span></td>
                  <td><input name="uname" type="text" class="txt" id="uname" required title="Enter User Name"/></td>
                </tr>
                <tr>
                  <td height="41"><span class="style30">Password</span></td>
                  <td><input name="pwd" type="password" class="txt" id="pwd" required title="Enter Password"/></td>
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