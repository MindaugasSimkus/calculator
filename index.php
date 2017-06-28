<?php 
  //require "php_paskaita4functions.php";
  //include "functions.php";
?>
<?php

	if(isset($_GET['arg1']) && $_GET['arg1'] !=null){
		switch($_GET['operation']){
			case "add":
				$result = $_GET['arg1'] + $_GET['arg2'];
			break;
			case "sub":
				$result = $_GET['arg1'] - $_GET['arg2'];
			break;
			case "mul":
				$result = $_GET['arg1'] * $_GET['arg2'];
			break;
			case "div":
				$result = $_GET['arg1'] / $_GET['arg2'];
			break;
			default:
		}
		
	} else {
		echo "No argument 1";
	}
 
	
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Calculator
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
     
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Let's count</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

        <form action="">
	        <input type="text" name="arg1" placeholder="Argument 1" value="<?php echo rand(1, 100);?>">
	        <select name = "operation">
			  <option value="add">Add</option>
			  <option value="sub">Subtract</option>
			  <option value="mul">Multiply</option>
			  <option value="div">Divide</option>
			</select>
			<input type="text" name="arg2" placeholder="Argument 2" value="<?php echo rand(1, 100); ?>">
			<input type="submit" value="Calculate!">
		</form>

		 <?php echo "<div style= 'font-size:100px'>" . $result . "</div>";
		 // nd i bootstrapa, su jacascript patikrint ar ideta arg1 jei ne nuspalvint raudonai ivedimo lauka "su form validation"

		 ?>
	
        
        </div>
      </div>
    </div>
  </body>
</html>

