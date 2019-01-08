(function($) {
    'use strict';

    var getRandomArbitrary = function() {
        return Math.round(Math.random() * 100);
    };

    var visits = [
        [0, getRandomArbitrary()],
        [1, getRandomArbitrary()],
        [2, getRandomArbitrary()],
        [3, getRandomArbitrary()],
        [4, getRandomArbitrary()],
        [5, getRandomArbitrary()],
        [6, getRandomArbitrary()],
        [7, getRandomArbitrary()],
        [8, getRandomArbitrary()]
    ];
    var visits2 = [
        [0, getRandomArbitrary()],
        [1, getRandomArbitrary()],
        [2, getRandomArbitrary()],
        [3, getRandomArbitrary()],
        [4, getRandomArbitrary()],
        [5, getRandomArbitrary()],
        [6, getRandomArbitrary()],
        [7, getRandomArbitrary()],
        [8, getRandomArbitrary()],
        [9, getRandomArbitrary()],
        [10, getRandomArbitrary()],
        [11, getRandomArbitrary()],
        [12, getRandomArbitrary()],
        [13, getRandomArbitrary()],
        [14, getRandomArbitrary()],
        [15, getRandomArbitrary()],
        [16, getRandomArbitrary()],
        [17, getRandomArbitrary()],
        [18, getRandomArbitrary()],
        [19, getRandomArbitrary()],
        [20, getRandomArbitrary()]
    ];

    var lineData = [{
        data: visits2,
        color: $.constants.success
    }];

    /******** Line chart widget ********/
    /*jshint -W030 */
    $.plot($('.dashboard-line'), lineData, {
        series: {
            lines: {
                show: false,
                lineWidth: 0
            },
            splines: {
                show: true,
                lineWidth: 1,
                fill: 0.5
            }
        },
        grid: {
            borderWidth: 1,
            color: 'rgba(0,0,0,0.02)'
        },
        yaxis: {
            color: 'rgba(0,0,0,0.02)'
        },
        xaxis: {
            mode: 'categories'
        }
    });

    /******** Bar chart widget ********/
    var barData = [{
        data: visits,
        bars: {
            show: true,
            align: 'center',
            fill: true,
            lineWidth: 0,
            fillColor: $.constants.warning
        }
    }];
    $.plot($('.dashboard-bar'), barData, {
        grid: {
            borderWidth: 0,
            aboveData: true
        },
        yaxis: {
            color: 'rgba(0,0,0,0.02)'
        },
        xaxis: {
            mode: 'categories',
            tickLength: 0,
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'inherit'
        }
    });



    /******** Tasks pie ********/
    $('.tasks-pie').easyPieChart({
        size: 120,
        lineWidth: 6,
        barColor: $.constants.success,
        trackColor: 'rgba(0,0,0,0)',
        lineCap: 'round',
        easing: 'easeOutBounce',
        scaleColor: false,
        onStep: function(from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
        }
    });

    /******** Notification ********/
    noty({
        theme: 'app-noty',
        text: 'Welcome! You are now using Milestone Bootstrap 4 dashboard template.',
        type: 'success',
        timeout: 10000,
        layout: 'topRight',
        closeWith: ['button', 'click'],
        animation: {
            open: 'animated fadeInDown', // Animate.css class names
            close: 'animated fadeOutUp', // Animate.css class names
        }
    });
})(jQuery);