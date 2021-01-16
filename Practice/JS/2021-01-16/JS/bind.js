var ronak = {
    name:'Ronak',
    age:22,
    job:'Developer',
    presentation: function(style,timeOftheday){
        if (style === 'formal'){
            console.log('good '+timeOftheday +', Ladies and gentlemen! I\'m '+this.name+' I\'m a '+this.job+' and I\'m '+this.age+' years old.');
        }
        else if(style === 'friendly'){
            console.log('Hey! what\'s up? I\'m '+this.name+', I\m a '+this.job+' and I\'m ' +this.age+' years old. Have a nice '+timeOftheday + '.');                
        }
    }
}

var Rons={
    name:'Rons',
    age:23,
    job:'tester'
}

//ronak.presentation('formal','morninig');

//ronak.presentation.call(Rons,'friendly','afternoon');

var RonsFormal = ronak.presentation.bind(Rons,'formal');
RonsFormal('night');
RonsFormal('Evening');