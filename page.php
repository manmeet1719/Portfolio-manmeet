<html>
<?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => formtest
        $conn = mysqli_connect("localhost", "root", "", "formtest");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $fname =  $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $email = $_REQUEST['email'];
        $phoneno = $_REQUEST['phoneno'];
        $message = $_REQUEST['message'];
        
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO registration  VALUES ('','$fname', 
            '$lname','$email','$phoneno','$message')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$fname\n $lname\n "
                . "$email\n $phoneno\n $message");
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