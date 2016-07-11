(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width();
    function slider() {
        var slider = $('.js-slider');
        slider.each(function() {
            $(this).flexslider({
                animation: "slide",
                slideshow: false,
                pauseOnHover: true,
                nextText: '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve"><defs></defs><g><circle class="background" cx="16" cy="16" r="16"/><path class="icon" fill="#FFFFFF" d="M23,14.2l-2.8-2.6l-0.6-0.5c0,0-0.9-0.8-1.8,0.3c-0.6,0.8-0.4,1.4,0.4,2.1c0.3,0.3,0.7,0.6,1.2,1H9.7c-1.2,0-1.7,0.6-1.7,1.4v0.2c0,0.8,0.5,1.4,1.7,1.4h9.7c-0.4,0.4-0.9,0.7-1.1,1c-0.8,0.7-1.1,1.2-0.4,2.1c0.9,1.2,1.8,0.3,1.8,0.3l0.6-0.5l2.7-2.5c0.3-0.3,0.5-0.5,0.7-0.7c0.2-0.3,0.3-0.6,0.3-1.1c0-0.5-0.1-0.9-0.3-1.1C23.5,14.7,23.3,14.4,23,14.2 M24,16L24,16L24,16C24,16,24,16,24,16z"/></g></svg>',
                prevText: '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve"><defs></defs><g><circle class="background" cx="16" cy="16" r="16"/><path class="icon" fill="#FFFFFF" d="M9,17.8l2.8,2.6l0.6,0.5c0,0,0.9,0.8,1.8-0.3c0.6-0.8,0.4-1.4-0.4-2.1c-0.3-0.3-0.7-0.6-1.2-1h9.7c1.2,0,1.7-0.6,1.7-1.4v-0.2c0-0.8-0.5-1.4-1.7-1.4h-9.7c0.4-0.4,0.9-0.7,1.1-1c0.8-0.7,1.1-1.2,0.4-2.1c-0.9-1.2-1.8-0.3-1.8-0.3l-0.6,0.5L9,14.1c-0.3,0.3-0.5,0.5-0.7,0.7C8.1,15.1,8,15.5,8,16c0,0.5,0.1,0.9,0.3,1.1C8.5,17.3,8.7,17.6,9,17.8 M8,16C8,15.9,8,15.9,8,16L8,16C8,16,8,16,8,16z"/></g></svg>',
                animationLoop: false
            });
        });
    }
    function smoothScroll() {
        if($('.menu').length > 0) {
            $('a[href^="#"]').on('click',function (e) {
                e.preventDefault();
                var target = this.hash;
                var $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top
                }, 900, 'swing', function () {
                    window.location.hash = target;
                });
            });
        }
    }
    function youHeight() {
        var you = $('.you'),
            image = you.find('.thisheight').height();
        if(windowSize > 980) {
            you.css('height', image);
        } else {
            you.css('height', 'auto');
        }
    }
    function validacionFormulario() {
        $('<div class="message"></div>').hide().appendTo('.form-content');
        $('.formulario').validate({
            onkeyup: function (element, event) {
                if (event.which === 9 && this.elementValue(element) === "") {
                    return;
                } else {
                    this.element(element);
                }
            },
            onfocusin: function (element, event) {
                if (event.which === 9 && this.elementValue(element) === "") {
                    return;
                } else {
                    this.element(element);
                }
            },
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                lastname: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                subject: {
                    required: true,
                    minlength: 2
                },
                message: {
                    required: true,
                    minlength: 2
                } 
            },
            messages: {
                name: {
                    required: "Ingresar solo letras.",
                    minlength : "Ingresa al menos 2 caracteres"
                },
                lastname: {
                    required: "Ingresar solo letras.",
                    minlength : "Ingresa al menos 2 caracteres"
                },
                email: {
                    required: "Ingresa una dirección de correo valida",
                    email: "No es una direccion de correo"
                },
                subject: {
                    required: "Ingresar solo letras.",
                    minlength : "Ingresa al menos 2 caracteres"
                },
                message: {
                    required: "Ingresa un mensaje.",
                    minlength : "Ingresa al menos 2 caracteres"
                },
            },
            onkeyup: true,
            errorElement: 'span',
            errorClass: 'error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parent().addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parent().removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                $('.form-content .loading').css({opacity: 0}).animate({opacity: 1});
                $.post($('.formulario').attr('action'), $('.formulario').serialize(), function (data) {
                    var obj = $.parseJSON(data);
                    console.log(obj);
                    $('.form-content .loading').fadeOut();
                    if (obj.exito === 'exito') {
                        $('.form-content .message').html('<p class="success-msg">Gracias por su mensaje.</p>').fadeIn().delay('3000').fadeOut();
                        $('.formulario').find('.form__valid').removeClass('form__valid');
                        $('.formulario')[0].reset();
                    } else {
                        $('.formulario .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                    }
                });
                return false;
            }
        });
    }
    function vimeo() {
        var frame = $('iframe#js-video'),
            play = $('.js-play'),
            close = $('.js-close'),
            lightbox = $('.lightbox'),
            content = $('.lightbox__content');
        play.click(function() {
            var link = $(this).data('source'),
                altura = $(this).data('top');
            lightbox.fadeIn();
            frame.attr('src', link);
            content.css('top', altura);
        });
        close.click(function() {
            lightbox.fadeOut();
            frame.attr('src',''); 
        });
        $(document).keyup(function(e) {
            if (e.keyCode == 27) { 
                lightbox.fadeOut();
                frame.attr('src',''); 
            }
        });
    }
    slider();
    //smoothScroll();
    validacionFormulario();
    vimeo();
    $(window).load(function() {
        youHeight();
    });
    $(window).resize(function() {
        youHeight();
    });

    if( $('body').hasClass('page-catalogo') ) {
        /*
        function getFlipSize() {
    	    if(windowSize < 768) {
        	    flipWidth = 280;
        	    flipHeight = 300;
    	    }
    	    else if(windowSize < 980) {
        	    flipWidth = 680;
        	    flipHeight = 400;
    	    }
    	    else if(windowSize < 1280) {
        	    flipWidth = 920;
        	    flipHeight = 600;
    	    }
    	    else {
        	    flipWidth = 1100;
        	    flipHeight = 700;
    	    }
    	    var obj = {
        	    width: flipWidth,
        	    height: flipHeight
    	    }
    	    return obj;
	    }
	    */

        var pageWidth = 595,
            pageHeight = 842,
            flipWidth = pageWidth * 2,
            flipHeight = pageHeight,
            resizeID;

        $(".flipbook").turn({
            width: flipWidth,
            height: flipHeight,
            //elevation: 10,
            gradients: true,
            autoCenter: true,
            zoom: true
        });

        checkMySize();

        $(window).resize(function(){
            clearTimeout(resizeID);
            resizeID = setTimeout(checkMySize, 100);
        });

        function checkMySize(){
            var windowSize = $(window).width();

            if( windowSize < flipWidth ) {
                var newWidth = windowSize - 40,
                    newHeight = ( flipHeight * newWidth ) / flipWidth;

                if ( windowSize < 768 ) {
                    newHeight = ( flipHeight * newWidth ) / pageWidth;
                    $(".flipbook").turn("size", newWidth, newHeight);
                    $(".flipbook").turn("options", {display: "single"});
                }
                else {
                    $(".flipbook").turn("size", newWidth, newHeight);
                    $(".flipbook").turn("options", {display: "double"});
                }
            }
            else {
                $(".flipbook").turn("size", flipWidth, flipHeight);
                $(".flipbook").turn("options", {display: "double"});
            }
        }
    }
})(jQuery);
