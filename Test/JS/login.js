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
        if(hasMatch == false)
        {
            hasMatch = false;
            alert("Invalid Email & Password....");
        }
        else
        {
            window.location.href = "dashboard.html";
        }
        
    }
    

};