let username=document.getElementById("username");
let password=document.getElementById("password");
let form=document.querySelector("form");



function validateInput(){
    //check username is empty 
    if(username.value.trim()===""){
        onError(username," Username eshte i zbrazet!");
     }else{
        if(!isValidUsername(username.value.trim())){
            onError(username,"Username-i juaj ka me pak se 8 karaktere!");
        }else{
            onSuccess(username);
        }
        
     }
   
    //password
    if(password.value.trim()===""){
        onError(password,"Password eshte i zbrazet!");
     }else{
        if(!isValidPassword(password.value.trim())){
            onError(password,"Password-i duhet te kete 3 numra ne fund!");
        }else{
            onSuccess(password);
        }
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
 function isValidUsername(username){
    return /[a-z]{8,15}$/.test(username);
  }
 
 
  function isValidPassword(password){
     return /(([^A-Z]*[a-z])\d{3})$/.test(password);
  }