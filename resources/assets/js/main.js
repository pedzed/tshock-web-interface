var app = new function() {
    var test = function() {
        console.log("Initialized app.");
    }
    
    return {
        init: function() {
            this.test();
        }
    }
}

app.init();
