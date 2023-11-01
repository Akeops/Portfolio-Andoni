$(window).scroll(function() {
    var top_of_element = $("#temoignages").offset().top;
    var bottom_of_element = $("#temoignages").offset().top + $("#temoignages").outerHeight();
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    var top_of_screen = $(window).scrollTop();
    if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
        $(".temoignage1").addClass("animationTemoignage1");
        $(".temoignage2").addClass("animationTemoignage2");
        $(".temoignage3").addClass("animationTemoignage3");
    }
});

console.log("Bonjour, monde!");