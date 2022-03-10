let fname=document.getElementById("Name");
let Lname=document.getElementById("LastName");
let userName=document.getElementById("txtUserName");
let email=document.getElementById("txtEmail");
let pwd=document.getElementById("txtPwd");
let conPwd=document.getElementById("txtConPwd");
let form=document.querySelector("form");

function validateInput(){
    if(fname.value.trim()==="" || Lname.value.trim()==="" || userName.value.trim()==="" || email.value.trim()==="" || pwd.value.trim()==="" || conPwd.value.trim()===""){
        alert("Plotesoni te gjitha fushatt");
        return false;
    }else if(!isValidName(fname.value.trim())){
        alert("Emri duhet te filloj me shkronje te madhe!");
        return false;
    }else if(!isValidLname(Lname.value.trim())){
        alert("Mbiemri duhet te filloj me shkronje te madhe!");
        return false;
    }else if(!isValidUsername(userName.value.trim())) {
        alert("Username-i ka me pak se 8 karaktere");
        return false;
    }else if(!isValidEmail(email.value.trim())){
        alert("Email eshte dhene gabim!");
        return false;
    }else  if(!isValidPassword(pwd.value.trim())){
        alert("Password-i duhet te kete 3 numra ne fund!");
        return false;
    }else if(pwd.value.trim()!==conPwd.value.trim()){
        alert("Password & Confirm password nuk perputhen!");
        return false;
    }else{
        return true;
    }
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
