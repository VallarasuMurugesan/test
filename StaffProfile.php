<?php
session_start();
include("db_connect.php");
extract($_POST);
$msg="";
if(isset($Submit))
{
	$qry= "select * from staff where sname='$sname' &&fname='$fname' && dept='$dept'";
	$exe = mysql_query($qry);
	$num = mysql_num_rows($exe);
 	if($num==1)
 	{
         	$msg="Already Registered Candidate...";
    }
	else
	{ 
     $sno=rand(10000,50000);
	 $qry1= "insert into staff values('$StaffCatagory','$dept','$sname','$fname','$degree','$dob','$occupation','$speciliztion','$ph_no','$email','$experience')";
	 $exe=mysql_query($qry1,$connect)or show_error();
	 $msg="Staff Details Registered Successfully...Registered ID:".$sno;
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
				<li class="selected">
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
		    <p align="center" class="style4">Staff Registration </p>
			<form method="post" action="">
			  <table width="426" border="0" align="center" bgcolor="#999966">
                <tr>
                  <td height="41"><span class="style30">Staff Catagory </span></td>
					<td><select name="StaffCatagory" class="txt" id="StaffCatagory">
                      <option>--select--</option>
                      <option>Teaching</option>
                      <option>Non-Teaching</option>
                  </select></td>
                </tr><tr>
                  <td height="41"><span class="style30">Department </span></td>
                  <td><input name="dept" type="text" class="txt" id="dept" required title="only use uppercase"/></td>
                </tr>
				<tr>
                  <td width="158" height="37"><span class="style25">Staff Name </span></td>
                  <td width="252"><input name="sname" type="text" class="txt" id="sname" required title="only use uppercase"/></td>
                </tr>
				<tr>
                  <td height="41"><span class="style30">Father Name </span></td>
                  <td><input name="fname" type="text" class="txt" id="fname" required title="only use uppercase"/></td>
                </tr>
				<tr>
                  <td height="41"><span class="style30">Degree </span></td>
                  <td><input name="degree" type="text" class="txt" id="degree" required title="Enter Degree"/></td>
                </tr>
				<tr>
                  <td height="41"><span class="style30">Date of Birth </span></td>
                  <td><input name="dob" type="text" class="txt" id="dob" required title="Enter Date of Birth dd/mm/yy"/></td>
                </tr>
				<tr>
                  <td height="41"><span class="style30">Designation </span></td>
                  <td><input name="occupation" type="text" class="txt" id="occupation" required title="Enter Designation "/></td>
                </tr>
				<tr>
                  <td height="41"><span class="style30">Specilization Subject in </span></td>
                  <td><input name="speciliztion" type="text" class="txt" id="speciliztion" required title="Enter Specilization Subject in"/></td>
                </tr>
				<tr>
                  <td height="41"><span class="style30">Mobile Number </span></td>
                  <td><input name="ph_no" type="text" class="txt" id="ph_no" required title="Enter Mobile Number"/></td>
                </tr>
				<tr>
                  <td height="41"><span class="style30">Email Id </span></td>
                  <td><input name="email" type="text" class="txt" id="email" required title="Enter  Email Id"/></td>
                </tr>
                <tr>
                  <td height="40"><span class="style25">Experience</span></td>
                  <td><input name="experience" type="text" class="txt" id="experience" required title="use only charactors in uppercase "/></td>
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