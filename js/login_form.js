var input_email=document.getElementsByClassName("input-email")[0];
var password=document.querySelectorAll(".input-password");
var button=document.getElementsByClassName("b")[0];

button.onclick=function(){
    var first_password=password[0].value; 
    //var second_password=password[1].value;
    var final_email=input_email.value;
    //var final_name=input_name.value;
    
    if(final_email == ""){
        alert("email field is empty!");  
        return false;  
    }
    else if(first_password== ""){
        alert("password field is empty!");  
        return false;  
    }
    else{ 
        return true;  
    }  
}
