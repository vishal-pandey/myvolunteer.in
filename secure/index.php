<!DOCTYPE html>
<html>
<head>
	<title>My Volunteer</title>
	<link rel="stylesheet" type="text/css" href="../index.css">
	<link rel="stylesheet" type="text/css" href="../home.css">
	<link rel="stylesheet" type="text/css" href="../menu.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<?php include '../headcontent.html'; ?>
  <meta charset="utf-8" />
  <!-- <base href="http://myvolunteer.in/" /> -->
  <meta name="keywords" content="Events, Volunteer, Volunteering, Volunteers, Management, Events, Dublin, Fingal, Ireland, good, practice, Volunteer, Centre, Ireland, Management dublin, ireland, retention, motivation, recruitment, experts, selection, software, better impact, volunteer impact, Fingal County Council" />
  <meta name="description" content="Volunteer Management at Events" />
</head>
<body>

<div class="col-12 wrapper">
	<?php include '../topmenu.html';  ?>

	<div class="col-12 containr">
		
		<?php include '../header.html'; ?>

		<?php include '../mainmenu.html'; ?>

		<div class="col-12 content">
			<div class="maincontent col-12">
				<h1>List Of Registered Members</h1>
				<?php

					include 'configuration.txt';
					$conn = new mysqli($server,$user,$pwd,$db);
					$sql = "SELECT * FROM registration";
					$result = $conn->query($sql);

					echo "<table border='1 '>";
					echo "<tr><th>S.No.</th><th>Name</th><th>Age</th><th>Sex</th><th>Email</th><th>Mobile No.</th><th>Location</th><th>Language Known</th><th>Volunteering Experience</th><th>Profession</th><th>Additional Info</th>";

					$sno = 0;


					while ($row = $result->fetch_assoc()) 
					{
						$sno++;
						echo "<tr>";
							echo "<td>".$sno."</td>";
							echo "<td>".$row['name']."</td>";
							echo "<td>".$row['age']."</td>";
							echo "<td>".$row['sex']."</td>";
							echo "<td>".$row['email']."</td>";
							echo "<td>".$row['phone']."</td>";
							echo "<td>".$row['address']."</td>";
							echo "<td>".$row['language']."</td>";
							echo "<td>".$row['experience']."</td>";
							echo "<td>".$row['profession']."</td>";
							echo "<td>".$row['additional']."</td>";
						echo "</tr>";
							
					}
					echo "</table>";

				?>
				<hr>
				<h1>Enquiry On Website</h1>
				<?php

					
					
					$sql = "SELECT * FROM enquiry";
					$result = $conn->query($sql);

					echo "<table border='1'>";
					echo "<tr><th>Name</th><th>Email</th><th>Comments</th></tr>";


					while ($row = $result->fetch_assoc()) 
					{
						echo "<tr>";
							echo "<td>".$row['name']."&nbsp;&nbsp;&nbsp;</td>";
							echo "<td>".$row['email']."&nbsp;&nbsp;&nbsp;</td>";
							echo "<td>".$row['comment']."&nbsp;&nbsp;&nbsp;</td>";
						echo "</tr>";
					}
					echo "</table>";

				?>




			</div>

		</div>

		<?php include '../twitter.html' ?>

	</div>

	<?php include '../footer.html'; ?>

</div>

</body>
</html>
