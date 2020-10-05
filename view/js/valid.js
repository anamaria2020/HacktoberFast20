function checkforblank(){
    
    var errormessage = "";
    
    if(document.getElementById('username').value == ""){
       // alert('Porfavor introduza o seu nome');
        errormessage += "username \n";
//        document.getElementById('username').style.backgroundColor = "red";
        document.getElementById('username').style.borderColor = "red";
//        return false;
    }
    
    if(document.getElementById('password').value == ""){
//        alert('Porfavor introduza o seu nome');
        errormessage += "password \n";
        document.getElementById('password').style.borderColor = "red";
//        return false;
    }
    
    if(errormessage != ""){
        alert(errormessage);
        return false;
    }
    
    
}