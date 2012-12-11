function tilmeldOpen()	{
	document.getElementById("tilmeldMaster").style.display = "block"
	
	var body = document.body,
    html = document.documentElement;

	var height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );
                       
	document.getElementById("tilmeldMaster").style.height = height + "px"
};

function tilmeldClose()	{
	document.getElementById("tilmeldMaster").style.display = "none"
}

function tilmeldProg(ev)	{
		ev.stopPropagation();
}


//Validation

function validateForm()	{
	
	document.forms['form']['fname'].style.backgroundColor = "#fff";
	document.forms['form']['lname'].style.backgroundColor = "#fff";
	document.forms['form']['email'].style.backgroundColor = "#fff";
	document.forms['form']['addr'].style.backgroundColor = "#fff";
	document.forms['form']['zip'].style.backgroundColor = "#fff";
	
	var error = 0;
	var fname = document.forms['form']['fname'].value;
	var lname = document.forms['form']['lname'].value;
	var email = document.forms['form']['email'].value;
	var addr = document.forms['form']['addr'].value;
	var zip = document.forms['form']['zip'].value;
	var news = document.forms['form']['news'].checked;
	
	if(!(fname.match(/^[a-zA-ZæøåÆØÅ é]+$/))){
		error = 1;
		document.forms['form']['fname'].style.backgroundColor = "#f06565";
	}
	
	if(!(lname.match(/^[a-zA-ZæøåÆØÅ]+$/))){
		error = 1;
		document.forms['form']['lname'].style.backgroundColor = "#f06565";
	}
	
	if(!(email.match(/^\w+@[a-zA-Z_-]+?\.[a-zA-Z]{2,6}$/))){
		error = 1;
		document.forms['form']['email'].style.backgroundColor = "#f06565";
	}
	
	if(!(addr.match(/^[a-zA-ZæøåÆØÅ ]* [0-9]{1,30}( ?)[a-zA-ZæøåÆØÅ0-9\.]*$/))){
		error = 1;
		document.forms['form']['addr'].style.backgroundColor = "#f06565";
	}
	
	if(!(zip.match(/^\d{4}$/))){
		error = 1;
		document.forms['form']['zip'].style.backgroundColor = "#f06565";
	}
	
	if(error == 1){
		return false;
	}
	if(error == 0){
		return true;
	}
	
}