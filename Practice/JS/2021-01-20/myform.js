var studentarr = [];
//var studentObject = [];



if(localStorage.getItem('array')) {
    studentarr = JSON.parse(localStorage.getItem('array'));
}

function studentObject(){
    var sname = document.getElementById('name').value;
    var semail = document.getElementById('email').value;
    var sDOB = document.getElementById('dob').value;

    var person = {
        name :sname,
        email : semail,
        dob : sDOB
    };

    if(localStorage.getItem('studentarr'))
    {
        arry = JSON.parse(localStorage.getItem('studentarr'));
    }

    studentarr.push(person);
    console.log(studentarr);

    localStorage.setItem("array", JSON.stringify(studentarr));
}

function deleteallItem(){
    
    window.localStorage.clear();
    alert("All the records will be deleted from local storage..!");
    console.log(localStorage);
}
