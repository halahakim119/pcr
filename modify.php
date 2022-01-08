
<?php

require_once('db.php');
// (note:this if case for button update data)    if(isset($_POST['updatedata']))  {
      $id = $_GET['id'];
      $name = $_POST['name'];
      $gender = $_POST['gender'];
      $phone = $_POST['phone'];
      $date_of_birth = $_POST['date_of_birth'];
      $date_of_test = $_POST['date_of_test'];
      $date_of_issue = $_POST['date_of_issue'];
      $result = $_POST['result'];

      $sql="UPDATE patients SET
      name='$name',
      gender='$gender',
      phone='$phone',
      date_of_birth='$date_of_birth',
      date_of_test='$date_of_test',
      date_of_issue='$date_of_issue',
      result='$result'
      WHERE id= $id";

      if($conn->query($sql) === TRUE){
        echo '<script >alert("data has been modified successfully!!")</script>';
        echo "<script>window.location = 'http://localhost/barcode'</script>";
      }
      else{
        echo "data has not been modified";
      }
