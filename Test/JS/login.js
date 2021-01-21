var array = [];
hasMatch = false;

function validData() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (localStorage.getItem('array')) {
        array = JSON.parse(localStorage.getItem('array'));
    }

    checkLogindata();

    function checkLogindata() {
        for (var index = 0; index < array.length; ++index) {

            var temp = array[index];

            if (temp.email == email && temp.password == password) 
            {
                hasMatch = true;
                break;
            }
        }
        if(hasMatch == true)
        {
            alert("Login successfull...");
            window.location.href = "dashboard.html";
        }
        else if(hasMatch == false)
        {
            alert("Email & password Invalid...");
        }
        
    }
    

};