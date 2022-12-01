<?php
session_start();
include("db_connect.php");
extract($_POST);
$msg="";
if(isset($Submit))
{
	 $qry= "select * from forms where category='$category'";
	$exe = mysql_query($qry);
	$num = mysql_num_rows($exe);
 	if($num==1)
 	{
         	$ftype=$_FILES['file']['name'];
	 		if(is_dir("Forms")==false) {  mkdir("Forms");  }
	 		move_uploaded_file($_FILES['file']['tmp_name'],"Forms/".$ftype);
			mysql_query("update forms set filetype='$ftype' where category='$category'");
			$msg="File Updated Successfully...";	 
    }
	else
	{
     $ftype=$_FILES['file']['name'];
	 if(is_dir("Forms")==false) {  mkdir("Forms");  }
	 move_uploaded_file($_FILES['file']['tmp_name'],"Forms/".$ftype);
	 $qry1= "insert into forms values('$category','$ftype')";
	 $exe=mysql_query($qry1,$connect)or show_error();
	 $msg="Forms Uploaded Successfully...";	 
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
				<li class="selected">
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
      </div></div>
	<div class="body">
		<div>
		  <div class="featured"></div>
		  <div>
		    <p align="center" class="style4">Form Upload </p>
			<form action="" method="post" enctype="multipart/form-data">
			  <table width="426" border="0" align="center" bgcolor="#999966">
                <tr>
                  <td width="158" height="51"><span class="style29">Form Category </span></td>
                  <td width="252"><label>
                    <select name="category" class="txt">
                      <option>Select</option>
					  <option>Exam Application Forms</option>
					  <option>Leave Form</option>
					  <option>Report Form</option>
					  <option>Convocation Form</option>
					  <option>Revaluation Form</option>
					  <option>Scholorship Form</option>
					  <option>ID Card Apply Form</option>
                    </select>
                  </label></td>
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