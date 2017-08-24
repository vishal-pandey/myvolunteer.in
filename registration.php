<!DOCTYPE html>
<html>
<head>
	<title>My Volunteer</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php include 'headcontent.html'; ?>

  <meta charset="utf-8" />
  <!-- <base href="http://myvolunteer.in/" /> -->
  <meta name="keywords" content="Events, Volunteer, Volunteering, Volunteers, Management, Events, Dublin, Fingal, Ireland, good, practice, Volunteer, Centre, Ireland, Management dublin, ireland, retention, motivation, recruitment, experts, selection, software, better impact, volunteer impact, Fingal County Council" />
  <meta name="description" content="Volunteer Management at Events" />
</head>
<body>

<div class="col-12 wrapper">
	<?php include 'topmenu.html';  ?>

	<div class="col-12 containr">
		
		<?php include 'header.html'; ?>

		<?php include 'mainmenu.html'; ?>

		<div class="col-12 content">
			<div class="maincontent well col-9">
				<div class="col-12 heading"><span class="headingg">Registration Form</span></div>
				<div class="col-12 form">
					<form method="post" action="process.php" id="registration">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="name form-control" name="name" placeholder="Enter Name">
							</div>
							
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-gift"></i></span>
								<input type="text" class="age form-control" name="age" placeholder="Enter Your Age in Years">
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-king"></i></span>
								<select name="sex" class="sex form-control" form="registration">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="email" class="email form-control" name="email" placeholder="Enter Email">
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
								<input type="text" class="phone form-control" name="phone" placeholder="Enter Mobile No.">
							</div>


							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
								<select name="address" class="address form-control" form="registration">
									<option value="Not Selected">Select Location</option>
									<option value="Delhi NCR">Delhi NCR</option>
									<option value="Other">Uttar Pradesh</option>
									<option value="Other">Andhra Pradesh</option>
									<option value="Other">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Madya Pradesh">Madya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Orissa">Orissa</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttaranchal">Uttaranchal</option>
									<option value="West Bengal">West Bengal</option>
									<option value="Andaman & Nicobar">Andaman and Nicobar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Dadar & Nagar Haveli">Dadar and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Lakshadeep">Lakshadeep</option>
									<option value="Pondicherry">Pondicherry</option>
									<option value="Other">Other</option>
								</select>
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
								<select name="language" class="form-control" form="registration">
									<option value="Not Selected">Select Language Known</option>
									<option value="English">English</option>
									<option value="Hindi">Hindi</option>
									<option value="Both">Both</option>
									
								</select>
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<select name="experience" class="form-control" form="registration">
									<option value="Not Selected">Select Volunteering Experience</option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
								<select name="profession" class="form-control" form="registration">
									<option value="Not Selected">Select Profession</option>
									<option value="student">Student</option>
									<option value="Corporate">Corporate Professional</option>
									<option value="Home Maker">Home Maker</option>
									<option value="Other">Other</option>
								</select>
							</div>


							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
								<input type="text" class="form-control" name="additional" placeholder="Enter Any additional details">
							</div>

							<br>

							<div class="input-group">
								
								<button type="submit" name="submit" class="btn btn-success" value="submit">Submit</button>
							</div>
						
						
					</form>
				</div>				
		

				
			</div>
			<div class="social col-3">
				<?php include 'social.html'; ?>
			</div>
		</div>

		<?php include 'twitter.html' ?>

	</div>

	<?php include 'footer.html'; ?>

</div>

</body>
</html>

<style type="text/css">

div.form{
	background-color: white;
	color: black;
}
.maincontent{
	padding-top: 0;
	margin-top: 0;
}
.headingg{
	font-size: 25px;
}
</style>
<script type="text/javascript">
	$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>