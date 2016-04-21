$(document).ready(function() {
//----------------------------------------------------------------------------------------------------------------------
    /*
     var origInnerNav = $('.inner-nav').css('display', '','margin-left', '','margin-right', '','float', '','width', '');
     var origTopNav =   $('.top-nav-bar>li').css('float', '', 'width', '');
     var origListItem = $('.list-item>li').css('width', '', 'float', '','display', '');

     var origInnerNav = $('.inner-nav').clone();
     var origTopNav =   $('.top-nav-bar>li').clone();
     var origListMenu = $('.list-menu>li').clone();

     var styleInnerNav = origInnerNav.css();
     var styleTopNav =  origTopNav.css();
     var styleListMenu = origListMenu.css();
     */
    //$(window).resize(function(){
    //});
    // Page specific scripts---------------------------------------------------------
    $(document).ready(function() {
        var path = window.location.pathname;
        if(path == '/EmpireSports/index.php') {
            $('.top-image>img').css({marginTop: '-32%'});
        }else if(path == '/EmpireSports/updates.php'){
            $('.top-image>img').css({marginTop: '-15%'});
        }else if(path == '/EmpireSports/upcoming.php'){
            $('.top-image>img').css({marginTop: '-22%'});
        }else if(path == '/EmpireSports/admin.php'){
            $('body').css({
                backgroundColor: 'darkslategray',
                color: 'white'
            });
            $('#event_input').css({
                display: 'none',
                color: 'black'
            });

        }
    });
    //-------------------------------------------------------------------------------

    if ($(window).width() > 720) {
        $('li').hover(function () {
            $(this).find('.list-menu').stop().slideToggle();
        });
        $('.inner-nav').show();
        if ($('.nav').height() > 75) {
            $('.inner-nav').css({display: 'none', width: '100%'});
            $('.top-nav-bar>li').css({float: 'none', width: '100%'});
            $('.list-menu>li').css({
                width: '100%',
                float: 'none',
                display: 'block',
                position: 'relative',
                zIndex: '999'
            });
            $('.resp-btn').css({display: 'inline-block', position: 'fixed', float: 'right', top: '10px', right: '0'});
        } else {

        }
    } else {
        $('.inner-nav').hide();
        $('.nav').css({background: 'rgba(0, 128, 128, 0.8)'});
        $('li').click(function () {
            $(this).find('.list-menu').stop().slideToggle();
        });
    }

    //---Dropdown Responsive--------------------------------------------------------------
    $(window).resize(function () {
        if ($(window).width() > 720) {
            $('.inner-nav').show();
            if ($('.nav').height() > 75) {
                $('.inner-nav').css({display: 'none', width: '100%'});
                $('.top-nav-bar>li').css({float: 'none', width: '100%'});
                $('.list-menu>li').css({
                    width: '100%',
                    float: 'none',
                    display: 'block',
                    position: 'relative',
                    zIndex: '999'
                });
                $('.resp-btn').css({
                    display: 'inline-block',
                    position: 'fixed',
                    float: 'right',
                    top: '10px',
                    right: '0'
                });
            } else {

            }
        } else {
            $('.nav').css({background: 'rgba(0, 128, 128, 0.8)'});
        }
    });
    //-------------------------------------------------------------------------------------------------

    //-----Navbar scroll animation----------------------------------------------------------------------
    $(window).scroll(function () {
        if ($(window).scrollTop() > 50) {
            $('.nav').css({borderBottom: 'none', background: 'rgba(0, 128, 128, 0.8)'});
            $('.top-nav-bar>li').css('background-color', 'Transparent');
            $('.top-nav-bar>li>ul>li').css('background-color', 'rgba(0, 128, 128, 0.8)');
            //$('.top-nav-bar>li>a').css({color: 'black', textShadow: 'none'});
            $('.top-nav-bar>li>a').hover(function () {
                $(this).css('color', 'lightgreen');
            }, function () {
                $(this).css('color', 'black');
            }).css({color: 'black', textShadow: 'none'});
            $('.top-nav-bar>li>ul>li>a').hover(function () {
                $(this).css('color', 'lightgreen');
            }, function () {
                $(this).css('color', 'black');
            }).css({color: 'black', textShadow: 'none'});
            $('.list-menu').css({marginTop: '8px'});

        } else {
            if ($(window).width() <= 720) {
                $('.nav').css({background: 'rgba(0, 128, 128, 0.8)'});
            } else {
                $('.nav').css({background: 'Transparent'});
                $('.top-nav-bar>li').css('background-color', 'Transparent');
                $('.top-nav-bar>li>a').css({color: 'white', textShadow: '1px 1px 1px black'});
                $('.top-nav-bar>li>ul>li').css('background-color', 'rgba(0, 128, 128, 0.8)');
                $('.top-nav-bar>li>a').hover(function () {
                    $(this).css('color', 'lightgreen');
                }, function () {
                    $(this).css('color', 'white');
                });
                $('.list-menu').css({marginTop: '0'});
            }
        }
    });
    //---------------------------------------------------------------------------------------------------------

    $('.pic-btn').hover(function () {
        $(this).stop().animate({
            borderWidth: '3px',
            borderStyle: 'solid',
            borderColor: 'rgba(0, 128, 128, 0.8)',
            color: 'rgba(0, 128, 128, 0.8)'
        });
        $(this).find('h2').animate({borderBottom: '1px', borderBottomStyle: 'solid', borderBottomColor: 'black'})
        $(this).find('div').stop().fadeIn();


    }, function () {
        $(this).stop().animate({
            borderWidth: '3px',
            borderStyle: 'solid',
            borderColor: 'white',
            color: 'white',
            backgroundColor: 'transparent'
        });
        $(this).find('div').stop().fadeOut();
    });

    $('.resp-btn').click(function () {
        $('.inner-nav').slideToggle();
    });

    //-------------------------------------Section hovers------------------------------------
    $('.phrase-sec').hover(function () {
        $(this).find('#plus').stop().animate({
            color: 'red',
            borderWidth: '1px',
            borderStyle: 'solid',
            borderColor: 'black'
        }, function () {
            $('#stay-active-bio').stop().show();
            $('#phrase-clean').find('#tint').stop().hide();
            $('#phrase-clean').find('#quote').stop().hide();
        });
        $(this).find('#tint').stop().animate({
            color: 'blue',
            borderWidth: '1px',
            borderStyle: 'solid',
            borderColor: 'black'
        }, function () {
            $('#stay-clean-bio').stop().show();
            $('#phrase-pure').find('#my-heart').stop().hide();
            $('#phrase-pure').find('#quote').stop().hide();
        });
        $(this).find('#my-heart').stop().animate({
            color: '#ff4da6',
            borderWidth: '1px',
            borderStyle: 'solid',
            borderColor: 'black'
        }, function () {
            $('#stay-pure-bio').stop().show();
            $('#phrase-clean').find('#tint').stop().hide();
            $('#phrase-clean').find('#quote').stop().hide();
        });
        $(this).stop().animate({backgroundColor: 'black', color: 'white'});
    }, function () {
        $(this).stop().animate({color: 'black', backgroundColor: ''});
        $('#stay-active-bio').stop().hide();
        $('#stay-clean-bio').stop().hide();
        $('#stay-pure-bio').stop().hide();
        $('#phrase-active').find('#plus').stop().show();
        $('#phrase-active').find('#quote').stop().show();
        $('#phrase-clean').find('#tint').stop().show();
        $('#phrase-clean').find('#quote').stop().show();
        $('#phrase-pure').find('#my-heart').stop().show();
        $('#phrase-pure').find('#quote').stop().show();
    });
    //------------------------------------------------------------------------------------------------------

    // Image text slider-----------------------------------
    $('.slider-head1')
        .animate({left: '-=100%'}, 100);
    $('.slide-head2')
        .animate({left: '-=100%'}, 1000)
        .animate({left: '-=100%'}, 2000);
    $('.slide-head3')
        .animate({left: '-=100%'}, 1000)
        .animate({left: '-=100%'}, 1000)
        .animate({left: '-=100%'}, 2000);
    $('.slide-head4')
        .animate({left: '-=100%'}, 1000)
        .animate({left: '-=100%'}, 1000)
        .animate({left: '-=100%'}, 1000)
        .animate({left: '-=100%'}, 2000);
    //-------------------------------------------------------
});

var new_event = function () {
    $('#event_input').toggle();
}