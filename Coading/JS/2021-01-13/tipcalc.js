var john = {
    fullname :'john smith',
    bills : [124,48,268,180,42],
    calctips : function() {
        this.tips = [];
        this.finalvalue = [];

        for(var i=0;i<this.bills.length;i++){
            
            var per;
            var bills=this.bills[i];
            if(bills <50)
            {
                per = .2;
            }
            else if(bills >=50 && bills <=200)
            {
                per = .15;
            }
            else
            {
                per = .1;
            }
            this.tips[i]=bills*per;
            this.finalvalue[i]=bills + (bills*per);
        }
    }
}

john.calctips();
console.log(john);