<html >
 <head>
	 <meta charset="utf-8">
		 <link rel="stylesheet" href="editstyle.css">
      <link rel="stylesheet" href="deletestyle.css">
        <link rel="stylesheet" href="openstyle.css">
 </head>
 <?php
	require_once('../../inc/config/constants.php');
	require_once('../../inc/config/db.php');

	$itemDetailsSearchSql = 'SELECT * FROM patients';
	$itemDetailsSearchStatement = $conn->prepare($itemDetailsSearchSql);
	$itemDetailsSearchStatement->execute();

	$output = '<table id="itemDetailsTable" class="table table-sm table-striped table-bordered table-hover" style="width:100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Patient Name</th>
						<th>Gender</th>
						<th>Phone Number</th>
						<th>Date of Birth</th>
						<th>Date of Test</th>
						<th>Date of issue</th>
						<th>Result</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>';
	// Create table rows from the selected data
	while($row = $itemDetailsSearchStatement->fetch(PDO::FETCH_ASSOC)){

		$output .= '<tr>' .
						'<td>' . $row['id'] . '</td>' .
						'<td>' . $row['name'] . '</td>'.
						'<td>' . $row['gender'] . '</td>' .
						'<td>' . $row['phone'] . '</td>' .
						'<td>' . $row['date_of_birth'] . '</td>' .
						'<td>' . $row['date_of_test'] . '</td>' .
						'<td>' . $row['date_of_issue'] . '</td>' .
						'<td>' . $row['result'] . '</td>' .
						"<td>
            <input type='image' src='folder.png'  class='openbtn' alt='open' />
            <input type='image' src='editICON.png'  class='editbtn' alt='edit' width='15' height='15'  />
             <a href='edit.php?id=".$row["id"] ."'>edit</a>
             <a href='delete.php?id=".$row["id"] ."' onclick='.deletetmodal'>delete now</a>
             <input type='image' src='delete.png'  class='deletebtn' alt='delete' />".

					'</tr>';

	}



	$itemDetailsSearchStatement->closeCursor();

	'</tbody>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Patient Name</th>
							<th>Gender</th>
							<th>Phone Number</th>
							<th>Date of Birth</th>
						<th>Date of Test</th>
						<th>Date of issue</th>
						<th>Result</th>
						<th>Actions</th>
						</tr>
					</tfoot>
				</table>';

	echo $output;

?>


      <!-- open POP UP FORM (Bootstrap MODAL) -->
       <div class="modal fade" id="openmodal">
           <div >
                 <div class = "modal-body">
                   <form action="open.php" method="POST">
                     <input type="hidden" name="id" id="id" />
                  <h4>patient information</h4>
                  <pre>
                    <p>
<label for="name" >Full Name: </label><input type="text" id="fname"    name="name" />
<label>Gender: </label><input type="text" name="gender"  class="input_radio" id="gender" />
<label for="phone" >Phone Number: </label><input type="tel" id="phone" name="phone" size="30">
<label for="date_of_birth">Birthday: </label><input type="text" id="birthday" name="date_of_birth" class="submit_btn">
<label for="date_of_test">Date of test: </label><input type="text" id="D_test" name="date_of_test" class="submit_btn">
<label for="date_of_issue">Date of issue: </label><input type="text" id="D_issue" name="date_of_issue" class="submit_btn" >
<label>Result: </label><input type="text" name="result" id="result" class="input_radio" >
<input type="button" value="cancel"  onclick="javascript:window.location='http://localhost/barcode/index.php';"class="delete2">
                    </p>
                  </pre>
</form>
</div>
</div>
</div>



		<!-- EDIT POP UP FORM (Bootstrap MODAL) -->
     <div class="modal fade" id="editmodal">
         <div >

 						<div class="wrapper">
 						<div  class="New_Patient_Form" >
 	          <div class="title">Edit Form</div>

 			         <div class = "modal-body">

 								 <form action="modify.php" method="POST">

 									 <div class="form_wrap">
										 <input type="hidden" name="id" id="id" />
 										 <div class="input_grp">
 											 <div class="input_wrap">
 												 <label for="name">Full Name</label>
 												 <input type="text" id="fname"  name="name" >
 											 </div>
 																</div>
 																<br>
 										 <div class="input_wrap">
 											 <label>Gender</label>
 													 <label class="radio_wrap" >
 														 <input type="text" name="gender"  class="input_radio" id="gender"  />
 													 </label>

 										 </div>

 											 <div class="input_wrap"<br>
 												 <label for="phone" >Phone Number</label>
 												 <input type="tel" id="phone" name="phone" size="30">
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
 												 <input type="date" id="D_issue" name="date_of_issue" class="submit_btn" >

 										 </div>

 						 <div class="input_wrap">
 											 <label>Result</label>
 													 <label class="radio_wrap">
 														 <input type="text" name="result" id="result" class="input_radio" >
 										 </div>

										 <div >

                        <button type="button" class="submit_btn edit " name="updatedata" >Update Data</button>

										 </div><br>
															<div >
															<input type="button" value="cancel"  onclick="javascript:window.location='http://localhost/barcode/index.php';"class="submit_btn">
														</div>

														</form>
										 </div ><br>

 									 </div>

 			         </div>
 						 </div>


 			   </div><!-- /.modal-dialog -->

 			</div><!-- /.modal -->

      <!-- delete -->
       <div class="modal fade" id="deletetmodal">
           <div >
                 <div class = "modal-body">
                   <form action="delete.php" method="POST">
                     <input type="hidden" name="id" id="id" />
                  <h4>Do you want to delete this data?</h4>
                  <div >
                     <button type="button" class="delete" onclick="javascript:window.location='http://localhost/barcode/delete.php';"  >Delete</button>
                  </div><br>

                  <div >
                      <input type="button" value="cancel"  onclick="javascript:window.location='http://localhost/barcode/index.php';"class="delete2">
                  </div>
                  </form>
                 </div>
           </div>
        </div>

<!--delete script-->
                  <script>

        					$(document).ready(function () {

                     $('.deletebtn').on('click', function () {

                      $('#deletetmodal').modal('show');

                         $tr = $(this).closest('tr');

                         var data = $tr.children("td").map(function () {
                             return $(this).text();
                         }).get();

                         console.log(data);
                         $('#id').val(data[0]);


        					 });
        			 });


        	 </script>

<!--edit script-->
					<script>

					$(document).ready(function () {


             $('.editbtn').on('click', function () {

                 $('#editmodal').modal('show');

                 $tr = $(this).closest('tr');

                 var data = $tr.children("td").map(function () {
                     return $(this).text();
                 }).get();

                 console.log(data);

							 $('#fname').val(data[1]);
							 $('#gender').val(data[2]);
							 $('#phone').val(data[3]);
							 $('#birthday').val(data[4]);
							 $('#D_test').val(data[5]);
							 $('#D_issue').val(data[6]);
							 $('#result').val(data[7]);

					 });
			 });


	 </script>



<!--opent script-->
   					<script>

   					$(document).ready(function () {


                $('.openbtn').on('click', function () {

                    $('#openmodal').modal('show');

                    $tr = $(this).closest('tr');

                    var data = $tr.children("td").map(function () {
                        return $(this).text();
                    }).get();

                    console.log(data);

   							 $('#fname').val(data[1]);
   							 $('#gender').val(data[2]);
   							 $('#phone').val(data[3]);
   							 $('#birthday').val(data[4]);
   							 $('#D_test').val(data[5]);
   							 $('#D_issue').val(data[6]);
   							 $('#result').val(data[7]);

   					 });
   			 });


   	 </script>
 	</body>
 </html>
