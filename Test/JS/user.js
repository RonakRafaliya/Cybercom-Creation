function logout() {
    sessionStorage.clear();
    window.localStorage.clear();
    window.location.href = "Login.html";
}

var user = [];


function userAdd(){
    var aName = document.getElementById('name').value;
    var aEmail = document.getElementById('email').value;
    var aPass = document.getElementById('password').value;
    var aDate = document.getElementById('dob').value;


    var userdata = {
        name :aName,
        email : aEmail,
        password : aPass,
        dob: aDate
    };

    if(localStorage.getItem('user'))
    {
        user = JSON.parse(localStorage.getItem('user'));
    }

    user.push(userdata);
    console.log(user);

    localStorage.setItem("user", JSON.stringify(user));
}

