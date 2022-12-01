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
		    <p align="center" class="style4">Alumini Details </p>
			<form method="post" action="">
			  <table width="683" height="67" border="1" align="center" cellpadding="0" cellspacing="0">
                <tr>
				  <th width="35" height="30" bgcolor="#999966">ID</th>
                  <th width="48" height="30" bgcolor="#999966"><span class="style41">Student Name</span></th>
                  <th width="79" bgcolor="#999966" class="style41">Degree </th>
                  <th width="177" bgcolor="#999966"><span class="style41">Batch </span></th>
                  <th width="237" bgcolor="#999966"><span class="style41">Mobile Number</span></th>
                  <th width="237" bgcolor="#999966"><span class="style41">Email Id</span></th>
                  <th width="237" bgcolor="#999966"><span class="style41">Work From</span></th>
                </tr>
                <?php
		  $i=0;
		  $qry=mysql_query("select * from alumini");
		  while($row=mysql_fetch_array($qry))
		  { $i++;
		  ?>
                <tr>
                  <td height="35" align="center"><span class="style39"><?php echo $i; ?></span></td>
                  
                  <td align="center"><span class="style39"><?php echo $row['sname']; ?></span></td>
                  
                  <td align="center"><span class="style39"><?php echo $row['degree']; ?></span></td>
                  <td align="center"><span class="style39"><?php echo $row['batch']; ?></span></td>
                  
                  <td align="center"><span class="style39"><?php echo $row['ph_no']; ?></span></td>
                  <td align="center"><span class="style39"><?php echo $row['email']; ?></span></td>
                  <td align="center"><span class="style39"><?php echo $row['work_from']; ?></span></td>
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