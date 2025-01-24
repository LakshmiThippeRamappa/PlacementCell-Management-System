function validateForm() 
{
	let x = document.forms["myform"]["name"].value;
	if (x.trim() == "") {
			alert("Name must be filled out");
    			return false;
			}

	let y = document.forms["myform"]["company"].value;
	if (y.trim() == ""){
			alert("Company must be filled out");
			return false;
			}
	let z = document.forms["myform"]["phone"].value;
	if (z.trim() == ""){
			alert("Phone Number must be filled out");
			return false;
			}
	let p = document.forms["myform"]["email"].value;
	if (p.trim() == ""){
			alert("Email must be filled out");
			return false;
			}
	let q = document.forms["myform"]["message"].value;
	if (q.trim() == ""){
			alert("Message must be filled out");
			return false;
			}
	

}
