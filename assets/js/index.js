$(document).ready( function() {
    localHrefLogo();
    hoverCatMenu();
});

function localHrefLogo() {
    $('.landing_header_img').click( function() {
        location.href = "/";
    })
}

function hoverCatMenu() {
    $('.landing_header_categories').hover( function() {
        $('.landing_header_categories_ul').fadeIn();
    })
}