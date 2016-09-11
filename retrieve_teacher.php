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
}
  </style>
</head>
<script>
function myFunction() {
    confirm("Updated successfully!");
}
</script>
<body>
<?php
require_once 'connect.php';
session_start();
echo "<button><p align='right'><a href=\"logout.php\"> logout!</a></p></button>";
$user= $_SESSION['user'];
$_SESSION['subid'] = $_GET['subid'];
$subid = $_SESSION['subid'];

$result = mysql_query("SELECT * FROM students ORDER BY name ASC");
?>
<strong>
	<center>
	<form action="retrieve_teacher.php?subid=<?php echo $_SESSION['subid'];?>" method="POST">
		<font color="white">
		<button><input type="date" name="date" placeholder="Date of attendance"></button>
		<table><?php
			while($row = @mysql_fetch_assoc($result))
			{				
				echo "<tr><td>";
				echo "<input type=\"checkbox\" name=\"$row[regno]\"></td>";
				echo "<td>$row[name]</td>";
				echo "<td>$row[regno]</td>";
			}
		?></table>
		<button onclick="myFunction()"><input type="submit" value="Update"></button>
		</table>
	</form>
	</center>
</strong
</body>
<?php
	if(isset($_POST['date']))
	{
		$date = $_POST['date'];
		if(!empty($date))
		{
			$res = mysql_query("SELECT * FROM students ORDER BY name ASC");
			while(@$row = mysql_fetch_assoc($res))
			{
				$reg = $row['regno'];
				if(isset($_POST[$reg]))
				{
					$query = "INSERT INTO `atms`.`attendance` (`date`, `subid`, `regno`, `presence`) VALUES ('$date', '$subid', '$reg', '1')";
					$handle = mysql_query($query);
				}
				else
				{
					$query = "INSERT INTO `atms`.`attendance` (`date`, `subid`, `regno`, `presence`) VALUES ('$date', '$subid', '$reg', '0')";
					$handle = mysql_query($query);
				}
			}
			
		}
		else
		{
			echo "<strong><center><font color=\"red\">Date is mandatory</font></center></strong>";
		}
	}
?>
