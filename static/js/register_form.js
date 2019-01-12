var input_name=document.getElementsByClassName("input-name")[0];
var input_email=document.getElementsByClassName("input-email")[0];
var password=document.querySelectorAll(".input-password");
var button=document.getElementsByClassName("button")[0];

button.onclick=function(){
    var first_password=password[0].value; 
    var second_password=password[1].value;
    var final_email=input_email.value;
    var final_name=input_name.value;
    
    if(final_name == ""){
        alert("name field is empty!");  
        return false;  
    }
    else if(final_email== ""){
        alert("email field is empty!");  
        return false;  
    }
    else if(first_password==second_password){
        return true;
    }
    else{  
        alert("password must be same!");  
        return false;  
    }  
}
