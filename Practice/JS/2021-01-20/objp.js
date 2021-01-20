let mytable = document.querySelector('#table');

class emp{
    constructor(name, age, email, phonnu) {
        this.name = name;
        this.age = age;
        this.email = email;
        this.phonnu = phonnu;
    }
}

const arr =new emp('Ronak', 22, 'abc@yahoo.in', 9724881681);
const arr1 =new emp('Abhay', 21, 'xyz@yahoo.in', 8733000395);
const arr2 =new emp('Aryan', 24, 'qwe@ymail.com', 9687430052);
const arr3 =new emp('Vijay', 25, 'ghi@ymail.com', 8544889966);

//Array.prototype.push.apply(arr,arr1);

let arrresult = [arr,arr1,arr2,arr3];

//console.log(arr);
//console.log(arr1);

console.log(arrresult);


//store all the object in a table form.

let headers = ['name','age','email','phonnu'];

let table = document.createElement('table');
let headerrow = document.createElement('tr');

headers.forEach(headertext => {
    let header = document.createElement('th');
    let textnode = document.createTextNode(headertext);
    header.appendChild(textnode);
    headerrow.appendChild(header);
});

table.appendChild(headerrow);

arrresult.forEach(emp => {
    let row = document.createElement('tr');

    Object.values(emp).forEach(text =>{
        let cell = document.createElement('td');
        let textnode = document.createTextNode(text);
        cell.appendChild(textnode);
        row.appendChild(cell);
    })
    table.append(row);
});

mytable.appendChild(table);

//store array and object in local storage.

//localStorage.setItem('all object',arrresult);
window.localStorage.setItem('object',JSON.stringify(arr));
window.localStorage.setItem('object1',JSON.stringify(arr1));
window.localStorage.setItem('object2',JSON.stringify(arr2));
window.localStorage.setItem('object',JSON.stringify(arr3));


//sort array according to it's name
/*
const employee = [
    {name:'Ronak', age:22, email:'abc@yahoo.in', phon:9724881681},
    {name:'Abhay', age:21, email:'xyz@yahoo.in', phon:8733000395},
    {name:'Aryan', age:24, emial:'qwe@ymail.com', phon:9687430052},
    {name:'Vijay', age:25, email:'ghi@ymail.com', phon:8544889966}
];

//for(var i=0; i<arrresult.length;i++);
//{
    function compare(a, b){
        let nameA = a.name.toUpperCase();
        let nameB = b.name.toUpperCase();

        let com = 0;
        if (nameA > nameB){
            com = 1;
        }
        else if(nameB > nameA){
            com = -1;
        }
        return com;
    }
//}

console.log(employee.sort(compare));

*/