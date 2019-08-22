
try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

$(document).ready(function () {

    var sections = $('#pagepiling .section').length;

    $('#forward').on('click', function() {
        $.fn.pagepiling.moveSectionUp();
    });

    $('#backward').on('click', function() {
        $.fn.pagepiling.moveSectionDown();
    });
    if (window && window.innerWidth > 992) {
        console.log("pagepiling");
        $('#pagepiling').pagepiling({
            menu: null,
            direction: 'vertical',
            verticalCentered: false,
            sectionsColor: [],
            anchors: [],
            scrollingSpeed: 300,
            easing: 'linear',
            loopBottom: false,
            loopTop: false,
            css3: true,
            navigation: {
                'textColor': '#000',
                'bulletsColor': '#000',
                'position': 'right',
                'tooltips': ['section1', 'section2', 'section3', 'section4']
            },
            normalScrollElements: null,
            normalScrollElementTouchThreshold: 5,
            touchSensitivity: 5,
            keyboardScrolling: true,
            sectionSelector: '.section',
            animateAnchor: false,

            //events
            onLeave: function (index, nextIndex, direction) { },
            afterLoad: function (anchorLink, index) {
                console.log(index);
                if(index == 1) {
                    $('#forward').hide();
                } else {
                    $('#forward').show();
                }

                console.log(index);
                console.log(sections);
                if (index == sections) {
                    $('#backward').hide();
                } else {
                    $('#backward').show();
                }
            },
            afterRender: function () { },
        });
    }

});