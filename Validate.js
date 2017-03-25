var pass_1 = ""; //declare variables
var pass_2 = "";

function checkPwd(form) 
{
	
	pass_1 = document.getElementById('pwd').value; //insert the values the user has inputted into the variables
	pass_2 = document.getElementById('pwd2').value;
    
    if(pass_1 != pass_2){ //compare the 2 passwords inputted by the user
        alert("Passwords do not match!"); //if they dont match throw and error and stop the form from posting the data
        return false;
    }
    else{
        return true;//if  the passwords are the same, allow the form to post the data to the database
    }
}