  <!----Manpreet kaur Buttar-8618964---->
<!-----part3(a)---->
<?php
    
    $sentence= "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

//echo $sentence;
    
$str_array= explode(" ", $sentence);
sort($str_array)."<br/>";
 $str_array = implode(" ",$str_array);
    echo $str_array;

   
    
    ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>
   
    
    
    <!-- Part 3(B) -->
    <?php
    function uniquechar($string){
        
        for($i = 0; $i < strlen($string) ; $i++)
        {
            for($j = $i + 1; $j < strlen($string); $j++)
            {
                if($string[$i] == $string[$j])
                {
                    return true;
                }
            }
        }
        return false;
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['firstname'])){
            
            $checkWords = uniquechar($_POST['firstname']); // checking the characters are duplicate or not 
            
            if($checkWords == true){
                echo '<p>Characters are duplicate</p>'; // if duplicate.
            }
            else{
                echo '<p>Characters are not duplicate</p>'; // if these are not duplicates.
            }
        }
            else{
                echo '<p>Please Enter Characters </p>'; 
            }      
        }
    ?>
    
<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>