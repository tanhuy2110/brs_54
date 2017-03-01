$(".menu-left-page").next('ul').toggle();

$(".menu-left-page").click(function(event) {
    $(this).next("ul").toggle(500);
});
