
function validation(){

    let email = 'admin@gmail.com';
    let password = 123456;

    var Aemail = document.getElementById('remail').value;
    var Apassword = document.getElementById('rpassword').value;


    if(email === Aemail  && password.toString() === Apassword)
    {
        alert("Admin already Regisrerd");
        //debugger
        location.href = "login.html";
    }
    else{
        location.href = "dashboard.html";
    }
}