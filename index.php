<?php
session_start();
include("db_connect.php");
extract($_POST);
$msg="";
	if(isset($Submit))
	{
	if($rb1=="Admin")
	{
	if($un=="admin" && $pw=="admin")
	{
	    header("location:adminhome.php");
	}
	else
	{
		$msg = "Login Incorrect";	
	}
	}
	if($rb1=="Student")
	{
					$qry2= "select * from student where uname='$un' && pword='$pw'";
					$exe2 = mysql_query($qry2);
					$num2 = mysql_num_rows($exe2);
					$row2 = mysql_fetch_array($exe2);
					if($num2==1)
					{
						$_SESSION['rno'] = $row2['rno'];
						$_SESSION['sname'] = $row2['sname'];
						$_SESSION['course'] = $row2['course'];
						$_SESSION['dept'] = $row2['dept'];
						header("location:StudentPage.php");	
					}			
					else 
					{
							$msg = "Login Incorrect";	
					}
				
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
.style6 {font-size: 16px; font-weight: bold; }
.style7 {
	color: #FF0000;
	font-weight: bold;
}
.style27 {	color: #FFFFFF;
	font-size: xx-large;
}
-->
    </style>
</head>
<body>
	<div class="header">
	  <div>
			<span class="style27"> Student Web Interface </span>
			<ul>
				<li class="selected">
					<a href="index.php"><span>L</span>ogin</a>				</li>
					<li>
					
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
					  <p>This website is very useful  for our college students </p>
				  </div>
				</div>
			</div>
		  <div>
		    <p align="center" class="style4">Authorized User Login </p>
			<form method="post" action="">
		    <table width="398" height="214" border="0" align="center" bgcolor="#999966">
              <tr>
                <td height="49"><strong>User Type </strong></td>
                <td><label>
                  <strong>
                <input name="rb1" type="radio" value="Admin" checked>
                Admin 
                <input name="rb1" type="radio" value="Student">
                Student</strong></label></td>
              </tr>
              <tr>
                <td width="103" height="49"><span class="style6">User Name </span></td>
                <td width="285"><input name="un" type="text" class="txt" /></td>
              </tr>
              <tr>
                <td height="48"><span class="style6">Password</span></td>
                <td><input name="pw" type="password" class="txt" /></td>
              </tr>
              <tr>
                <td height="58" colspan="2" align="center"><input name="Submit" type="submit" class="btn" value="Login" /></td>
              </tr>
            </table>
			</form>
		    <p align="center" class="style7"><?php if($msg!=null)echo $msg; ?></p>
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