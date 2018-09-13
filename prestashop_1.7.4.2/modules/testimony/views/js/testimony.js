$(document).ready(function () {
    $(".testimonies .block_content p:not(:first)").each(function () {
        $(this).hide(); //cache les témoignages
    });
    $(".testimonies .block_content p:first").addClass("current");
    setTimeout("slide()", 3000);
 });
 
 function slide() {
    var prev = $(".testimonies .block_content p.current");
    if ($(".testimonies .block_content p.current").next().size() > 0) {
        var next = $(".testimonies .block_content p.current").next();
    } else {
        var next = $(".testimonies .block_content p:first");
    }
    prev.removeClass("current");
    next.addClass("current");
    prev.fadeOut();
    next.fadeIn();
    setTimeout("slide()", 3000);
 }