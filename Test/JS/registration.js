var array = [];
var hasMatch = false;

function adminRegister() {
    var sname = document.getElementById('name').value;
    var semail = document.getElementById('email').value;
    var spassword = document.getElementById('password').value;
    
    var admin = {
        name: sname,
        email: semail,
        password: spassword
    };

    if (localStorage.getItem('array')) {
        array = JSON.parse(localStorage.getItem('array'));
    }


    function check_user_register() {
        for (var index = 0; index < array.length; ++index) {

            var temp = array[index];

            if (temp.email == semail) {
                hasMatch = true;
                alert("admin already exist with same email");
                break;
            }
        }
    }
    check_user_register();
    if (hasMatch === false) {
        array.push(admin);
        console.log(array);
        localStorage.setItem("array", JSON.stringify(array));
        var ask = window.confirm("You are registerd successfully");
        if (ask) {
            window.location.href = "login.html";
        }
    }
    
};
