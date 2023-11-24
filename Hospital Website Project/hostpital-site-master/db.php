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
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "appointment");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        $patientName =  $_REQUEST['patientName'];
        $gender = $_REQUEST['gender'];
        // $contactNo =  $_REQUEST['contactNo'];
        $email = $_REQUEST['email'];
        $dob = $_REQUEST['dob'];
        $hospitalLocation = $_REQUEST['hospitalLocation'];
        $doa = $_REQUEST['doa'];
        $time = $_REQUEST['time'];
        $department = $_REQUEST['department'];
        
        $sqlquery = "INSERT INTO appointment VALUES($patientName,$gender,$email,$dob,$hospitalLocation,$doa,$time,$department)";
         
        if(mysqli_query($conn, $sqlquery)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
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