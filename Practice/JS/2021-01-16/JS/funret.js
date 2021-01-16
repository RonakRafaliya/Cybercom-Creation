/*function ronak(){
    var score =Math.floor(Math.random()*10);
    console.log(score);
    console.log(score >=6);
}
ronak();

(function(a){
    var score =Math.floor(Math.random()*20);
    console.log(score);
    console.log(score+a); 
    console.log(score >=8);
})(4);
*/

function retirement(retirementAge){
    var a = 'years left';
    return function(yearofbirth){
        var age = 2021-yearofbirth;
        console.log((retirementAge-age) + a);
    }
}

var retirementUS = retirement(53)(1998);