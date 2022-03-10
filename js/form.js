let username=document.getElementById("username");
let password=document.getElementById("password");
let form=document.querySelector("form");



function validateInput(){
    //check username is empty 
    if(username.value.trim()==="" || password.value.trim()===""){
        alert(" Plotsoni te gjitha fushat!");
        return false;
     }else{
         return true;
     }
 
}

 function isValidUsername(username){
    return /[a-z]{8,15}$/.test(username);
  }
 
 
  function isValidPassword(password){
     return /(([^A-Z]*[a-z])\d{3})$/.test(password);
  }