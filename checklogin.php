<html>

<head>
  <style type="text/css">
      body{background:url(bb.jpg);
	   background-size:200% 200%;
	   -moz-background-size:100% 100%; /* Firefox 3.6 */
	   background-repeat:no-repeat;
	   word-wrap:break-word;}
     
      div{background:url(02.jpg);
	  border:2px solid #a1a1a1;
      	  padding:10px 40px; 
          word-wrap:break-word;
          width:1200px;}

     table.black{background:url(02.jpg);}
     p{background:url(02.jpg);}
  </style>
</head>    

<body>
<?php
require_once 'connect.php';
session_start();
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
$sql="SELECT * FROM teachers WHERE username='$user' and password='$pass'";
$result=mysql_query($sql);
@$count=mysql_num_rows($result);
if($count>=1){
header("location:teacher.php?username=$myusername");
}
else {
echo "<div align='center'><font size='5' color='white'> Wrong Username or Password</div>";
?>
<div align='center'>
<form>
<button formaction="index.php">Log out!</button>
</form>
</div>
<?php
session_unset();
session_destroy();
}
?>
</body>
</html>
