let fname=document.getElementById("Name");
let Lname=document.getElementById("LastName");
let userName=document.getElementById("txtUserName");
let email=document.getElementById("txtEmail");
let pwd=document.getElementById("txtPwd");
let conPwd=document.getElementById("txtConPwd");
let form=document.querySelector("form");

function validateInput(){



    if(fname.value.trim()===""){
        onError(fname," Emri eshte i zbrazet!");
     }else{
        if(!isValidName(fname.value.trim())){
            onError(fname,"Emri duhet te filloj me shkronje te madhe!");
        }else{
            onSuccess(fname);
        }
        
     }


    


     if(Lname.value.trim()===""){
        onError(lname,"Mbiemri eshte i zbrazet");
     }else{
        if(!isValidLname(Lname.value.trim())){
            onError(Lname,"Mbiemri duhet te filloj me shkronje te madhe!");
        }else{
            onSuccess(Lname);
        }
     }




    //check username is empty 
    if(userName.value.trim()===""){
       onError(userName,"Username eshte i zbrazet");
    }else{
        if(!isValidUsername(userName.value.trim())){
            onError(userName,"Username-i ka me pak se 8 karaktere");
        }else{
            onSuccess(userName);
        }
    }





    if(email.value.trim()===""){
        onError(email,"Email eshte i zbrazet");
    }else{
        if(!isValidEmail(email.value.trim())){
            onError(email,"Email eshte dhene gabim!");
        }else{
            onSuccess(email);
        }
    }

    //password
    if(pwd.value.trim()===""){
        onError(pwd,"Password eshte i zbrazet");
     }else{
        if(!isValidPassword(pwd.value.trim())){
            onError(pwd,"Password-i duhet te kete 3 numra ne fund!");
        }else{
            onSuccess(pwd);
        }
     }
     if(conPwd.value.trim()===""){
        onError(conPwd,"Password eshte i zbrazet");
     }else{
         if(pwd.value.trim()!==conPwd.value.trim()){
            onError(conPwd,"Password & Confirm password nuk perputhen!");
         }
         else
         onSuccess(conPwd);
     }
}

document.querySelector("button")
.addEventListener("click",(event)=>{
    event.preventDefault();
    validateInput();
});

function onSuccess(input){
    let parent=input.parentElement;
    let messageEle=parent.querySelector("small");
    messageEle.style.visibility="hidden"; 
    parent.classList.remove("error");
    parent.classList.add("success");  
}
function onError(input,message){
    let parent=input.parentElement;
    let messageEle=parent.querySelector("small");
    messageEle.style.visibility="visible";
    messageEle.innerText=message;  
    parent.classList.add("error");
    parent.classList.remove("success");

}

function isValidEmail(email){
   return /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
function isValidName(fname){
    return /[A-Z][a-z]*/.test(fname);
 }

 function isValidLname(Lname){
    return /[A-Z][a-z]*/.test(Lname);
 }

 function isValidUsername(userName){
    return /[a-z]{8,15}$/.test(userName);
 }

 function isValidPassword(pwd){
    return /(([^A-Z]*[a-z])\d{3})$/.test(pwd);
 }
