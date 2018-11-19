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

    $('#map').vectorMap({
        map: 'ch_merc',
        zoomOnScroll:false,
        backgroundColor:'#f3f6f9',
        regionStyle:{
            initial: {
                fill: 'black',
                "fill-opacity": 1,
                stroke: 'none',
                "stroke-width": 0,
                "stroke-opacity": 1
            },
            hover: {
                "fill-opacity": 0.8,
                cursor: 'pointer'
            },
            selected: {
                fill: 'yellow'
            },
            selectedHover: {
            }
        },
        regionLabelStyle:{
            initial: {
                'font-family': 'Verdana',
                'font-size': '10',
                'font-weight': 'normal',
                cursor: 'default',
                fill: 'white'
            },
            hover: {
                cursor: 'pointer'
            }
        },
        labels: {
            regions: [{
                    "name": "join_data",
                    "data": [
                        ["5", "AG"],
                        ["9", "AR"],
                        ["3311", "AI"],
                        ["3306", "BL"],
                        ["3308", "BS"],
                        ["3307", "BE"],
                        ["3304", "FR"],
                        ["2", "GE"],
                        ["12", "GL"],
                        ["13", "GR"],
                        ["3", "JU"],
                        ["6", "LU"],
                        ["4", "NE"],
                        ["7", "NW"],
                        ["3310", "OW"],
                        ["10", "SG"],
                        ["14", "SH"],
                        ["16", "SZ"],
                        ["3309", "SO"],
                        ["17", "TG"],
                        ["11", "TI"],
                        ["18", "UR"],
                        ["8", "VS"],
                        ["3305", "VD"],
                        ["20", "ZG"],
                        ["19", "ZH"]
                    ],
                }]
        }
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
