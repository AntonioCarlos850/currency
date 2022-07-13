function scroll(elm, width){
    elm.animate({
        scrollLeft: width
    }, (1000 * 60 * 7), 'linear', function () {
        elm.scrollLeft(0)
        scroll(elm, width)
    });
}

$(document).ready(function () {
    let elm = $("#nav-currency")
    let width = elm[0].scrollWidth
    elm.scrollLeft(0)
    scroll(elm, width)
})