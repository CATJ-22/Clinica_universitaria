$(document).ready(function() {
    $('.toast').toast('show')
    if (screen.width < 768){
        $("#div-content").removeClass("row-cols-2").addClass("row-cols-1");
    }
});

$(window).resize(function() {
    if (screen.width < 768){
        $("#div-content").removeClass("row-cols-2").addClass("row-cols-1");
    }else{
        $("#div-content").removeClass("row-cols-1").addClass("row-cols-2");
    }
});

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});