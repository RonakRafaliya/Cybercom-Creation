
var john = {
    fullname :'john Smith',
    mass : 89,
    height : 1.95,
    BMIcalc : function(){
        this.bmi = this.mass / (this.height * this.height);
        //console.log(this.BMI);
        return this.bmi;
    }
}

var mike = {
    fullname :'mike millar',
    mass : 95,
    height : 1.75,
    BMIcalc : function(){
        this.bmi = this.mass / (this.height * this.height);
        //console.log(this.BMI);
        return this.bmi;
    }
}

john.BMIcalc();
mike.BMIcalc();

console.log(john,mike);

if(john.bmi>mike.bmi){
    console.log(john.fullname + " is higher BMI of " + john.bmi);
}
else if(mike.bmi > john.bmi){
    console.log(mike.fullname + " is higher BMI of " + mike.bmi);
}
else{
    console.log("Thay both have same BMI");
}