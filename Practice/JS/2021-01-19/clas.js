class person1 {
    constructor(name, yearofbirth, job){
        this.name = name;
        this.yearofbirth = yearofbirth;
        this.job = job;
    }

    calculateAge(){
        var age = new Date().getFullYear() - this.yearofbirth;
        console.log(age);
    }
}

class athlet1 extends person1{
    constructor(name, yearofbirth, job, olygames, medals){
        super(name, yearofbirth, job);
        this.olygames = olygames;
        this.medals = medals;
    }

    wonmedals(){
        this.medals++;
        console.log(this.medals);
    }
}

const john = new athlet1('john', 1990, 'teacher','swimming',10);
john.calculateAge();
john.wonmedals();