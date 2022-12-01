<?php
session_start();
include("db_connect.php");
extract($_POST);
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
.style26 {
	color: #FF0000;
	font-weight: bold;
}
.style27 {font-size: 10px}
.style39 {color: #000033; font-weight: bold; font-size: 10px; }
.style41 {color: #000000; font-size: 10px; }
.style8 {	color: #000066;
	font-weight: bold;
	font-size: 16px;
}
.style42 {color: #FFFFFF;
	font-size: xx-large;
}
-->
    </style>
</head>
<body>
	<div class="header">
	  <div>
			<span class="style42">Student Web Interface</span>
			<ul>
				<li>
					<a href="adminhome.php"><span>H</span>ome</a>
				</li>
				<li class="selected">
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
		    <p align="center" class="style4">Student Details </p>
			<form method="post" action="">
			  <table width="683" height="67" border="1" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <th width="48" height="30" bgcolor="#999966"><span class="style41">ID</span></th>
                  <th width="79" bgcolor="#999966" class="style41">Roll Number </th>
                  <th width="177" bgcolor="#999966"><span class="style41">Student  Name </span></th>
                  <th width="130" bgcolor="#999966"><span class="style41">Course</span></th>
                  <th width="237" bgcolor="#999966"><span class="style41">Department</span></th>
                </tr>
                <?php
		  $i=0;
		  $qry=mysql_query("select * from student");
		  while($row=mysql_fetch_array($qry))
		  { $i++;
		  ?>
                <tr>
                  <td height="35" align="center"><span class="style39"><?php echo $i; ?></span></td>
                  <td align="center"><span class="style39"><?php echo $row['rno']; ?></span></td>
                  <td align="center"><span class="style39"><?php echo $row['sname']; ?></span></td>
                  <td align="center"><span class="style39"><?php echo $row['course']; ?></span></td>
                  <td align="center"><span class="style39"><?php echo $row['dept']; ?></span></td>
                </tr>
                <?php
		  }
		  ?>
              </table>
			</form>
			
		    <p align="center">&nbsp;</p>
		    <p align="center">&nbsp;</p>
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