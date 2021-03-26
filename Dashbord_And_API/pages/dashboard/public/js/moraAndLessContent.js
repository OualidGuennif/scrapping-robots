$(document).ready(function () {
    $(".content").hide();
    $(".show_hide").on("click", function () {
        var txt = $(this).prev('.content').is(':visible') ? 'View more' : 'Reduce';
        $(this).text(txt);
        $(this).prev('.content').slideToggle(200);
    });
});