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
<html>
<title>
	Student's Login
</title>
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

<body>
<center>
<form>
<button formaction="logout.php">Log out</button>
<form>
<?php
	require_once 'connect.php';
	session_start();
	if(isset($_POST['Subject']))
	{
		$reg = $_SESSION['reg'];
		$topic = $_POST['Subject'];
		$query = "SELECT subid FROM subjects WHERE subname = ('$topic')";
		$handle = mysql_query($query);
		$row = mysql_fetch_array($handle);
		$subid = $row['subid'];
		$query = "SELECT * FROM attendance WHERE regno=('$reg') AND subid = ('$subid')";
		$handle = mysql_query($query);
		$total = 0;
		$present = 0;
		?>
		<table>
		<?php
		while($row = mysql_fetch_array($handle))
		{
			$date = $row['date'];
			$attend = $row['presence'];
			if($attend==1)
				$present = $present+1;
			$total = $total + 1;
			echo "<tr><td>".$date.' '.$attend."</td></tr>";
		}
		echo "</table>";
		if($total!=0)
			echo '<h1><strong>Your attendance is '.$present.'/'.$total.'</strong></h1><br>';
		else
			echo '<h1><strong>No classes have been happened in this subject yet</strong></h1><br>';
	}
	$result = mysql_query("SELECT * FROM students where regno='$_SESSION[reg]' ");
	//echo $_SESSION['reg'];
	echo "<h1><center><strong><font color=\"white\">Welcome!</font></strong></center></h1>";
	$row = mysql_fetch_assoc($result);
	$query = "SELECT * FROM subjects";
	$runq = mysql_query($query);
	?>
	<form action="retrieve.php" method="POST">
	<table>
	<?php
	while($sub = mysql_fetch_assoc($runq))
	{
		?>
				<tr>
					<td>
					<input type="radio" name="Subject" value="<?php echo $sub['subname'];?>">
					</td>
					<td>
						<?php echo $sub['subname'];?>
					</td>
				</tr>
	<?php
	}
?>
	<tr><td><input type="submit" value="Check">
			</table>
		</form>
</center>
</body>
</html>
<?php
?>
