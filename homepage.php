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
	<title>Student Web Interface </title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
<!--
.style7 {
	color: #FF0000;
	font-weight: bold;
}
.style27 {	color: #FFFFFF;
	font-size: xx-large;
}
.style29 {color: #FFFFFF; font-weight: bold; }
-->
    </style>
</head>
<body>
	<div class="header">
	  <div>
			<span class="style27">Student Web Interface </span>
			<ul>
				<li class="selected">
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
			<div class="featured">
				<img src="images/camping.jpg" alt="">
				<div>
				  <div>
						<h3><span>B</span>E <span>A</span> <span>C</span>HAMPER <span>T</span>ODAY!</h3>
					  <p>This website is very useful  for our college students.</p>
					  <a href=" http://www.mrcolleges.net/arts_gallery.php ">Click here</a>
					  
				  </div>
				</div>
		  </div>
		  <div>
		    <form method="post" action="">
		    <table width="784" height="377" border="0" align="center" >
              <tr>
                <td width="144" height="49" bgcolor="#FF0000"><span class="style29"><center>Forms</center> </span></td>
                <td colspan="4" bgcolor="#FF0000"><span class="style29">
                <center>Syllabus</center></span></td>
                <td colspan="4" bgcolor="#FF0000"><span class="style29">
                <center>Study Notes</center> </span></td>
              </tr>
              <tr>
                <td height="48" rowspan="7">
				  <?php
		  $qry=mysql_query("select * from forms");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <p><strong><a href="Forms\<?php echo $row['filetype']; ?>"><?php echo $row['category']; ?></a></strong></p>
			<?php } ?>               </td>
			
                <td height="34" colspan="2" bgcolor="#000066"><span class="style29">
                <center>UG</center></span></td>
                <td colspan="2" bgcolor="#000066"><span class="style29"><center>PG</center></span></td>
                <td colspan="2" bgcolor="#000066"><span class="style29"><center>UG</center></span></td>
                <td colspan="2" bgcolor="#000066"><span class="style29"><center>PG</center></span></td>
              </tr>
              <tr>
                <td width="62" rowspan="3"><strong>BSc</strong></td>
				 <?php
		  $qry=mysql_query("select * from materials where course='BSc' and category='Syllabus' and syear='I Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td width="69"><a href="Documents\<?php echo $row['filetype']; ?>"><strong>I Year </strong></a></td>
			<?php } ?>
			
                <td width="63" rowspan="3"><strong>MSc</strong></td>
				<?php
		  $qry=mysql_query("select * from materials where course='MSc' and category='Syllabus' and syear='I Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td width="104"><a href="Documents\<?php echo $row['filetype']; ?>"><strong>I Year </strong></a></td>
				<?php } ?>
                <td width="63" rowspan="3"><strong>BSc</strong></td>
				<?php
		  $qry=mysql_query("select * from materials where course='BSc' and category='Study Notes' and syear='I Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td width="81"><a href="Documents\<?php echo $row['filetype']; ?>"><strong>I Year </strong></a></td>
				<?php } ?>
				
                <td width="66" rowspan="3"><strong>MSc</strong></td>
				<?php
		  $qry=mysql_query("select * from materials where course='MSc' and category='Study Notes' and syear='I Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td width="94"><a href="Documents\<?php echo $row['filetype']; ?>"><strong>I Year </strong></a></td>
			<?php } ?>
              </tr>
              <tr>
			   <?php
		  $qry=mysql_query("select * from materials where course='BSc' and category='Syllabus' and syear='II Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Syllabus\PHP.pdf"><strong>II Year </strong></a></td>
				<?php } ?>
				<?php
		  $qry=mysql_query("select * from materials where course='MSc' and category='Syllabus' and syear='II Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>II Year </strong></a></td>
				<?php } ?>
				<?php
		  $qry=mysql_query("select * from materials where course='BSc' and category='Study Notes' and syear='II Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>II Year </strong></a></td>
				<?php } ?>
				<?php
		  $qry=mysql_query("select * from materials where course='MSc' and category='Study Notes' and syear='II Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>II Year </strong></a></td>
				<?php } ?>
              </tr>
              <tr>
			   <?php
		  $qry=mysql_query("select * from materials where course='BSc' and category='Syllabus' and syear='III Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>III Year </strong></a></td>
				<?php } ?>
				<?php
		  $qry=mysql_query("select * from materials where course='MSc' and category='Syllabus' and syear='III Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>III Year </strong></a></td>
				<?php } ?>
				<?php
		  $qry=mysql_query("select * from materials where course='BSc' and category='Study Notes' and syear='III Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>III Year </strong></a></td>
				<?php } ?>
				<?php
		  $qry=mysql_query("select * from materials where course='MSc' and category='Study Notes' and syear='III Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>III Year </strong></a></td>
				<?php } ?>
              </tr>
              <tr>
                <td rowspan="3"><strong>BCA</strong></td>
				<?php
		  $qry=mysql_query("select * from materials where course='BCA' and category='Syllabus' and syear='I Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td width="69"><a href="Documents\<?php echo $row['filetype']; ?>"><strong>I Year </strong></a></td>
				<?php } ?>
                <td rowspan="3"><strong>MCA</strong></td>
				<?php
		  $qry=mysql_query("select * from materials where course='MCA' and category='Syllabus' and syear='I Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td width="104"><a href="Documents\<?php echo $row['filetype']; ?>"><strong>I Year </strong></a></td>
				<?php } ?>
                <td rowspan="3"><strong>BCA</strong></td>
				<?php
		  $qry=mysql_query("select * from materials where course='BCA' and category='Study Notes' and syear='I Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td width="81"><a href="Documents\<?php echo $row['filetype']; ?>"><strong>I Year </strong></a></td>
				<?php } ?>
                <td rowspan="3"><strong>MCA</strong></td>
				<?php
		  $qry=mysql_query("select * from materials where course='MCA' and category='Study Notes' and syear='I Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td width="94"><a href="Documents\<?php echo $row['filetype']; ?>"><strong>I Year </strong></a></td>
				<?php } ?>
              </tr>
              <tr>
                <?php
		  $qry=mysql_query("select * from materials where course='BCA' and category='Syllabus' and syear='II Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>II Year </strong></a></td>
				<?php } ?>
				<?php
		  $qry=mysql_query("select * from materials where course='MCA' and category='Syllabus' and syear='II Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>II Year </strong></a></td>
				<?php } ?>
				<?php
		  $qry=mysql_query("select * from materials where course='BCA' and category='Study Notes' and syear='II Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>II Year </strong></a></td>
				<?php } ?>
				<?php
		  $qry=mysql_query("select * from materials where course='MCA' and category='Study Notes' and syear='II Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>II Year </strong></a></td>
				<?php } ?>
              </tr>
              <tr>
                <?php
		  $qry=mysql_query("select * from materials where course='BCA' and category='Syllabus' and syear='III Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>III Year </strong></a></td>
				<?php } ?>
				<?php
		  $qry=mysql_query("select * from materials where course='MCA' and category='Syllabus' and syear='III Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>III Year </strong></a></td>
				<?php } ?>
				<?php
		  $qry=mysql_query("select * from materials where course='BCA' and category='Study Notes' and syear='III Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>III Year </strong></a></td>
				<?php } ?>
				<?php
		  $qry=mysql_query("select * from materials where course='MCA' and category='Study Notes' and syear='III Year'");
		  while($row=mysql_fetch_array($qry))
		  { 
		  ?>
                <td><a href="Documents\<?php echo $row['filetype']; ?>"><strong>III Year </strong></a></td>
				<?php } ?>
              </tr>
              

              <tr>
                <td height="58" colspan="9" align="center">&nbsp;</td>
              </tr>
            </table>
			</form>
		    <p align="center" class="style7"></p>
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