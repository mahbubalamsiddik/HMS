function isValid(){
	var user_name = document.forms['loginform']['user_name'].value;
    var password = document.forms['loginform']['password'].value;

    if(user_name === ""){
    document.getElementById('user_namejs').innerHTML = "*username is empty";
    
    }
    if(password === ""){
    document.getElementById('passwordjs').innerHTML = "*password is empty";
     return false;
    }
    else{
    	return true;
    }
}