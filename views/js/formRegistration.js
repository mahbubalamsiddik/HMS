function isValid(){
        var id = document.forms['regform']['id'].value;
        var name = document.forms['regform']['name'].value;
        var email = document.forms['regform']['email'].value;
        var user_name = document.forms['regform']['user_name'].value;
        var password = document.forms['regform']['password'].value;
           var gender = document.forms['regform']['gender'].value;
           var address = document.forms['regform']['address'].value;
    var date = document.forms['regform']['dateOfBirth'].value;
  
    var role = document.forms['regform']['role'].value;
   
   
   
    if(id === ""){
    document.getElementById('idjs').innerHTML = "*id is empty";
    
    }
    if(name === ""){
    document.getElementById('namejs').innerHTML = "*Name is empty";
    
    }
    if(email === ""){
        document.getElementById('emailjs').innerHTML = "*email is empty";
        
        }
        if(user_name === ""){
            document.getElementById('user_namejs').innerHTML = "*username is empty";
            
            }
            if(password === ""){
                document.getElementById('passwordjs').innerHTML = "*password is empty";
                
                }
    if(gender === ""){
    document.getElementById('genderjs').innerHTML = "*Select  gender";
    
    }
    if(address === ""){
        document.getElementById('addressjs').innerHTML = "*address is empty";
        
        }
    if(date === ""){
    document.getElementById('datejs').innerHTML = "*choose date";
    
    }
    
    if(role === ""){
    document.getElementById('rolejs').innerHTML = "*role is empty";
    return false;
    }
    
    else{
        return true;
    }
    
}