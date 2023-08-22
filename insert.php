<!DOCTYPE html>
<html>

<head>
    <title>Insert Page </title>
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        center {
            margin-top: 50px;
        }

        h3 {
            color: #007bff;
        }

        .result {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
        }
    </style> -->
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "project");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $p_id = $_REQUEST['p_id'];
             $branch = $_REQUEST['branch'];
             $year = $_REQUEST['year'];
             $email=$_REQUEST['email'];
             $mobile = $_REQUEST['mobile'];
        $clg_id = $_REQUEST['clg_id'];
        $toq=$_REQUEST['toq'];
        

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO reform VALUES ('$id','$name',
            '$p_id','$branch','$year','$email','$mobile','$clg_id','$toq')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

           
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