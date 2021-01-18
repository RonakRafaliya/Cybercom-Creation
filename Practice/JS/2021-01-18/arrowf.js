const years = [1990,1965,1982,1937];


//ES5

var ages = years.map(function(el){
    return 2020 - el;
});

console.log(ages);

//ES6 
var ages = years.map(el => 2020 - el);
console.log(ages);

var ages = years.map((el, index) => {
    //more than one line of code.
});


//lexical this keyword.
/*
function Person(name){
    this.name = name;
}

Person.prototype.myfriends = (friends) => {
    
    var arr = friends.map(el => `${this.name} is friend with ${el}`);

    console.log(arr);
}

var friends = ['bob','jane','mark'];
new
Person('john').myfriends(friends);
*/


//Destructuring.
/*
function calcAge(year){
    const age = new Date().getFullYear() - year;
    return [age, 65 - age];
}

const [age2,retirement] = calcAge(1990);
console.log(age2);
console.log(retirement);
*/


//Araay in ES6
 A = {x:'abc'}

 for(x in A){
     console.log(A[x]);
 }
 console.log(A)
