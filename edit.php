<?php
if(!isset($_GET['id'])){
  die('id not provided');
}
require_once('db.php');
$id =$_GET['id'];
$sql="select * from patients where id=$id";
$result =$conn->query($sql);
if($result->num_rows != 1)
{
  die('id is not in our db');
}
$data = $result->FETCH_ASSOC();
 ?>

 <html >
 	<head>
 		<meta charset="utf-8">
 		  <link rel="stylesheet" href="editstyle.css">
 	</head>
 	<body>

 			<div class = "modal fade myModal" tabindex = "-1" role = "dialog"
 			   aria-labelledby = "myModalLabel" aria-hidden = "true">

 			   <div class = "modal-dialog">

 						<div class="wrapper">
 						<div  class="New_Patient_Form" >
 	          <div class="title">Edit Form</div>

 			         <div class = "modal-body">
 								 <form action="modify.php?id=<?= $id ?>" method="post">

 									 <div class="form_wrap">
 										 <div class="input_grp">
 											 <div class="input_wrap">
 												 <label for="name">Full Name</label>
 												 <input type="text" id="fname"  name="name" value="<?= $data['name']?>">
 											 </div>
 																</div>
 																<br>
 										 <div class="input_wrap">
 											 <label>Gender</label>
 													 <label class="radio_wrap" >
 														 <input type="text" name="gender"  class="input_radio"  value="<?= $data['gender']?>" />
 													 </label>

 										 </div>

 											 <div class="input_wrap"<br>
 												 <label for="phone" >Phone Number</label>
 												 <input type="tel" id="phone" name="phone" size="30" id="num" value="<?= $data['phone']?>">
 											 </div>


 										 <div class="input_wrap">
 												<label for="date_of_birth">Birthday:</label>
 												 <input type="date" id="birthday" name="date_of_birth" class="submit_btn" value="<?= $data['date_of_birth']?>">

 										 </div>

 										 <div class="input_wrap">
 												<label for="date_of_test">Date of test:</label>
 												 <input type="date" id="D_test" name="date_of_test" class="submit_btn" value="<?= $data['date_of_test']?>">

 										 </div>
 										 <div class="input_wrap">
 												<label for="date_of_issue">Date of issue:</label>
 												 <input type="date" id="D_issue" name="date_of_issue" class="submit_btn" value="<?= $data['date_of_issue']?>">

 										 </div>

 						 <div class="input_wrap">
 											 <label>Result</label>
 													 <label class="radio_wrap">
 														 <input type="text" name="result" class="input_radio" value="<?= $data['result']?>">
 										 </div>

 										 <div >
 											 <input type="submit" name="editform" value="submit" class="submit_btn">
 										 </div><br>

 												<div >
 												<input type = "button" class="submit_btn" data-dismiss = "modal" value="cancel" onclick="history.back()">
 	 											</div ><br>
 									 </div>
 								 </form>
 			         </div>
 						 </div>
 					 </div>

 			   </div><!-- /.modal-dialog -->

 			</div><!-- /.modal -->

 	</body>
 </html>
