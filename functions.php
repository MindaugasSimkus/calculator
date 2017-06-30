<?php 
function print_symbols($result) {
	for ($i=1; $i <=$result ; $i++) { 
		echo "#";
	}
}

function oddeven($result) {

	if (($result % 2) == 1) { 
		echo "result is odd." ;
    }
  	if (($result % 2) == 0) { 
  		echo "result is even." ;
	}

}
function fivefour($arg1, $arg2, $result) {
	if ($arg1==5 && $arg2==4 && $result!==20) {
		echo "<br/>This was not a multiplication<br/>";
	} else {
		return true;
	}
}

?>