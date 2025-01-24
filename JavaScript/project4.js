function validateForm() 
{
	let x = document.forms["myform"]["username"].value;
	if (x.trim() == "") {
			alert("username must be filled out");
    			return false;
			}
	else if(x.length<3){
			alert("username should be greater than 3 characters");
			return false;
				}
	else if(x.match(/[0-9]/)){
			alert("username should not contain digits");
			return false;
				}

	let y = document.forms["myform"]["password"].value;
	if (y.trim() == ""){
			alert("password must be filled out");
			return false;
			}
	else if(y.length<3){
			alert("Password length should be more than 3 characters!");
			return false;
				}
	else if(!(y.match(/[$#_!@-]/))){
			alert("password contain atleast one special character");
			return false;
		}
	else if (!(y.match(/[0-9]/))){
			alert("password contain atleast one digit");
			return false;
		}
}
