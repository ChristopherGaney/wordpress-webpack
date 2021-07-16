
// Add scripts after jquery has loaded
$( document ).ready(function() {
    console.log( "ready!" );
 
     /*****************************************************************************
        Debounce
    *****************************************************************************/
        function debounce(func, wait, immediate) {
            var timeout;
                return function() {
                    var context = this, args = arguments;
                    var later = function() {
                        timeout = null;
                        if (!immediate) func.apply(context, args);
                    };
                    var callNow = immediate && !timeout;
                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                    if (callNow) func.apply(context, args);
                };
            };
    /*****************************************************************************
        End Debounce
    *****************************************************************************/


    /*****************************************************************************
        Alert Subscribers when the screenwidth changes 
    *****************************************************************************/
    var screenWidth = (function() {
        var callDeBounce = debounce(function() {
            screenWidth.resizeWidth();
        }, 250);
        
        window.onresize = function() {
            callDeBounce();
        };
        /* This Subscriber function will call any listed functions
        that need to know about the resize event*/
        var alertSubscribers = function(w) {
            /* add subscribers here
                i.e callThisFunction.resize();  */
        }
        
        return {
                getWidth: function() {
                    return window.innerWidth;
                },
                resizeWidth: function() {
                    alertSubscribers(window.innerWidth);
                }
            };
    })(); 
    
    /*****************************************************************************
        End Screenwidths
    *****************************************************************************/  


    /*****************************************************************************
        Ajax function set up and already talking to a file on the server 
    *****************************************************************************/
    
    var runAjax = function(s, action, callback) {
        $.ajax({
            url: url_for_ajax.ajax_url,
            data: {
                "action": action,
                "security": url_for_ajax.ajax_nonce,
                "search": s
            },
            success: function(response) {
                 if (response.success) {
                    callback(response);
                } else {
                    alert('error');
                } 
            }
        });
    };
    /* Test Ajax with funtions below */
        var handleAjax = function(res) {
            console.log('running');
           console.log(res.data.package);
        };
        var doAjax = (function() {
            // TURN THIS OFF IF NOT BEING USED!!!!
            runAjax('request-data', 'ajaxPoint', handleAjax); 
        })(); 
    /*****************************************************************************
        End Ajax
    *****************************************************************************/

    /*****************************************************************************
        Site Wide Search Slider
    *****************************************************************************/

    // Search overlay slider functions (header)
        var searchSlider = (function() {
            var isOpen = false;
            var isMedOpen = false;
            var isSmallOpen = false;
            return {
                searchClick: function(e) {
                        var overlay = $('#overlay_slider');
                        var focus = overlay.find('form .text_input');
                        var top_right = $('#slider_overlay');
                        top_right.addClass('slider_showing');
                        overlay.addClass('show_slider');
                        setTimeout(function() { focus.focus(); }, 1000);
                        isOpen = true;
                    },
                exitClick: function(e) {
                    var overlay = $('#overlay_slider');
                    var top_right = $('#slider_overlay');
                    top_right.removeClass('slider_showing');
                    overlay.removeClass('show_slider');
                    $('#suggest_search').html('');
                    isOpen = false;
                    },
                // close any open slider on a body click
                closeClick: function () {
                        if(isOpen === true) {
                            searchSlider.exitClick();
                            isOpen = false;
                        }
                        if(isMedOpen === true) {
                            searchSlider.mediumExitClick();
                            isMedOpen = false;
                        }
                        if(isSmallOpen === true) {
                            searchSlider.smallExitClick();
                            isSmallOpen = false;
                        } 
                    }                   
                };
        })();
        // Listeners for overlay slider
        $('#exit_overlay').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            searchSlider.exitClick();
        });
        $('#searchIcon').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('clickeeeeeeddkdkk');
            searchSlider.searchClick();
        });
        // Submit Slider on wide screen
        $('#submit_slider').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $('#searchform').submit();
        });
        

    /*****************************************************************************
        End Site Wide Search Slider
    *****************************************************************************/


    

     /*****************************************************************************
        Owl Sliders
    *****************************************************************************/

    // Owl Slider on Home Page Hero
       // var owl_1 = $('.owl_home_hero');
       //      owl_1.owlCarousel({
       //              dots: true,
       //              items: 1,
       //              dotsData: false,
       //              loop: true,
       //              nav: true,
       //              margin: 0,
       //              autoWidth: false,
       //              singleItem: true,
       //              smartSpeed: 700,
       //              autoplay: true,
       //              autoplayTimeout: 10000
                    
       //  });

        // This is necessary when using dotsData: true
        /*$('.owl_1 .owl-dot').click(function() {
            owl_1.trigger('to.owl.carousel', [$(this).index(), 700]);
        }); */

    // End Owl Slider on Home Page Hero

    /*****************************************************************************
        End Owl Sliders
    *****************************************************************************/


    /*****************************************************************************
        Toggle Off Canvas
    *****************************************************************************/
        var offCanvas = (function() {
            var active = false;
            $('#toggle').click(function(e) {
                if(!active) {
                    $('#toggle').addClass('active');
                    active = true;
                }
                else {
                    $('#toggle').removeClass('active');
                    $('#toggle').addClass('not-active');
                    setTimeout(function() {
                        $('#toggle').removeClass('not-active');
                    },500);
                    active = false;
                }
            });
        })();
    /*****************************************************************************
        End Toggle Off Canvas
    *****************************************************************************/
   

    /*****************************************************************************
        Main Nav Dropdown for header-w-dropdown.php
    *****************************************************************************/

    var navDropdown = (function() {
        var active = '';
        var list = '';
        var nav = $('#nav_down');
        var search = $('#search_down');
        var bar = $('#menu-search_icon');
        var navdown = false;
        var t = false;
        var r = false;
        var d = false;
    
        var int;

        var timer = function(dur, p) {
            var dropper = function() {
                var el;
                if(!t) {
                    if(active !== '') {
                        $('#' + active).children().removeClass('one').removeClass('active');
                    }
                    if(p === 's') {
                        el = $('#search_down');
                    }
                    else {
                        el = $('#nav_down');
                    }
                    el.find('.one').removeClass('one');
                    el.removeClass('down');
                    navdown = false;
                    clearTimeout(int);
                    r = false;
                }
            };

            if(!r) {
                int = setInterval(dropper, dur);
                r = true;
            }
        };
        $('#submit_btn').on('click', function(e) {
            e.preventDefault();
            $('#searchform').submit();
        });
        
        $('body').click(function(){
            d = false;
            timer(200, 's');
            $('#navi').removeClass('hiding');
        });
        
        $('#nav_over').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
        });
        $('#search_icon').on('click', function(e) {
            var el = $(this).children();
            var menu;

            if(!d) {
                e.stopPropagation();
                if(navdown) {
                    nav.removeClass('down');
                    navdown = false;
                    if(active !== '') {
                        $('#' + active).children().removeClass('one').removeClass('active');
                    }
                }
                search.addClass('down');
                    
                d = true;   
                    
                el.addClass('active');
                    
                active = $(this).attr('id');
                
                if(list !== '') {
                    $('#menu-' + list).removeClass('one').removeClass('showing');
                }
                list = active;
                menu = $('#menu-' + active);
                menu.addClass('showing');
                setTimeout(function() {
                    menu.addClass('one');
                }, 100);
                $('#search_input').focus();
                $('#navi').addClass('hiding');
            }
            else {
                $('body').trigger('click');
            }
            
        });
        

        $('.nav li').mouseenter(function(e) {
            var txt = $(this).attr('class').split(' ')[0];
            var menu;
            var el = $(this).children();
            t = true;
            
            if(!navdown) {
                nav.addClass('down');
                navdown = true;
            }

            if(active !== '') {
                $('#' + active).children().removeClass('one').removeClass('active');
            }
            el.addClass('active');
            setTimeout(function() {
                el.addClass('one');
            }, 100);
            active = $(this).attr('id');
            
            if(list !== '') {
                $('#menu-' + list).removeClass('one').removeClass('showing');
            }

            list = txt.toLowerCase();
            menu = $('#menu-' + list);
            menu.addClass('showing');
            setTimeout(function() {
                menu.addClass('one');
            }, 100);
        }).mouseleave(function() {
                t = false;
                timer(1500, 'n');
        });
        nav.mouseenter(function() {
            t = true;
        }).mouseleave(function() {
            t = false;
            timer(1500, 'n');
        });

        return {
            closeSearch: function() {
                if(d) {
                   $('body').trigger('click'); 
                }
            }
        };

    })();

    /*****************************************************************************
        End Main Nav Dropdown
    *****************************************************************************/


    /*****************************************************************************
        Changes 'Back' to 'Menu Title' in off canvas menu
    *****************************************************************************/
    
    $('.js-drilldown-back a').each(function(){
          var backTxt = $(this).parent().closest('.is-drilldown-submenu-parent').find('> a').text();
          $(this).text(backTxt);
        });
    /*****************************************************************************
         End Change 'Back' to 'Menu Title' in off canvas menu
    *****************************************************************************/


 // give hero image a moment to load
        setTimeout(function() {
            $('.owl-carousel, .header_image').addClass('loaded');

        },300);

}); // End jquery document ready


/////////////////////////////////