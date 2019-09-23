$(document).ready( function() {
    headerBG();
});

function headerBG() {
    $(window).scroll(function(){
        if ($(window).scrollTop() > 1) {
            $('.landing_header_categories_ul').fadeOut();
        }
        else {
            $('.landing_header_categories_ul').fadeIn();
        }
    });
}

var dropMenuNum = 0;

function openDropMenu() {

    if(dropMenuNum == 0) {
        $('.drop_menu').slideDown('fast');
        $('.header_search_menu').addClass('selectedMenu');
        dropMenuNum = dropMenuNum + 1;
    } else {
        $('.drop_menu').slideUp('fast');
        $('.header_search_menu').removeClass('selectedMenu');
        dropMenuNum = 0;
    }

}

var searchBlock = 0;

function openSearchBlock() {
    if(searchBlock == 0) {
        $('.landing_header_search_div_search').css("width", "225px");
        $('.search_input').fadeIn('slow');
        searchBlock = searchBlock + 1;
    } else {
        $('.landing_header_search_div_search').css("width", "25px");
        $('.search_input').fadeOut();
        searchBlock = 0;
    }
}
