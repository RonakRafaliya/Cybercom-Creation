
function validate(){

    var name =document.myform.name;
    var password =document.myform.password;
    var address =document.myform.address;
    var game = document.myform.game;
    var gender = document.myform.gender;
    var age = document.myform.age;

    if(name.value.length <=0){
        document.getElementById('req_name').innerHTML = "*Name is required";
        return false;
    }

    if(password.value.length <=0){
        document.getElementById('req_pass').innerHTML = "*Password is required";
        return false;
    }
    if(address.value.length <=0){
        document.getElementById('req_add').innerHTML = "*Address is required.";
        return false;
    }
    var c = false;
    for(var i = 0; i<game.length;i++){
        if(game[i].checked){
            game.push(chackbox[i].value);
            c = true;
        }
    }
    if(c == false){
        document.getElementById('req_game').innerHTML = "*Pick atleast one Game";
        return false;
    }
    if(gender.value.length <=0){
        document.getElementById('req_gender').innerHTML = "*Gender is required.";
        return false;
    }
    if(age.value == "none"){
        document.getElementById('req_age').innerHTML = "*Age is required.";
        return false;
    }
    
    //return false;
    
}
function validatename(id){
    var name =document.getElementById(id);
    if(name.value.length >=0){
        document.getElementById('req_name').style.display="none";
    }
}
function validatepassword(id){
    var password = document.getElementById(id);
    if(password.value.length >=0){
        document.getElementById('req_pass').style.display="none";
    }
}
function validateadd(id){
    var address=document.getElementById(id);
    if(address.value.length >=0){
        document.getElementById('req_add').style.display="none";
    }
}
function validategame(id){
    var game = document.getElementById(id);
    var c=true;
    for(var i=0; i<game.length; i++){
        if(game[i].checked){
            c =false;
        }
    }
    if(c == true){
        document.getElementById('req_game').style.display="none";
    }
}
function validategender(id){
    var gender = document.getElementById(id);
    if(gender.value.length >= 0){
        document.getElementById('req_gender').style.display = "none";
    }
}
function myfun(){
    window.location.href ="taskform1.php";
    alert("form is reset...");
}