var array = [];
hasMatch = false;
var temp;

function validData() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (localStorage.getItem('array')) {
        array = JSON.parse(localStorage.getItem('array'));
    }

    function checkLogindata() {
        for (var index = 0; index < array.length; ++index) 
        {
            if (array[index].email == email && array[index].password == password) 
            {
                hasMatch = true;
                break;
            }
        }
    }
    checkLogindata();
    
    if(hasMatch === true)
    {   debugger
        alert("Sucessfully login...")
        //sessionStorage.setItem("name", temp.name);
        window.location.href = "dashboard.html";
        
    }
    else
    {
        alert("Invalid Email & Password....");
    }
        

};