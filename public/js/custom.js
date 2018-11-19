/******************************************
    File Name: custom.js
    Template Name: YourJob
    Created By: PSD Convert HTML Team
    Envato Profile: http://themeforest.net/user/psdconverthtml
    Website: https://psdconverthtml.com
    Version: 1.0
    Support: support@psdconverthtml.com
/******************************************/

(function($) {
    "use strict";

    /* ==============================================
     LOADMORE -->
     =============================================== */

    $(function () {
        $(".job-tab").slice(0,6).show();
            $("#loadMore").on('click', function (e) {
            e.preventDefault();
            $(".job-tab:hidden").slice(0, 2).slideDown();
            if ($(".job-tab:hidden").length == 0) {
                $("#load").fadeOut('slow');
            }
        });
    });
    
    /* ==============================================
     LOADER -->
     =============================================== */

    
   /* ==============================================
     FUN FACTS -->
     =============================================== */

    function count($this) {
        var current = parseInt($this.html(), 10);
        current = current + 1; /* Where 50 is increment */
        $this.html(++current);
        if (current > $this.data('count')) {
            $this.html($this.data('count'));
        } else {
            setTimeout(function() {
                count($this)
            }, 50);
        }
    }
    $(".stat-count").each(function() {
        $(this).data('count', parseInt($(this).html(), 10));
        $(this).html('0');
        count($(this));
    });
    
    /* ==============================================
     TOOLTIP -->
     =============================================== */

    $('[data-toggle="tooltip"]').tooltip()
    $('[data-toggle="popover"]').popover()

    /* ==============================================
     MENU -->
     =============================================== */

    $('.header .nav-tabs > li > a').hover(function() {
        $(this).tab('show');
    });

    $("#map-container AREA").mouseover(function(){
        var regionMap = '.'+$(this).attr('id')+'-map';
        var regionList = '.'+$(this).attr('id')+'-list';
        $(regionMap).css('display', 'inline');
    console.log(regionMap);
        // Check if a click event has occurred and only change the Region hover state accordingly
        if (! $('#practice-container ul').hasClass('selected')) {
            $(regionList).css('display', 'inline');
        }
    }).mouseout(function(){
        var regionMap = '.'+$(this).attr('id')+'-map';
        var regionList = '.'+$(this).attr('id')+'-list';

        // Check if a click event has occurred and only change the Region hover state accordingly
        if (! $(regionMap).hasClass('selected')) {
            $(regionMap).css('display', 'none');
        }

        // Check if a click event has occurred and only change the Region hover state accordingly
        if (! $('#practice-container ul').hasClass('selected')) {
            $(regionList).css('display', 'none');
        }
    });

    $("#map-container AREA").click(function(){
        $('#map-container img.region').removeClass('selected').css('display', 'none');
        $('#practice-container ul').removeClass('selected').css('display', 'none');

        var regionMap = '.'+$(this).attr('id')+'-map';
        var regionList = '.'+$(this).attr('id')+'-list';
        $(regionMap).addClass('selected').css('display', 'inline');
        $(regionList).addClass('selected').css('display', 'inline');
    });


    var allStates = $("svg .st0");

    allStates.on("click", function() {

        var regionMap = $(this).attr('id');
        console.log(regionMap);

    });

    /* ==============================================
    BACK TOP
    =============================================== */
      jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 1) {
          jQuery('.dmtop').css({bottom:"75px"});
        } else {
          jQuery('.dmtop').css({bottom:"-100px"});
        }
      });
      jQuery('.dmtop').click(function(){
        jQuery('html, body').animate({scrollTop: '0px'}, 800);
        return false;
      });

    /* ==============================================
    BACK TOP
    =============================================== */
      jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 1) {
          jQuery('.contactme').css({bottom:"75px"});
        } else {
          jQuery('.contactme').css({bottom:"-100px"});
        }
      });

})(jQuery);
