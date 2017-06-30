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
	if (($arg1==5 && $arg2==4 && $result!==20) || ($arg1==4 && $arg2==5 && $result!==20)) {
		echo "<br/>This was not a multiplication<br/>";
	} else {
		return true;
	}
}
function fivefour2($arg1, $arg2, $result) {
	if (($arg1==5 && $arg2==4 && $result!==9) || ($arg1==4 && $arg2==5 && $result!==9)) {
		echo "<br/>This was not an addition<br/>";
	} else {
		return true;
	}
}
function satan($masyvas) {
	if (array_search("666",$masyvas)) {
		echo "<br>Satan<br/>";
	} else {
		return true;
	}
}

function cube ($arg1, $arg2) {
	if ($_GET['operation']=="mul") {
		for ($u=0; $u < $arg1; $u++) { 
			for ($i=0; $i < $arg2; $i++) { 
			echo "#";
			}
			echo "<br/>";
		}
		
	}
}
?>