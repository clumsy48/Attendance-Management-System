<html>
<head>
		<meta charset="utf-8">
		<meta name="description" content="kanvsatyanarayana's page">
		<meta name = "keywords" content = "Adarsh,Don,kanv">
		<!--<meta http-equiv= "refresh" content= "3">
			the above tag refreshes the page every 3 seconds-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
</html>
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
          width:1200px;
          border-radius:25px;}

     table.black{background:url(02.jpg);}
  </style>
</head>    

<body>
<form>
<button formaction="logout.php">Log out!</button>
</form>
<?php
require_once 'connect.php';
session_start();
if(!isset($_SESSION['user']))
	header("Location: index.php");

$user = $_SESSION['user'];
$sql="SELECT * FROM teachers WHERE username=('$user')";
echo "<center><center><h1><font size=\"5\" color=\"white\">Welcome ".$user."!</font></h1><br>";
@$result=mysql_query($sql);
echo "<center>";
echo "<center>";
echo "<font size='6' color='white' /><div><h1>Attendance Tracker</h1></div><br \><br \><br \>";
echo "<table border='1'>";
echo "<tr>";
echo "<th><font size=\"5\" color=\"white\">Courses Offered</font></th>";
echo "<th><font size=\"5\" color=\"white\">Course ID</font></th>";
echo "</tr>";

while($row = @mysql_fetch_array($result))
  {
  $query = "SELECT * FROM subjects WHERE username=('$user')";
  $res = mysql_query($query);
  while($var = @mysql_fetch_array($res))
  {
	  echo "<strong><tr>";
	  echo "<th>";
	  ?>
	  <a href='retrieve_teacher.php?subid=<?php echo $var['subid'];?>'> <?php echo $var['subname'];?></a>
	  <?php
	  echo '<th>'.$var["subid"].'</th>';
	  echo "</tr></strong>";
  }

  }
?>
</body>
</html>
