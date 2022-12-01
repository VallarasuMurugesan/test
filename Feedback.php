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
				
				<li class="selected">
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
		    <p align="center" class="style4">Comments Details </p>
			<form method="post" action="">
			  <table width="830" height="67" border="1" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <th width="35" height="30" bgcolor="#999966">ID</th>
                  <th width="69" bgcolor="#999966" >Roll No</th>
                  <th width="124" bgcolor="#999966">Student  Name</th>
                  <th width="107" bgcolor="#999966">Course</th>
                  <th width="116" bgcolor="#999966">Department</th>
                  <th width="172" bgcolor="#999966">Subject</th>
                  <th width="191" bgcolor="#999966">Comments</th>
                </tr>
                <?php
		  $i=0;
		  $qry=mysql_query("select * from feedbacks");
		  while($row=mysql_fetch_array($qry))
		  { $i++;
		  ?>
                <tr>
                  <td height="35" align="center"><?php echo $i; ?></td>
                  <td align="center"><?php echo $row['rno']; ?></td>
                  <td align="center"><?php echo $row['sname']; ?></td>
                  <td align="center"><?php echo $row['course']; ?></td>
                  <td align="center"><?php echo $row['dept']; ?></td>
                  <td align="center"><?php echo $row['subject']; ?></td>
                  <td align="center"><?php echo $row['specifications']; ?></td>
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