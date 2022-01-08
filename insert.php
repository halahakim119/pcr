<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => projectdata
        $conn = mysqli_connect("localhost", "root", "", "pcr_system");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 9 values from the form data(input)
   	    $name = $_REQUEST["name"];
        $gender = $_REQUEST["gender"];
     	$phone = $_REQUEST["phone"];
     	$date_of_birth = $_REQUEST["date_of_birth"];
     	$date_of_test = $_REQUEST["date_of_test"];
     	$date_of_issue = $_REQUEST["date_of_issue"];
     	$result = $_REQUEST["result"];

        // Performing insert query execution
        // here our table name is patient
        $sql = "INSERT INTO patients(name,gender,phone,date_of_birth,date_of_test,date_of_issue,result) VALUES('$name', '$gender','$phone',
	' $date_of_birth', '$date_of_test','$date_of_issue','$result')";

        if(mysqli_query($conn, $sql)){
            echo '<script >alert("New patient has been added successfully!!")</script>';
            echo "<script>window.location = 'http://localhost/barcode/'</script>";

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
