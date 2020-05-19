function submitForm(){
	var dr = document.getElementById('dr-selection').value;
	if (dr == document.getElementById('dr-selection')[0].value){
		alert("NO");
	    return false;
	}
	else{
	    return true;
	}
}

