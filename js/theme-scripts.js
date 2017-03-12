function changeTraveloElementUI(){tjq(".selector select").each(function(){var a=tjq(this);a.parent().children(".custom-select").length<1&&(a.after("<span class='custom-select'>"+a.children("option:selected").html()+"</span>"),a.hasClass("white-bg")&&a.next("span.custom-select").addClass("white-bg"),a.hasClass("full-width")&&a.next("span.custom-select").addClass("full-width"))}),tjq("body").on("change",".selector select",function(){tjq(this).next("span.custom-select").length>0&&tjq(this).next("span.custom-select").text(tjq(this).children("option:selected").text())}),tjq("body").on("keydown",".selector select",function(){tjq(this).next("span.custom-select").length>0&&tjq(this).next("span.custom-select").text(tjq(this).children("option:selected").text())}),tjq(".fileinput input[type=file]").each(function(){var a=tjq(this);a.parent().children(".custom-fileinput").length<1&&(a.after('<input type="text" class="custom-fileinput" />'),"undefined"!=typeof a.data("placeholder")&&a.next(".custom-fileinput").attr("placeholder",a.data("placeholder")),"undefined"!=typeof a.prop("class")&&a.next(".custom-fileinput").addClass(a.prop("class")),a.parent().css("line-height",a.outerHeight()+"px"))}),tjq(".fileinput input[type=file]").on("change",function(){var a=this.value,b=a.lastIndexOf("\\");-1==b&&(b=a.lastIndexOf("/")),-1!=b&&(a=a.substring(b+1)),tjq(this).next(".custom-fileinput").val(a)}),tjq(".checkbox input[type='checkbox'], .radio input[type='radio']").each(function(){tjq(this).is(":checked")&&(tjq(this).closest(".checkbox").addClass("checked"),tjq(this).closest(".radio").addClass("checked"))}),tjq(".checkbox input[type='checkbox']").bind("change",function(){tjq(this).is(":checked")?tjq(this).closest(".checkbox").addClass("checked"):tjq(this).closest(".checkbox").removeClass("checked")}),tjq(".radio input[type='radio']").bind("change",function(a,b){if(tjq(this).is(":checked")){var c=tjq(this).prop("name");"undefined"!=typeof c&&tjq(".radio input[name='"+c+"']").closest(".radio").removeClass("checked"),tjq(this).closest(".radio").addClass("checked")}}),tjq(".datepicker-wrap input").datepicker({showOn:"button",buttonImage:"images/icon/blank.png",buttonText:"",dateFormat:"dd-mm-yyyy",buttonImageOnly:!0,minDate:0,dayNamesMin:["D","S","T","Q","Q","S","S"],beforeShow:function(a,b){var c=tjq(a).parent().attr("class").replace("datepicker-wrap","");tjq("#ui-datepicker-div").attr("class",""),tjq("#ui-datepicker-div").addClass("ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"),tjq("#ui-datepicker-div").addClass(c)}});try{tjq("input, textarea").placeholder()}catch(a){}}function displayPhotoGallery(a){if(!(!tjq.fn.flexslider||a.length<1||a.is(":hidden"))){var b=a.data("animation"),c=a.data("sync");"undefined"==typeof b&&(b="slide");var d=a.data("fix-control-nav-pos");a.flexslider({animation:b,controlNav:!0,animationLoop:!0,slideshow:!0,pauseOnHover:!0,sync:c,start:function(a){if("undefined"!=typeof d&&"1"==d){var b=tjq(a).find(".slides img").height();tjq(a).find(".flex-control-nav").css("top",b-44+"px")}}})}}function displayImageCarousel(a){if(!(!tjq.fn.flexslider||a.length<1||a.is(":hidden"))){var b=a.data("animation"),c=a.data("item-width"),d=a.data("item-margin"),e=a.data("sync");"undefined"==typeof b&&(b="slide"),"undefined"==typeof c&&(c=70),"undefined"==typeof d&&(d=10),c=parseInt(c,10),d=parseInt(d,10);var f=!0,g=!1;"undefined"==typeof e&&(e="",g=!0),a.flexslider({animation:b,controlNav:!0,animationLoop:f,slideshow:g,itemWidth:c,itemMargin:d,minItems:2,pauseOnHover:!0,asNavFor:e,start:function(a){""!=e?(tjq(a).find(".slides > li").height(c),tjq(a).find(".slides > li > img").each(function(){tjq(this).width()<1?tjq(this).load(function(){tjq(this).parent().middleblock()}):tjq(this).parent().middleblock()})):tjq(a).find(".middle-block img, .middle-block .middle-item").each(function(){tjq(this).width()<1?tjq(this).load(function(){tjq(this).closest(".middle-block").middleblock()}):tjq(this).closest(".middle-block").middleblock()})},after:function(a){0==a.currentItem&&(target=0,a.transitions&&(target="vertical"===a.vars.direction?"translate3d(0,"+target+",0)":"translate3d("+target+",0,0)",a.container.css("-"+a.pfx+"-transition-duration","0s"),a.container.css("transition-duration","0s")),a.args[a.prop]=target,a.container.css(a.args),a.container.css("transform",target))}})}}function fixPositionMegaMenu(a){"undefined"==typeof a?a="":a+=" ",tjq(a+".megamenu-menu").each(function(){var a=tjq(this).closest(".container").css("padding-left"),b=parseInt(a,10),c=tjq(this).offset().left-tjq(this).closest(".container").offset().left-b;if(0!=c){tjq(this).children(".megamenu-wrapper").css("left","-"+c+"px"),tjq(this).children(".megamenu-wrapper").css("width",tjq(this).closest(".container").width()+"px"),"undefined"!=typeof tjq(this).children(".megamenu-wrapper").data("items-per-column")&&(megamenu_items_per_column=parseInt(tjq(this).children(".megamenu-wrapper").data("items-per-column"),10));var d=new Array,e=0;tjq(this).find(".megamenu > li").each(function(){var a=Math.ceil(tjq(this).find("li > a").length/megamenu_items_per_column);0==a&&(a=1),d.push(a),e+=a}),tjq(this).find(".megamenu > li").each(function(a){tjq(this).css("width",d[a]/e*100+"%"),tjq(this).addClass("megamenu-columns-"+d[a])}),tjq(this).find(".megamenu > li.menu-item-has-children").each(function(a){if(tjq(this).children(".sub-menu").length<1){tjq(this).append("<ul class='sub-menu'></ul>");for(var b=0;b<d[a];b++)tjq(this).children(".sub-menu").append("<li><ul></ul></li>");var c=tjq(this).children("ul").eq(0).children("li").length-1;tjq(this).children("ul").eq(0).children("li").each(function(a){var b=Math.floor(a/megamenu_items_per_column);tjq(this).closest("li.menu-item-has-children").children(".sub-menu").children("li").eq(b).children("ul").append(tjq(this).clone()),a==c&&tjq(this).closest(".menu-item-has-children").children("ul").eq(0).remove()})}}),tjq(this).children(".megamenu-wrapper").show()}})}String.prototype.lpad=function(a,b){for(var c=this;c.length<b;)c=a+c;return c},tjq.fn.removeClassPrefix=function(a){return this.each(function(b,c){var d=c.className.split(" ").filter(function(b){return 0!==b.lastIndexOf(a,0)});c.className=d.join(" ")}),this},function(a,b,c){function d(a,b){var d=c(this),e=d.find(".middle-item");if(e.length<1&&(e=d.children("img")),!(e.length<1)){var f=e.width(),g=e.height();if(d.width()<=1){for(var h=d;h.width()<=1;)h=h.parent();d.css("width",h.width()+"px")}if(d.css("position","relative"),e.css("position","absolute"),d.hasClass("middle-block-auto-height")&&(d.removeClass("middle-block-auto-height"),d.height(0)),d.height()<=1){for(var h=d;h.height()<=1;)h="left"==h.css("float")&&0==h.index()&&h.next().length>0?h.next():"left"==h.css("float")&&h.index()>0?h.prev():h.parent();d.css("height",h.outerHeight()+"px"),d.addClass("middle-block-auto-height"),f=e.width(),g=e.height(),1>=g&&(g=h.outerHeight())}e.css("top","50%"),e.css("margin-top","-"+g/2+"px"),f>=1?(e.css("left","50%"),e.css("margin-left","-"+f/2+"px")):e.css("left","0")}}var e,f=c.fn;e=f.middleblock=function(){var a=this;return c(this).is(":visible")&&a.bind("set.middleblock",d).trigger("set.middleblock"),a}}(this,document,jQuery),function(a){a.fn.countTo=function(b){return b=b||{},a(this).each(function(){function c(a){a=d.formatter.call(g,a,d),h.html(a)}var d=a.extend({},a.fn.countTo.defaults,{from:a(this).data("from"),to:a(this).data("to"),speed:a(this).data("speed"),refreshInterval:a(this).data("refresh-interval"),decimals:a(this).data("decimals")},b),e=Math.ceil(d.speed/d.refreshInterval),f=(d.to-d.from)/e,g=this,h=a(this),i=0,j=d.from,k=h.data("countTo")||{};h.data("countTo",k),k.interval&&clearInterval(k.interval),k.interval=setInterval(function(){j+=f,i++,c(j),"function"==typeof d.onUpdate&&d.onUpdate.call(g,j),i>=e&&(h.removeData("countTo"),clearInterval(k.interval),j=d.to,"function"==typeof d.onComplete&&d.onComplete.call(g,j))},d.refreshInterval),c(j)})},a.fn.countTo.defaults={from:0,to:0,speed:1e3,refreshInterval:100,decimals:0,formatter:function(a,b){return a.toFixed(b.decimals)},onUpdate:null,onComplete:null}}(jQuery),"undefined"==typeof enableChaser&&(enableChaser=1),function(a,b,c){var d,e=c.fn;d=e.onstage=function(){var b=tjq(a).scrollTop(),c=tjq(a).height(),d=this;return d.offset().top+.9*d.height()<=b+c&&d.offset().top+.9*d.height()>b?!0:!1}}(this,document,jQuery),tjq("body").on("click","a.popup-gallery",function(a){return a.preventDefault(),!1}),tjq(document).ready(function(){changeTraveloElementUI()}),tjq(window).load(function(){function a(){tjq("#main-menu .menu li.menu-item-has-children > ul, .ribbon ul.menu.mini").each(function(a){if(!(tjq(this).closest(".megamenu").length>0)){var b=tjq(this).parent().offset().left+tjq(this).parent().width();b+tjq(this).width()>tjq("body").width()?tjq(this).addClass("left"):tjq(this).removeClass("left")}})}function b(a){var b=0;tjq(a).find(".slides > li").each(function(){tjq(this).css("height","auto"),tjq(this).height()>b&&(b=tjq(this).height())}),tjq(a).find(".slides > li").height(b)}function c(){try{tjq(".testimonial.style1").length>0&&tjq(".testimonial.style1").is(":visible")&&tjq(".testimonial.style1").flexslider({namespace:"testimonial-",animation:"slide",controlNav:!0,animationLoop:!1,directionNav:!1,slideshow:!1,start:b})}catch(a){}try{tjq(".testimonial.style2").length>0&&tjq(".testimonial.style2").is(":visible")&&tjq(".testimonial.style2").flexslider({namespace:"testimonial-",animation:"slide",controlNav:!1,animationLoop:!1,directionNav:!0,slideshow:!1,start:b})}catch(a){}try{tjq(".testimonial.style3").length>0&&tjq(".testimonial.style3").is(":visible")&&tjq(".testimonial.style3").flexslider({namespace:"testimonial-",controlNav:!1,animationLoop:!1,directionNav:!0,slideshow:!1,start:b})}catch(a){}}function d(){tjq(".promo-box").each(function(){if("right"==tjq(this).find(".content-section").css("float")){var a=tjq(this).find(".image-container > img").height();tjq(this).find(".content-section .table-wrapper").css("height","auto");var b=tjq(".content-section").css("padding-top"),c=tjq(".content-section").css("padding-bottom"),d=0;try{d=parseInt(b,10)+parseInt(c,10)}catch(e){}var f=tjq(this).find(".content-section >.table-wrapper").length>0?tjq(this).find(".content-section > .table-wrapper").height()+d:tjq(this).find(".content-section").innerHeight();f>a?a=f:a+=15,tjq(this).find(".image-container").height(a),tjq(this).find(".content-section").innerHeight(a),tjq(this).find(".content-section .table-wrapper").css("height","100%"),tjq(this).find(".image-container").css("margin-left","-5%"),tjq(this).find(".image-container").css("position","relative"),tjq(this).find(".image-container > img").css("position","absolute"),tjq(this).find(".image-container > img").css("bottom","0"),tjq(this).find(".image-container > img").css("left","0")}else tjq(this).find(".image-container").css("height","auto"),tjq(this).find(".image-container").css("margin","0"),tjq(this).find(".content-section").css("height","auto"),tjq(this).find(".image-container > img").css("position","static");tjq(this).find(".image-container > img").hasClass("animated")||tjq(this).find(".image-container > img").css("visibility","visible")})}if(tjq("body").on("click","#back-to-top",function(a){a.preventDefault(),tjq("html,body").animate({scrollTop:0},1e3)}),tjq("#mobile-search-tabs").length>0&&tjq("#mobile-search-tabs").bxSlider({mode:"fade",infiniteLoop:!1,hideControlOnEnd:!0,touchEnabled:!0,pager:!1,onSlideAfter:function(a,b,c){tjq('a[href="'+tjq(a).children("a").attr("href")+'"]').tab("show")}}),tjq(".mobile-menu ul.menu > li.menu-item-has-children").each(function(a){var b="mobile-menu-submenu-item-"+a;tjq('<button class="dropdown-toggle collapsed" data-toggle="collapse" data-target="#'+b+'"></button>').insertAfter(tjq(this).children("a")),tjq(this).children("ul").prop("id",b),tjq(this).children("ul").addClass("collapse"),tjq("#"+b).on("show.bs.collapse",function(){tjq(this).parent().addClass("open")}),tjq("#"+b).on("hidden.bs.collapse",function(){tjq(this).parent().removeClass("open")})}),tjq(".middle-block").middleblock(),a(),1==enableChaser&&tjq("#content").length>0&&tjq("#main-menu ul.menu").length>0){var e,f=tjq("#main-menu ul.menu").clone().hide().appendTo(document.body).wrap("<div class='chaser hidden-mobile'><div class='container'></div></div>");tjq('<h1 class="logo navbar-brand"><a title="Travelo - home" href="index.html"><img alt="" src="images/logo.png"></a></h1>').insertBefore(".chaser .menu");var g=tjq("#content").first();e=g.offset().top+2,tjq(window).on("scroll",function(){var a=tjq(document).scrollTop();tjq(".chaser").is(":hidden")&&a>e?tjq(".chaser").slideDown(300):tjq(".chaser").is(":visible")&&e>a&&tjq(".chaser").slideUp(200)}),tjq(window).on("resize",function(){var a=tjq(document).scrollTop();tjq(".chaser").is(":hidden")&&a>e?tjq(".chaser").slideDown(300):tjq(".chaser").is(":visible")&&e>a&&tjq(".chaser").slideUp(200)}),tjq(".chaser").css("visibility","hidden"),f.show(),fixPositionMegaMenu(".chaser"),tjq(".chaser .megamenu-menu").removeClass("light"),tjq(".chaser").hide(),tjq(".chaser").css("visibility","visible")}tjq(".toggle-container .panel-collapse").each(function(){tjq(this).hasClass("in")||tjq(this).closest(".panel").find("[data-toggle=collapse]").addClass("collapsed")}),tjq(".toggle-container.with-image").each(function(){var a="",b="1s";"undefined"!=typeof tjq(this).data("image-animation-type")&&(a=tjq(this).data("image-animation-type")),"undefined"!=typeof tjq(this).data("image-animation-duration")&&(b=tjq(this).data("image-animation-duration"));var c='<div class="image-container';if(""!=a&&(c+=' animated" data-animation-type="'+a+'" data-animation-duration="'+b),c+='"><img src="" alt="" /></div>',tjq(this).prepend(c),tjq(this).find(".panel-collapse.in").length>0){var d=tjq(this).find(".panel-collapse.in").parent().children("img"),e=d.attr("src"),f=d.attr("width"),g=d.attr("height"),h=d.attr("alt"),i=tjq(this).find(".image-container img");i.attr("src",e),"undefined"!=typeof f&&i.attr("width",f),"undefined"!=typeof g&&i.attr("height",g),"undefined"!=typeof h&&i.attr("alt",h),tjq(this).children(".image-container").show()}}),tjq(".toggle-container.with-image").on("show.bs.collapse",function(a){var b=tjq(a.target).parent().children("img");if(b.length>0){var c=b.attr("src"),d=b.attr("width"),e=b.attr("height"),f=b.attr("alt"),g=tjq(this).find(".image-container img");g.attr("src",c),"undefined"!=typeof d&&g.attr("width",d),"undefined"!=typeof e&&g.attr("height",e),"undefined"!=typeof f&&g.attr("alt",f),g.parent().css("visibility","hidden"),g.parent().removeClass(g.parent().data("animation-type")),setTimeout(function(){g.parent().addClass(g.parent().data("animation-type")),g.parent().css("visibility","visible")},10)}}),tjq(".toggle-container.with-image").on("shown.bs.collapse",function(a){}),tjq("body").on("click",".alert > .close, .info-box > .close",function(){tjq(this).parent().fadeOut(300)}),tjq("[data-toggle=tooltip]").tooltip(),c(),tjq(".image-carousel").each(function(){displayImageCarousel(tjq(this))}),tjq(".photo-gallery").each(function(){displayPhotoGallery(tjq(this))}),tjq('a[data-toggle="tab"]').on("shown.bs.tab",function(a){var b=tjq(a.target).attr("href");tjq(b).find(".image-carousel").length>0&&displayImageCarousel(tjq(b).find(".image-carousel")),tjq(b).find(".photo-gallery").length>0&&displayPhotoGallery(tjq(b).find(".photo-gallery")),tjq(b).find(".testimonial").length>0&&c(),tjq(b).find(".middle-block").middleblock()}),tjq(document).bind("keydown",function(a){var b=a.keyCode;tjq(".opacity-overlay:visible").length>0&&27===b&&(a.preventDefault(),tjq(".opacity-overlay").fadeOut())}),tjq(document).on("click",".opacity-overlay",function(a){tjq(a.target).is(".opacity-overlay .popup-content *")||tjq(".opacity-overlay").fadeOut()}),tjq("body").on("click","a.popup-gallery",function(a){a.preventDefault(),tjq("#soap-gallery-popup").length<1&&tjq("<div class='opacity-overlay' id='soap-gallery-popup'><div class='container'><div class='popup-wrapper'><i class='fa fa-spinner fa-spin spinner'></i><div class='col-xs-12 col-sm-9 popup-content'></div></div></div></div>").appendTo("body"),tjq("#soap-gallery-popup .popup-content").html(""),tjq("#soap-gallery-popup .popup-content").height("auto").css("visibility","hidden"),tjq("#soap-gallery-popup").fadeIn(),tjq("#soap-gallery-popup .spinner").show();var b=tjq(this);tjq.ajax({url:b.attr("href"),type:"post",dataType:"html",success:function(a){tjq("#soap-gallery-popup .popup-content").html(a),tjq("#soap-gallery-popup .image-carousel").length>0&&displayImageCarousel(tjq("#soap-gallery-popup .image-carousel")),tjq("#soap-gallery-popup .photo-gallery").length>0&&(displayPhotoGallery(tjq("#soap-gallery-popup .photo-gallery")),setTimeout(function(){tjq("#soap-gallery-popup .popup-content").css("visibility","visible"),tjq("#soap-gallery-popup .spinner").hide()},100))}})}),tjq("body").on("click",".popup-map",function(a){var b=tjq(this).data("box");if("undefined"!=typeof b){a.preventDefault(),tjq("#soap-map-popup").length<1&&tjq("<div class='opacity-overlay' id='soap-map-popup'><div class='container'><div class='popup-wrapper'><i class='fa fa-spinner fa-spin spinner'></i><div class='col-xs-12 col-sm-9 popup-content'></div></div></div></div>").appendTo("body"),tjq("#soap-map-popup").fadeIn(),tjq("#soap-map-popup .spinner").show(),b=b.split(",");var c=tjq("#soap-map-popup .popup-content").width();tjq("#soap-map-popup .popup-content").gmap3({clear:{name:"marker",last:!0}}),tjq("#soap-map-popup .popup-content").height(.5*c).gmap3({map:{options:{center:b,zoom:12}},marker:{values:[{latLng:b}],options:{draggable:!1}}})}}),tjq("body").on("click",".soap-popupbox",function(a){a.preventDefault();var b=tjq(this).attr("href");"undefined"==typeof b&&(b=tjq(this).data("target")),"undefined"!=typeof b&&(tjq(b).length<1||(tjq("#soap-popupbox").length<1&&tjq("<div class='opacity-overlay' id='soap-popupbox' tabindex='-1'><div class='container'><div class='popup-wrapper'><div class='popup-content'></div></div></div></div>").appendTo("body"),tjq("#soap-popupbox .popup-content").children().hide(),tjq("#soap-popupbox .popup-content").children(b).length>0||tjq(b).appendTo(tjq("#soap-popupbox .popup-content")),tjq(b).show(),tjq("#soap-popupbox").fadeIn(function(){tjq(b).find(".input-text").eq(0).focus()})))}),tjq(".style-changer .design-skins a").click(function(a){a.preventDefault(),tjq(this).closest("ul").children("li").removeClass("active"),tjq(this).parent().addClass("active")}),tjq("#style-changer .style-toggle").click(function(a){a.preventDefault(),tjq(this).hasClass("open")?(tjq("#style-changer").css("left","0"),tjq(this).removeClass("open"),tjq(this).addClass("close")):(tjq("#style-changer").css("left","-275px"),tjq(this).removeClass("close"),tjq(this).addClass("open"))}),tjq(".filters-container .filters-option a").click(function(a){a.preventDefault(),tjq(this).parent().hasClass("active")?tjq(this).parent().removeClass("active"):tjq(this).parent().addClass("active")}),tjq(".sort-trip a").click(function(a){a.preventDefault(),tjq(this).parent().parent().children().removeClass("active"),tjq(this).parent().addClass("active")}),tjq(".location-reload").click(function(a){a.preventDefault();var b=tjq(this).prop("href").split("#")[0];if(-1!=window.location.href.indexOf(b)){var c=tjq(this).prop("href").split("#")[1];"undefined"!=typeof c&&""!=c&&tjq("a[href='#"+c+"']").length>0&&tjq("a[href='#"+c+"']").tab("show")}else window.location.href=tjq(this).prop("href")}),d(),tjq.fn.fitVids&&tjq(".full-video").fitVids(),tjq(".go-back").click(function(a){a.preventDefault(),window.history.go(-1)}),""!=window.location.hash&&tjq('a[href="'+window.location.hash+'"]').length>0&&setTimeout(function(){tjq('a[href="'+window.location.hash+'"]').tab("show")},100),tjq(".parallax").length>0&&tjq.stellar({responsive:!0,horizontalScrolling:!1}),tjq().waypoint&&(tjq(".animated").waypoint(function(){var a=tjq(this).data("animation-type");("undefined"==typeof a||0==a)&&(a="fadeIn"),tjq(this).addClass(a);var b=tjq(this).data("animation-duration");("undefined"==typeof b||0==b)&&(b="1"),tjq(this).css("animation-duration",b+"s");var c=tjq(this).data("animation-delay");"undefined"!=typeof c&&0!=c&&tjq(this).css("animation-delay",c+"s"),tjq(this).css("visibility","visible"),setTimeout(function(){tjq.waypoints("refresh")},1e3)},{triggerOnce:!0,offset:"bottom-in-view"}),tjq(".counters-box").waypoint(function(){tjq(".display-counter").each(function(){var a=tjq(this).data("value");tjq(this).countTo({from:0,to:a,speed:3e3,refreshInterval:10})}),setTimeout(function(){tjq.waypoints("refresh")},1e3)},{triggerOnce:!0,offset:"100%"})),tjq("body").on("click",function(a){var b=tjq(a.target);b.is(".mobile-topnav .ribbon.opened *")||(tjq(".mobile-topnav .ribbon.opened > .menu").toggle(),tjq(".mobile-topnav .ribbon.opened").removeClass("opened"))}),tjq(".mobile-topnav .ribbon > a").on("click",function(a){if(a.preventDefault(),tjq(".mobile-topnav .ribbon.opened").length>0&&!tjq(this).parent().hasClass("opened")&&(tjq(".mobile-topnav .ribbon.opened > .menu").toggle(),tjq(".mobile-topnav .ribbon.opened").removeClass("opened")),tjq(this).parent().toggleClass("opened"),tjq(this).parent().children(".menu").toggle(200),tjq(this).parent().hasClass("opened")&&tjq(this).parent().children(".menu").offset().left+tjq(this).parent().children(".menu").width()>tjq("body").width()){var b=tjq(this).parent().children(".menu").offset().left+tjq(this).parent().children(".menu").width()-tjq("body").width();b=tjq(this).parent().children(".menu").position().left-b-1,tjq(this).parent().children(".menu").css("left",b+"px")}else tjq(this).parent().children(".menu").css("left","0")}),tjq(window).resize(function(){tjq(".middle-block").middleblock(),fixPositionMegaMenu(),a(),d(),b(".testimonial"),tjq(".photo-gallery.style2").length>0&&tjq(".photo-gallery.style2").each(function(){var a=tjq(this).find(".slides img").height();tjq(this).find(".flex-control-nav").css("top",a-44+"px")})})});var megamenu_items_per_column=6;fixPositionMegaMenu(),tjq("#footer #main-menu .menu >  li.menu-item-has-children").each(function(a){var b=tjq(this).children("ul, .megamenu-wrapper").height();tjq(this).children("ul, .megamenu-wrapper").css("top","-"+b+"px")}),tjq("body").on("click",".travelo-signup-box .signup-email",function(a){a.preventDefault(),tjq(this).closest(".travelo-signup-box").find(".simple-signup").hide(),tjq(this).closest(".travelo-signup-box").find(".email-signup").show(),tjq(this).closest(".travelo-signup-box").find(".email-signup").find(".input-text").eq(0).focus()}),tjq(document).ready(function(){var a=window.location.pathname,b=a.split(/[/ ]+/).pop(),c=tjq("#main-menu a, #mobile-primary-menu a");c.each(function(){var a=tjq(this),c=a.attr("href"),d=a.parents("li");b==c&&d.addClass("active").siblings().removeClass("active")})});