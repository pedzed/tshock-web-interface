var app = new function() {
    var initFoundation = function() {
        $(document).foundation();
    }
    
    var enhanceDesign = function() {
        var stretchSidebarHeight = function() {
            var sidebar = $('#sidebar');
            $(sidebar).height($(document).height());
        }
        
        var __construct = function() {
            // stretchSidebarHeight();
        }()
    }
    
    return {
        init: function() {
            initFoundation();
        },
        enhanceDesign: function() {
            enhanceDesign();
        }
    }
}

app.init();
app.enhanceDesign();
