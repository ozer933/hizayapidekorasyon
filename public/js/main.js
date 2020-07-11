


/**
 * android cihazlarda select boxların düzgün görünmesini sağlar.
 */
$(function () {
    var nua = navigator.userAgent;
    var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1);
    if (isAndroid) {
        $('select.form-control').removeClass('form-control').css('width', '100%');
    }
});

/**
 * linklerde target kullanmak yerine rel attribut unu kullanmamızı sağlar.
 * @constructor
 */
function  blankLink() {

    if  (!document.getElementsByTagName) return;
    var  urls = document.getElementsByTagName("a");
    var  urlCount = urls.length;
    for  (var i=0; i<urlCount; i++) {
        var singleLink = urls[i];
        if(singleLink.getAttribute("href") && singleLink.getAttribute("rel") == "external" || singleLink.getAttribute("rel") == "nofollow") {
            singleLink.target  = "_blank";
        }

    }

}

/**
 * @param obj
 * @returns {boolean}
 */
isset = function(obj) {
    var i, max_i;
    if(obj === undefined) return false;
    for (i = 1, max_i = arguments.length; i < max_i; i++) {
        if (obj[arguments[i]] === undefined) {
            return false;
        }
        obj = obj[arguments[i]];
    }
    return true;
};

$(function () {
    $('.fancybox').fancybox();


    blankLink();

    $('.share-box a').on('click', function () {
        window.open($(this).attr('href'), 'sharewindow', 'width=600,height=400');
        return false;
    });

    //PNotify eklentisnin çalışacağı tema seçimi içindir.
    PNotify.prototype.options.styling = "bootstrap3";

    $('.btnCallyou').on("click", function () {
        var name = $('input[name="fullname"]').val(),
            phone = $('input[name="phone"]').val();

        $.post("biz-sizi-arayalim", {"fullname": name, "phone": phone}, function (e) {
            if (e.success) {
                new PNotify({
                    title: 'Biz Sizi Arayalım',
                    text: e.message,
                    type: 'success',
                    icon: 'fa fa-envelope-o',
                    opacity: .8
                });
                $('input[name="fullname"]').val('');
                $('input[name="phone"]').val('');
            } else {
                new PNotify({
                    title: 'Hata',
                    text: e.message,
                    type: 'error',
                    icon: 'fa fa-envelope-o',
                    opacity: .8
                });
            }
        }, "json");
    })
});


$(document).ready(function() {

    /*Tooltip*/
    $('[data-toggle="tooltip"]').tooltip();

    logoline();
    serviceBox();

    /*FancyBox*/
    $(".fancyBox").fancybox({
        padding: 0,
        openEffect : 'elastic',
        openSpeed  : 150,
        closeEffect : 'elastic',
        closeSpeed  : 150,
        closeClick : true,
        helpers : {

            buttons : {},
            thumbs  : {
                width : 50,
                height  : 50
            }


        }
    });

    /*SVG Image Donusturme*/
    $('img.svg').each(function(){
        var $img = $(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        $.get(imgURL, function(data) {
            var $svg = $(data).find('svg');

            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            $svg = $svg.removeAttr('xmlns:a');

            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }

            $img.replaceWith($svg);

        }, 'xml');

    });


    /*OWL*/
    var owl1 = $("#son-proje1");
    var owl2 = $("#son-proje2");
    var owl3 = $("#referanslar");

    owl1.owlCarousel({
        loop : true,
        autoPlay : 6000,
        pagination : false,
        singleItem:true,
        mouseDrag : false,
        touchDrag : false,
    });
    $(".last-project-slider .buttons#Next").click(function(){
        owl1.trigger('owl.next');
    });
    $(".last-project-slider .buttons#Prev").click(function(){
        owl1.trigger('owl.prev');
    });

    owl2.owlCarousel({
        loop : true,
        autoPlay : 6000,
        pagination : false,
        singleItem:true,
        mouseDrag : false,
        touchDrag : false,
    });
    $(".last-project-slider .buttons#Next").click(function(){
        owl2.trigger('owl.next');
    });
    $(".last-project-slider .buttons#Prev").click(function(){
        owl2.trigger('owl.prev');
    });

    owl3.owlCarousel({
        items :  7,
        loop : true,
        autoPlay : 3000,
        pagination : false
    });
    $(".referanslar #Next").click(function(){
        owl3.trigger('owl.next');
    });
    $(".referanslar #Prev").click(function(){
        owl3.trigger('owl.prev');
    });


    var sync1 = $("#project-slide");
    var sync2 = $("#project-slide-thumb");

    sync1.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: false,
        pagination:false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
    });

    sync2.owlCarousel({
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        itemsTablet : [768,3],
        itemsMobile : [479,3],
        pagination:false,
        responsiveRefreshRate : 100,
        afterInit : function(el){
            el.find(".owl-item").eq(0).addClass("active");
        }
    });

    function syncPosition(el){
        var current = this.currentItem;
        $("#project-slide-thumb")
            .find(".owl-item")
            .removeClass("active")
            .eq(current)
            .addClass("active")
        if($("#project-slide-thumb").data("owlCarousel") !== undefined){
            center(current)
        }
    }

    $("#project-slide-thumb").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo",number);
    });

    function center(number){
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for(var i in sync2visible){
            if(num === sync2visible[i]){
                var found = true;
            }
        }

        if(found===false){
            if(num>sync2visible[sync2visible.length-1]){
                sync2.trigger("owl.goTo", num - sync2visible.length+2)
            }else{
                if(num - 1 === -1){
                    num = 0;
                }
                sync2.trigger("owl.goTo", num);
            }
        } else if(num === sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", sync2visible[1])
        } else if(num === sync2visible[0]){
            sync2.trigger("owl.goTo", num-1)
        }

    }


});

$(window).resize(function(){
    logoline();
    serviceBox();
});
$(window).load(function(){
    logoline();
    serviceBox();
});


function logoline (){

    var wW = $(window).width();
    var logoW = $('.navbar-brand img').width();
    var conW = $('.container').width() + 30;
    var otherContainer = wW - conW;
    var otherContainer2 = otherContainer / 2;
    var lineW = conW + otherContainer2 - logoW;

    $('.line2').css('width', lineW-15);
    $('.line2').css('left', logoW+15);

    $('.line1').css('width', otherContainer2+15);
    $('.line1').css('right', conW-15);

}


function serviceBox (){
    var heights = $(".service-box").map(function () {
         return $(this).height();
     }).get(),

    maxHeight = Math.max.apply(null, heights);

    $('.service-box').height(maxHeight);
}
