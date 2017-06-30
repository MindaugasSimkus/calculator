function check_arg(argument){
	if (document.getElementById(argument).value == "") {
		document.getElementById(argument).classList.add("alert-danger");
	} else {
		document.getElementById(argument).classList.add("alert-success");
	}
}