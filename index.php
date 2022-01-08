<?php
	session_start();
	// Redirect the user to login page if he is not logged in.
	if(!isset($_SESSION['loggedIn'])){
		header('Location: login.php');
		exit();
	}
	
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');
?>
  <body>
<?php
	require 'inc/navigation.php';
?>
    <!-- Page Content -->
    <div class="container-fluid">
	  <div class="row">
		
		 <div class="col-lg-10">
			
			  
			
			 
				<div class="card card-outline-secondary my-4">
				  <div class="card-header">
				  <button id="searchTablesRefresh" name="searchTablesRefresh" class="btn btn-warning float-right btn-sm">Refresh</button> 
			
				  <button style= "margin-right: 20px;" id="searchTablesRefresh" name="searchTablesRefresh" class="btn btn-warning float-right btn-sm ">  <a style="color:white; text-decoration: none;"href="addpatient.php">Add</a>  </button></div>
				  <div class="card-body">										
				
  
					<!-- Tab panes -->
					<div class="tab-content">
						<div id="itemSearchTab" class="container-fluid tab-pane active">
						  <br>
						  <p>Use the grid below to search all details of patients</p>
						  <!-- <a href="#" class="itemDetailsHover" data-toggle="popover" id="10">wwwee</a> -->
							<div class="table-responsive" id="itemDetailsTableDiv"></div>
						</div>
						
					</div>
				  </div> 
				</div>
			
			 
			</div>
		 </div>
	  </div>
    </div>
<?php
	require 'inc/footer.php';
?>
  </body>
</html>
