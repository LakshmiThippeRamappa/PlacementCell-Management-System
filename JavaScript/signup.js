function validateForm() 
{
	let x = document.forms["myform"]["username"].value;
	if (x.trim() == "") {
			alert("UserName must be filled out");
    			return false;
			}
	let y = document.forms["myform"]["email"].value;
	if (y.trim() == ""){
			alert("Email must be filled out");
			return false;
			}
	
	let z = document.forms["myform"]["password"].value;
	if (z.trim() == ""){
			alert("Password must be filled out");
			return false;
			}

	let p = document.forms["myform"]["confirmpassword"].value;
	if (p.trim() == ""){
			alert("Confirmpassword must be filled out");
			return false;
			}
}
