/*$(document).on('click',function(){
    if( $('.navbar-collapse').is(':visible') ) {
        $('.navbar-collapse').collapse('hide');
    }
});*/


$(document).ready(function() {
    $("#carousel").carouFredSel({
        circular: false,
        infinite: true,
        auto 	: false,
        responsive : true,
        width   : "100%",
        height  : 220,
        scroll  : {
            duration : 400
        },
        swipe   : {
            onTouch : true,
            onMouse : true
        },
        prev	: {
            button	: "#btn-prev",
            key		: "left"
        },
        next	: {
            button	: "#btn-next",
            key		: "right"
        },
        pagination	: "#carousel-pagination"
    });
});