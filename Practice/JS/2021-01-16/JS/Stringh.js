let firstname = 'Ronak';
let lastname = 'Rafaliya';
const yearOfbirth = 1990;

function calcAge(year){
    return 2020 - year;
}

//ES5

console.log('this is '+firstname+' '+lastname+'. he was born in '+yearOfbirth+'. Today he is '+calcAge(yearOfbirth)+' years old.');


//ES6

console.log(`This is ${firstname} ${lastname}. he was born in ${yearOfbirth}. Today he is ${calcAge(yearOfbirth)} years old.`)