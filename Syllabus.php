<?php
session_start();
include("db_connect.php");
extract($_POST);
$msg="";
if(isset($Submit))
{
	$qry= "select * from materials where course='$crs' and category='$category' and syear='$syear'";
	$exe = mysql_query($qry);
	$num = mysql_num_rows($exe);
 	if($num==1)
 	{
         	$ftype=$_FILES['file']['name'];
	 		if(is_dir("Documents")==false) {  mkdir("Documents");  }
	 		move_uploaded_file($_FILES['file']['tmp_name'],"Documents/".$ftype);
			mysql_query("update materials set filetype='$ftype' where course='$crs' and category='$category' and syear='$syear'");
			$msg="File Updated Successfully...";	 
    }
	else
	{
     $ftype=$_FILES['file']['name'];
	 if(is_dir("Documents")==false) {  mkdir("Documents");  }
	 move_uploaded_file($_FILES['file']['tmp_name'],"Documents/".$ftype);
	 $qry1= "insert into materials values('$category','$crstype','$crs','$dept','$syear','$ftype')";
	 $exe=mysql_query($qry1,$connect)or show_error();
	 $msg="File Uploaded Successfully...";	 
	 }
}
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Student Web</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
<!--
.style4 {
	font-size: 18px;
	font-weight: bold;
}
.style26 {
	color: #FF0000;
	font-weight: bold;
}
.style29 {color: #000000; font-size: 14px; font-weight: bold; }
.style30 {color: #FFFFFF;
	font-size: xx-large;
}
-->
    </style>
</head>
<body>
	<div class="header">
	  <div> <span class="style30"> Student Web Interface</span>
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
				<li>
					<a href="AddCircular.php"><span>C</span>ircular</a>
				</li>
				<li class="selected">
					<a href="Syllabus.php"><span>M</span>etireals</a>
				</li>
				
				<li>
					<a href="Feedback.php"><span>C</span>ommends</a>
				</li>
				<li>
					<a href="index.php"><span>L</span>ogout</a>
				</li>
	    </ul>
      </div></div>
	<div class="body">
		<div>
		  <div class="featured"></div>
		  <div>
		    <p align="center" class="style4">syllabus& notes </p>
			<form action="" method="post" enctype="multipart/form-data">
			  <table width="426" border="0" align="center" bgcolor="#999966">
                <tr>
                  <td width="158" height="51"><span class="style29">Category </span></td>
                  <td width="252"><label>
                    <select name="category" class="txt">
                      <option>Select</option>
					  <option>Syllabus</option>
					  <option>Study Notes</option>
                    </select>
                  </label></td>
                </tr>
                <tr>
                  <td height="41"><strong>Course Type </strong></td>
                  <td><select name="crstype" class="txt" id="crstype">
                    <option>UG</option>
                    <option>PG</option>
                  </select></td>
                </tr>
                <tr>
                  <td height="41"><span class="style29">Course</span></td>
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
                  </select></td>
                </tr>
                <tr>
                  <td height="51"><span class="style29">Department</span></td>
                  <td><select name="dept" class="txt" id="dept">
                    <option>Department of Computer Science</option>
                      <option>Department of Businees and management</option>
					   <option>Department of Engilish</option>
					    <option>Department of Tamil</option>
						<option>Department of Commerce</option>
                  </select></td>
                </tr>
                
                <tr>
                  <td height="37"><span class="style29">Year</span></td>
                  <td><select name="syear" class="txt" id="syear">
                    <option>I Year</option>
                    <option>II Year</option>
					<option>III Year</option>
                  </select></td>
                </tr>
                <tr>
                  <td height="55"><span class="style29">Browse</span></td>
                  <td><label>
                    <input name="file" type="file" class="txt">
                  </label></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><input name="Submit" type="submit" class="btn" value="Submit" /></td>
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