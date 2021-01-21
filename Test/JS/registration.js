let adminEmail = 'dmin@gmail.com';
let adminPassword = 'admin@123'

function validation(){
    var email = document.getElementById('remail').value;
    var password = document.getElementById('rpassword').value;

    if(email === adminEmail && password === adminPassword)
    {
        alert("Admin already Regisrerd");
        location.replace("login.html")
    }
    else{
        location.replace("dashboard.html");
    }
}