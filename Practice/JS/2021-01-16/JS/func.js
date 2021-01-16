var year = [1990,1965,1937,2005,1998];

function arrarCalc(ab ,fn){
    var arrRes = [];
    for(var i=0;i<ab.length;i++)
    {
        arrRes.push(fn(ab[i]));
    }
    return arrRes;
}

function calculateAge(el){
    return 2016-el;
}

function isFullage(el){
    return el >=18;
}
var age = arrarCalc(year,calculateAge);
var fullage = arrarCalc(age,isFullage);

console.log(age);
console.log(fullage);