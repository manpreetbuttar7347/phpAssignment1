
  <!-----Manpreet kaur Buttar-8618964----->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $age = $_POST['age'];

if(!empty($_POST['firstname'])){
    
    $firstname = $_POST['firstname'];  
    
    echo '<p> First Name is ' .$firstname. '</p>'; // display data
}

else {
    
    echo '<p>Please Enter Firstname </p>'; 
}

if(!empty($_POST['lastname'])){
    
    $lastname = $_POST['lastname']; 
    
    echo '<p>Last Name is ' .$lastname. '</p>'; // display data
}

else
{
    echo '<p>Please Enter the last name</p>';
    
}  

if(!is_numeric($age))
{
    
    echo "<p> age should be numeric";
}

else 
{
    
    echo 'Age: '.$age; 
}

if(isset($_POST['newsletter']))
{
    $newsletter = $_POST['newsletter'];
    echo '<p>Selected newsletter is ' . $newsletter. '</p>';
    
    // display data
}
else
{
    echo '<p>Please select a button</p>'; 
}
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post"  action="a1p2.php">

	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname"  value ="<?php
        if(isset($_POST['firstname']))
        {
          echo $_POST['firstname'];  
        }?>
        "size="20" maxlength="40"></label></p>
        
	
	<p><label>Last Name: <input type="text" name="lastname" value ="<?php
        if(isset($_POST['lastname']))
        {
          echo $_POST['lastname'];  
        }?>
        "size="20" maxlength="40"></label></p>
        

	<p><label>Age: <input type="text" name="age"  value ="<?php
        if(isset($_POST['age']))
        {
          echo $_POST['age'];  
        }?>
        "size="20" maxlength="40"></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="Y"> Yes <input type="radio" name="newsletter" value="N"> No</p>

	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>

</body>
</html>