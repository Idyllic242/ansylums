<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="nav.css" />
	<title>Form</title>
<style>

h1{ 
font-family: "Audiowide", sans-serif;
font-size:60px;
color:white;
text-shadow:2px 2px cyan;
}

body{ 
font-family: Tahoma, Verdana, sans-serif;
font-size: 20px;
color:white;

}

</style>
</head>


<body background="https://wallpaperaccess.com/full/1472540.jpg">
  <nav>
    
    <a class="active" href="home.php">Home</a>
    <a href="submissionform.php">Submit here </a>
    <a href="connect.html">Contact</a>
    <a href="client_reviews.html">Client Feedback</a>
    <a href="services.html">About</a>
    <a href="login.php">LOGIN</a> 
    <a href="#"></a> 
      
<div class="animation start-home"></div>
      
    </nav>


    <?php
            $id = '';
            $name = '';
            $p_id = '';
            $branch='';
            $year = '';
            $email = '';
            $mobile = '';
            $clg_id = '';
            $toq='';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               // Store form data in variables
               $id = $_POST["id"];
               $name = $_POST["name"];
               $p_id = $_POST["p_id"];
               $branch = $_POST["branch"];
               $year = $_POST["year"];
               $email = $_POST["email"];
               $mobile = $_POST["mobile"];
               $clg_id = $_POST["clg_id"];
               $toq = $_POST["toq"];
            }
         ?>
         <h1 style="text-align:center;"> Welcome Folks!!<br> Get Yourselves Registered </h1>
         <form action="insert.php" method="post">


         



<Table border="0" align="right" cellspacing="2" cellpadding="10" width="75%">

<tr>
               <td>ID:</td>
               <!-- <input type="text" name="id" id="id" value="<?php echo $id; ?>" required> -->
               <td><input type="text" name="id" id="id" placeholder="Enter your Id" value="<?php echo $id; ?>" required></td>
          </tr>

<td>  Name </b></i></td>
<td><select>
<option selected>--Select--</option>
<option> Mr.</option>
<option>Ms.</option>
</select>
<input type="text" name="name" id="name" placeholder="Enter your name" value="<?php echo $name; ?>" required></td>
</tr>


<tr>
<td> Profile Id</td>
<td><input type="text" name="p_id" id="p_id" placeholder="Enter your profile Id" value="<?php echo $p_id; ?>" required></td>
</tr>




<tr>
<td>Branch</i></b></td>

<td><select name="branch">
<option selected>--Select--</option>
<option>AI</option>
<option>CSE</option>
<option>DS</option>
<option>IT</option>
<option>ME</option>
<option>EE</option>
<option>ECE</option>
<option>CE</option>
</select>
</tr>

<!-- 
<tr>
<td>Current Academic Year</i></b></td>
<td>
<input type="radio" name="year" value="1/ <?php echo $year; ?>">1<sup>st</sup>
<input type="radio" name="year" value"2/  <?php echo $year; ?>">2<sup>nd</sup>
<input type="radio" name="year" value"3/   <?php echo $year; ?>">3<sup>rd</sup>
<input type="radio" name="year" value"4/  <?php echo $year; ?>">4<sup>th</sup>
</td> -->

<tr>
<td>Current Academic Year</i><b></td>
<td><select name="year">
<option selected>--Select--</option>
<option>1-Year</option>
<option>2-year</option>
<option>3-Year</option>
<option>4-Year</option>
</td>
</tr>


<tr>
<td>Email Id</i></b></td>
<td> <input type="text" name="email" value="<?php echo $email; ?>"</td>
</tr>

<tr>
<td>Mobile Number</i></b></td>
<td> <input type="text" name="mobile" value="<?php echo $mobile; ?>"</td>
</tr>



<tr>
<td>College Id</i></b></td>
<td> <input type="text" name="clg_id" value="<?php echo $clg_id; ?>"</td>
</tr>

<tr>
<td>Type of Query</i><b></td>
<td><select name="toq">
<option selected>--Select--</option>
<option>Academics</option>
<option>Registration</option>
<option>Campus Environment</option>
<option>Examination</option>
<option>Rules and Regulation</option>
<option>Other</option></td>
</tr>


<!-- <select name="toq">
            <option value="" selected>--Select--</option>
            <option value="Academics">Academics</option>
            <option value="Registration">Registration</option>
            <option value="Campus Environment">Campus Environment</option>
            <option value="Examination">Examination</option>
            <option value="Rules and Regulation">Rules and Regulation</option>
            <option value="Other">Other</option>
        </select> -->


<tr>
<td></td>
<td><button>Submit</button>
	<!-- <script src="script.js"></script> -->
   <button onclick="location.href='select.php'">Show Data</button>
</tr>



</tr>

</table>	
</form>
</body>
</html>