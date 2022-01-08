
<?php

require_once('db.php');
if(isset($_POST['delete'])){
}
else {
  $id = $_GET['id'];

    $sql="DELETE FROM patients where id= $id";
    $query_run=mysqli_query($conn,$sql);

    if($query_run){
      echo '<script >alert("data has been deleted successfully!!")</script>';
      echo "<script>window.location = 'http://localhost/barcode'</script>";
    }

  else {
    echo '<script >alert("data has not been deleted successfully!!")</script>';

  }
}
