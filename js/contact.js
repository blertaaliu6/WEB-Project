function validateContact(){
    var inputs = document.getElementsByClassName("input-fields");

    if(inputs[0].value.length === 0 && inputs[1].value.length === 0 && inputs[2].value.length === 0){
        alert("Fushat nuk mund te jene te zbrazeta!");
        return false;
    }else if(inputs[0].value.length <= 4){
        alert("Emri nuk mund te jete me i shkurter se 4 karaktere!");
        return false;
    }else if(!(emailIsValid(inputs[1].value))){
        alert("Emaili eshte shenuar gabim!");
        return false;
    }else if(inputs[2].value.length <= 10){
        alert("Mesazhi nuk mund te jete me i shkurter se 10 karaktere!");
        return false;
    }else{
        return true;
    }
}
function emailIsValid(email){
    return /^[^\@[^\s@]+\.[^\s@]+$/.test(email);
}