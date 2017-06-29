<?php 
  //require "php_paskaita4functions.php";
  //include "functions.php";
?>
<?php
	$result = 0;
	$whereisdiv = 0;
	if(isset($_GET['arg1']) && $_GET['arg1'] !=null){
		switch($_GET['operation']){
			case "add":
				$result = $_GET['arg1'] + $_GET['arg2'];
				$whereisdiv = 0;
			break;
			case "sub":
				$result = $_GET['arg1'] - $_GET['arg2'];
				$whereisdiv = 0;
			break;
			case "mul":
				$result = $_GET['arg1'] * $_GET['arg2'];
				$whereisdiv = 0;
			break;
			case "div":
				if ($_GET['arg2'] !== "0") {
					$result = $_GET['arg1'] / $_GET['arg2'];
					$whereisdiv = 0;
				} else {
					$whereisdiv = 1;
					$result = "<div class ='jumbotron text-center'><div class='card  style='swidth: 20rem;'> <img class='card-img-top' src='https://allgeektomeblog.files.wordpress.com/2012/01/smg_king_leonidas.jpg' alt='Card image cap'><div class='card-block'> <h4 class='card-title'>Mr. Leonidas says</h4><p class='card-text' style='font-size: 20px;'>You can not divide by zero!!!</p></div></div></div>";
				}
			break;
			default:
		}
	} 
	if(isset($_GET['arg1']) && isset($_GET['arg2'])) {
		$_GET['arg1'] = $_GET['arg1'];
		$_GET['arg2'] = $_GET['arg2'];
	} else {
		$_GET['arg1'] = "";
		$_GET['arg2'] = "";
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Calculator
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <style>
    	div.img-responsive {
    		background: url(https://allgeektomeblog.files.wordpress.com/2012/01/smg_king_leonidas.jpg) no-repeat center;
    		background-size: cover;

    	}
    	div.img-responsive p {
    		padding-top: 300px;
    		padding-right: 200px;
		  	color: black;
		  	font-size: 50px;
		  	color: red;
    	}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Ask Leonidas for an answer</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
	        <form action="">
		        <input type="text" name="arg1" id="arg1" placeholder="Argument 1" value="<?php echo $_GET['arg1']; ?>">
		        <select name = "operation" id="calc_method">
				  <option value="add">Add</option>
				  <option value="sub">Subtract</option>
				  <option value="mul">Multiply</option>
				  <option value="div">Divide</option>
				</select>
				<input type="text" name="arg2" id="arg2" placeholder="Argument 2" value="<?php echo $_GET['arg2']; ?>">
				<input type="submit" value="Calculate!">
			</form>
			 <?php 

			 	if ($whereisdiv !== 1) {
			 		echo "<div class ='jumbotron text-center'><div class='card  style='width: 20rem;> <img class='card-img-top' src='http://static.fjcdn.com/pictures/Glass_39db05_221277.jpg' alt='Card image cap'><div class='card-block'> <h4 class='card-title'>Mr. Leonidas says</h4><p class='card-text' style='font-size: 20px;'>" . $result . "</p></div></div></div>";
			 	} else {
			 		echo $result;
			 	}
			 ?>
		    <script>
				function check_arg(argument){
					if (document.getElementById(argument).value == "") {
						document.getElementById(argument).classList.add("alert-danger");
					} else {
						document.getElementById(argument).classList.add("alert-success");
					}
				}
			</script>
			<script>
	        	check_arg("arg1");
	        	check_arg("arg2");
	        </script>
        </div>
      </div>
    </div>
  </body>
</html>