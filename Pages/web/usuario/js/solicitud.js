$(document).ready(function() {
    $('.toast').toast('show');

    $("#dia").change(function() {
        var day = new Date($("#dia").val()).getUTCDay();
        if ([6, 0].includes(day)) {
            document.getElementById("dia").value = '';
            $("#dia").addClass("is-invalid").removeClass("is-valid");
        }else{
            $("#dia").addClass("is-valid").removeClass("is-invalid");
        }
    });

    var date = new Date();
    date.setDate(date.getDate() + 3);
    var time = date.toISOString();
    var time_split = time.split("T");
    $("#dia").attr("value", time_split[0]);
    $("#dia").attr("min", time_split[0]);
})