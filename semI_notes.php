<?php

include('db_conn.php');

$id = $_GET['id'];
$sql = "SELECT * FROM sem1_notes WHERE id = $id"; 
$result = $conn->query($sql); 
$conn->close(); 

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>MCA Notes</title>

	<style>
		table
		{
			width: 60%;
			border: 1px solid black;
			border-collapse: collapse;
			margin-left: auto;
  			margin-right: auto;
		}

		th, td {
  					text-align: center;
  					padding: 15px;
  					border: 1px solid black;
  					border-collapse: collapse;
  					font-size: 20px;
				}

		a
		{
			text-decoration: none;
		}

		h1
		{
			margin-top: 5%;
		}

	</style>

</head>
<body>


	<h1><center>SUBJECT LIST</center></h1>
	<br>
	<div style="overflow-x:auto;margin-top: 5%;">
	<table>
	<tr>
		<th>Subject Code</th>
		<th>Subject Title</th>
	</tr>

	<?php
	while($rows=$result->fetch_assoc()) 
    { 
    	$code = $rows['code'];
 		// echo $code;
	?>

	<tr>
      <td><?php echo $rows['code'];?></td>
      <td><a href="pdf_show.php?id=<?php echo $code ?>"><?php echo $rows['title'];?></a></td>
 	</tr>

	<?php 
    } 
    ?>

 	</table>
 	</div>

</body>
</html>