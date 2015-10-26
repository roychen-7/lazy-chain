function A() {
    this.events = [];
    this.action1 = function action1() {
        this.events.push(function() {
            console.log('Action One'); 
        });
        return this;
    } 
    
    this.action2 = function action2() {
        this.events.push(function() {
            console.log('Action Two'); 
        });
        return this;
    } 

    this.do = function() {
        this.events.forEach(function(fn) {
            fn();
        });
    }
}

var a = new A();

a.action1().action2().do();
