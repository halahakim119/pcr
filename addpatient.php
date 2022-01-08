<html >
<head>
	<meta charset="UTF-8">
	<title>Registration Form </title>
	<link rel="stylesheet" href="addpatientStyles.css">
</head>
<body>
<center>

<div class="wrapper">
	<div class="New_Patient_Form">
		<div class="title">New Patient Form</div>

		<form method="post" action="insert.php " >

			<div class="form_wrap">
				<div class="input_grp">
					<div class="input_wrap">
						<label for="name">Full Name</label>
						<input type="text" id="fname"  name="name">
					</div>
                   </div>
                   <br>
				<div class="input_wrap">
					<label>Gender</label>
					<ul>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="gender" value="male" class="input_radio" checked>
								<span>Male</span>
							</label>
						</li>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="gender" value="female" class="input_radio">
								<span>Female</span>
							</label>
						</li>
					</ul>

				</div>

					<div class="input_wrap"<br>
						<label for="phone" >Phone Number</label>
						<input type="tel" id="phone" name="phone" size="30" id="num" >
					</div>


				<div class="input_wrap">
				   <label for="date_of_birth">Birthday:</label>
						<input type="date" id="birthday" name="date_of_birth" class="submit_btn">

				</div>

				<div class="input_wrap">
				   <label for="date_of_test">Date of test:</label>
						<input type="date" id="D_test" name="date_of_test" class="submit_btn">

				</div>
				<div class="input_wrap">
				   <label for="date_of_issue">Date of issue:</label>
						<input type="date" id="D_issue" name="date_of_issue" class="submit_btn">

				</div>

<div class="input_wrap">
					<label>Result</label>
					<ul>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="result" value="positive" class="input_radio" checked>
								<span>positive</span>
							</label>
						</li>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="result" value="negative" class="input_radio">
								<span>negative</span>
							</label>
						</li>
					</ul>
					
				</div>

				<div >
					<input type="submit" value="Add Now" class="submit_btn">
				</div><br>
				<div >
		        <button type="reset" value="Reset" class="submit_btn">reset</button>
				</div><br>
                <div >
                <input type="button" value="cancel" onclick="history.back()" class="submit_btn">
				</div ><br>
			</div>
		</form>
	</div>
</div>
</center>
</body>
</html>
