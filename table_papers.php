<?php

include('db_conn.php');

$code = $_GET['code'];
$id=$_GET['id'];
//echo $id.$content;
$sql = "SELECT papers.title,pdf from papers,sem1_notes where sem1_notes.code = papers.code and id ='$id' and papers.code ='$code'";
$result = $conn->query($sql);
// if ($result->num_rows > 0){
// 	echo "entries there";

// }
// else{
// 	echo "No entries";
// }
// if(mysqli_num_rows($result)>0)
// {
// 		echo "<script>table.style.display=visible</script>";
// }
// if(mysqli_num_rows($result)>0)
// {
	// echo "string";

	// <!-- <script language="javascript">
	// 	document.getElementById("show-table").style.display="block";
	// </script>
 // -->
	$conn->close();
?>

<!DOCTYPE html>
<html>
<head>

	<title>Question Papers</title>

	<style>
		/*table
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
				}*/

				.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
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


	<h1><center>PAPERS LIST</center></h1>
	<br>
	<div id="show-table" style="overflow-x:auto;margin-top: 5%;">
	<center>
	<table class="styled-table">
	<tr>
		
		<th>PAPER TITLE</th>
		<th> PDF </th>
	</tr>

	 <?php
	 $content = "papers";
	 while($rows=$result->fetch_assoc())
    {
	        $title = $rows['title'];
			$pdf=$rows['pdf'];

			
			$url = "content_display.php?id=$pdf&content=$content";


			 echo "<tr class=active-row>";
			 echo "<td>$title</td>";
			 echo "<td><a href='$url'>$title</a></td>";
	  }
	
	

		?>
 	</table></center>
 	</div>

</body>
</html>
