
var mmass = prompt("enter mark mass in kg");
var mheight = prompt("enter mark height in meter");
var Markbmi = BMI(mmass,mheight)
console.log("mark BMI is " + Markbmi);

var jmass = prompt("enter john mass in kg");
var jheight = prompt("enter john height in meter");
var johnbmi = BMI(jmass,jheight)
console.log("John BMI is " + johnbmi);

var cmp = Markbmi > johnbmi;

console.log("Is Mak Bmi is higher than john's BMI...? " + cmp)


function BMI (a,b){
    var bmi= a/(b*b);
    return bmi;
}


