$(document).ready(function () {
    $("html body").on("click", ".checkbox-req-box input", function(){
        $(this).parents(".checkbox-req-box").removeClass("error");
        $(this).parents(".checkbox-group").removeClass("error");
    });
    function checkRequired(form) {
        var error = false;
        form.find(".required").each(function () {
            $(this).parents(".popup__group").removeClass("error");
            if($(this).hasClass("popup__textarea")){
                if ($(this).val() == "") {
                    error = true;
                    $(this).parents(".popup__group").addClass("error");
                }
            }else {
                switch ($(this).attr("type")) {
                    case "checkbox":
                        if($(this).parents(".checkbox-req-box").hasClass("checkbox-group")){
                            $(this).parents(".checkbox-group").removeClass("error");
                            if(!$(this).parents(".checkbox-group").find('input').is(':checked')){
                                error = true;
                                $(this).parents(".checkbox-group").addClass("error");
                            }
                        }else{
                            $(this).parents(".popup__checkbox").removeClass("error");
                            if ($(this).prop('checked') === false) {
                                error = true;
                                $(this).parents(".popup__checkbox").addClass("error");
                            }
                        }
                        break;
                    // case "file":
                    //     if (!this.files[0]) {
                    //         $(this).addClass("error");
                    //         $(this).next(".form__add-file").addClass("error");
                    //         error = true;
                    //     }
                    //     break;
                    // case "radio":
                    //     error = true;
                    //     $(this).parents(".radio_group").find("input[name=" + $(this).prop("name") + "]").each(function () {
                    //         if ($(this).prop('checked') !== false) {
                    //             error = false;
                    //         }
                    //     });
                    //     if (error) {
                    //         $.fancybox.open($(this).parents(".radio_group").find(".radio_group_title").text());
                    //     }
                    //     break;

                    case "text":
                        $(this).parents(".popup__group").removeClass("error");
                        if ($(this).val() == "") {
                            error = true;
                            $(this).parents(".popup__group").addClass("error");
                        }

                        // if ($(this).hasClass("input-phone")) {
                        //     console.log($(this).val().indexOf('_'));
                        //     if($(this).val().indexOf('_') != -1){
                        //         error = true;
                        //         $(this).parents(".popup__group").addClass("error");
                        //     }
                        // }
                        break;
                }
            }

        });
        return error;
    }

    function checkRules(rules, value, input = false) {
        var data = [];
        for (var i = rules.length - 1; i >= 0; i--) {
            var rule = rules[i].split('-');
            var mess = "";
            switch (rule[0]) {
                case "norus":
                    if (value.search(/[А-яЁё]/) !== -1) {
                        mess = "Значение не может содержать русских символов!";
                        data.push(mess);
                    }
                    break;
                case "int":
                    if (value.search(/[0-9]/) === -1) {
                        mess = "Значение может содержать только цифры!";
                        data.push(mess);
                    }
                    break;
                case "min":
                    if (value.length < Number(rule[1])) {
                        mess = "Значение не может быть меньше " + rule[1] + " символов!";
                        data.push(mess);
                    }
                    break;
                case "max":
                    if (value.length > Number(rule[1])) {
                        mess = "Значение не может привышать " + rule[1] + " символов!";
                        data.push(mess);
                    }
                    break;
                case "phone":
                    if (value.indexOf('_') != -1) {
                        mess = "Не корректный телефон";
                        data.push(mess);
                    }
                    break;
                case "email":
                    if (value.indexOf('@') == -1 || value.indexOf('.') == -1) {
                        mess = "Не корректный email";
                        data.push(mess);
                    }
                    break;
                default:
                    if (value == "") {
                        mess = "Необходимо ввести значение!";
                        data.push(mess);
                    }
            }
        }
        return data;
    }

    function checkRulesInput(form) {
        var error = false;
        form.find("[data-rule-input]").each(function () {
            if (!$(this).parents(".popup__group").hasClass("error")) {
                var rules = $(this).data("rule-input").split(',');
                var inputVal = $(this).val();
                var dataError = checkRules(rules, inputVal, $(this));
                if (dataError.length > 0) {
                    $(this).parents(".popup__group").addClass("error");
                    error = true;
                }
            }
        });
        return error;
    }

    function formValid(form) {
        var valid = false;
        var chReq = checkRequired(form);
        var chRules = checkRulesInput(form);
        if (!chRules && !chReq) {
            valid = true;
        }
        return valid;
    }
    // Отправка формы
    $("html body").on('click', '.popup__btn', function (e) {
        e.preventDefault();
        let form = $(this).parents("form");
        if(!form.find("input").hasClass("error") && !form.find("textarea").hasClass("error") && !form.find(".checkbox-req-box").hasClass("error")){
            $(".input-captcha").removeClass("error");
        }

        if($(".input-captcha").val() == "" ){
            $(".input-captcha").addClass("error");
        }
        if (formValid(form) && form.find("input[name=consent]").is(':checked')) {
            var formData = new FormData();
            var form_data = $("#quest form *").serializeArray();
            $.each(form_data, function (key, input) {
                formData.append(input.name, input.value);
            });
            $("#quest form input[type=file]").each(function () {
                var file_data = $(this)[0].files;
                for (var i = 0; i < file_data.length; i++) {
                    formData.append($(this).attr("name"), file_data[i]);
                }
            });

            //var formData = form.serialize();
            $.ajax({
                type: "POST",
                url: "/ajax/send-form.php",
                processData: false,
                contentType: false,
                data: formData,
                async: false,
                success: function (response) {
                    console.log(response);
                    if (response.trim() == "send") {
                        form.hide();
                        $('.popup .fancybox-close-small').hide();
                        form.siblings('.popup__success').show();
                    }
                    if(response.trim() == "captcha"){
                        $(".input-captcha").addClass("error");
                    }
                }
            });

        }
    });
    $("html body").on("click", ".recode-captcha", function(){
        var box = $(this).parents(".captcha_box");
        $.ajax({
            type: "POST",
            url: "/ajax/captcha-recode.php",
            success: function (code) {
                //console.log(code);
                box.find(".sid-captcha").val(code);
                box.find(".img-captcha").attr("src", "/bitrix/tools/captcha.php?captcha_sid="+code);
            }
        });
    });
    $("html body").on("click", ".popup__document-name", function () {
        var box = $(this).parents(".popup__document");
        var fileInput = $(this).siblings("input");
        if (fileInput.length > 1) {
            fileInput = fileInput[fileInput.length - 1];
            $(fileInput).click();
        } else {
            fileInput.click();
        }
    });
    $("html body").on("input", ".hidden-input-file", function () {
        var box = $(this).parents(".popup__group");
        var fileName = this.files[0]["name"];
        var newInput = $(this).clone();
        var numFile = Number(newInput.attr("data-num-file")) + 1;
        newInput.attr("name", "file[" + numFile + "]");
        newInput.attr("data-num-file", numFile);
        newInput.attr("value", "");
        newInput.val(null);
        $(this).after(newInput);
        box.find(".popup__document:last-child").before('<div class="popup__document --loaded" data-num-input="' + newInput.data("num-file") + '"><div class="popup__document-icon"></div> <div class="popup__document-name">' + fileName + '</div><div class="popup__document-delete"></div></div>');
    });
    $("html body").on("click", ".popup__document-delete", function(){
        var box = $(this).parents(".popup__document");
        var indexInput = Number(box.attr("data-num-input")) - 1;
        var form = $(this).parents("form");
        form.find("input[data-num-file="+indexInput+"]").detach();
        box.detach();
    });
    $('.popup__success-close').on('click', function () {
        $.fancybox.close();
    });


    // COOKIE

    $('.cookie__accept').on('click', function () {
        $(this).closest('.cookie').fadeOut();
    });



    // МАСКА ДЛЯ ТЕЛЕФОНА
    $('.input-phone').inputmask({
        mask: "+ 7(999)999-99-99",
        showMaskOnHover: false,
    });

    // Якоря
    $('.section-link').click(function () {
        var elementClick = $(this).attr("data-href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({
            scrollTop: destination - 150
        }, 1000);
        return false;
    });

    var myHash = location.hash;
    location.hash = '';
    if (myHash[1] != undefined) {
        var offsetTop = $(myHash).offset().top - 150;
        $('html, body').animate({
            scrollTop: offsetTop
        }, 1000);
    }

    $(window).scroll(function () {
        let sections = $('.section');
        sections.each(function (i, el) {
            let top = $(el).offset().top - 100;
            let bottom = top + $(el).height();
            let scroll = $(window).scrollTop();
            let id = $(el).attr('data-href');
            if (scroll > top && scroll < bottom) {
                $('.header__nav-link').removeClass('active');
                $('.header__nav-link[data-href="#' + id + '"]').addClass('active');
            }
        })
    });

    // FANCYBOX
    $('.fancybox-link').fancybox({});

    $('.fancybox-link-quest').fancybox({
        beforeLoad: function( instance, slide ) {
            $.ajax({
                type: "POST",
                url: "/ajax/quest-form.php",
                data: {
                    variant: ""+slide.opts.$orig.data("variant")+"",
                    case_id: slide.opts.$orig.data("case"),
                    mail_template: slide.opts.$orig.data("template")
                },
                dataType: "html",
                success: function (responseData) {
                    $("#quest .popup__form").detach();
                    $("#quest").prepend(responseData);
                    $('.input-phone').inputmask({
                        mask: "+ 7(999)999-99-99",
                        showMaskOnHover: false,
                    });
                }
            });
        }
    });

    // RELLAX
    var rellax = new Rellax('.rellax', {
        speed: 2,
        center: true,
        wrapper: null,
        round: true,
        vertical: true,
        horizontal: false
    });

    var rellaxDevelop = new Rellax('.rellax-develop', {
        speed: .6,
        center: true,
        wrapper: null,
        round: true,
        vertical: true,
        horizontal: false
    });

    // AOS
    AOS.init({
        once: true,
        disable: 'mobile'
    });

    // Анимация графика
    if ($('div').hasClass('demand__reason')) {
        let animationStared = false;
        $(window).scroll(function () {
            if (animationStared) return;
            if ($(window).scrollTop() + $(window).height() > $('.demand__chart svg').height() + $('.demand__chart svg').offset().top) {
                $('#anim-chart')[0].beginElement();
                $('.demand__reason').addClass('active');
                animationStared = true
            }
        });
    }


    // Увеличение блоков при ховере
    $('.increase__item').on('mouseover', function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        if ($(this).index() == 2) {
            $('.increase__item').eq(1).addClass('anim');
        } else {
            $('.increase__item').eq(1).removeClass('anim');
        }
    });


    // ТАБЫ
    $('.why__tabs-btn').on('click', function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active')
            .closest('.why__tabs').find('.why__tabs-content').removeClass('show').eq($(this).index()).addClass('show');
    });


    // SLIDERS
    if ($('div').hasClass('single__slider')) {
        var singleSlider = new Swiper('.single__slider', {
            spaceBetween: 100,
            slidesPerView: 1,
            pagination: {
                el: '.single__slider-pagin',
                type: 'bullets',
                clickable: true,
            },
        });
    }

    if ($('div').hasClass('news__content') && $(window).width() < 767.9) {
        var newsSlider = new Swiper('.news.--section  .news__content', {
            spaceBetween: 20,
            slidesPerView: 1.5,
            freeMode: true
        });
    }
    // КЕЙСЫ
    if ($('div').hasClass('cases__slider')) {
        var casesSlider = new Swiper('.cases__slider', {
            slidesPerView: 3,
            spaceBetween: 20,
            speed: 600,
            navigation: {
                nextEl: '.cases__slider-next',
                prevEl: '.cases__slider-prev',
            },
            breakpoints: {
                577: {
                    direction: 'vertical',
                    spaceBetween: 25,
                }
            },
        });

        casesSlider.snapGrid = casesSlider.slidesGrid.slice(0);

        $('.cases__slider-amount .total').text(casesSlider.slides.length);



        function casesCurrentSlides() {
            $('.cases__slider-amount .current').text(casesSlider.activeIndex + 1);

        }

        casesCurrentSlides();

        casesSlider.on('slideChange', function () {
            casesCurrentSlides();
            $('.cases__slider-item').removeClass('active');
            $('.cases__slider-item').eq(casesSlider.activeIndex).addClass('active');
            casesAnim($('.cases__slider').find('.swiper-slide').eq(casesSlider.activeIndex).attr('data-item'));
        });

        // КЕЙСЫ
        let animCan = true;

        function mobCaseHeight() {
            let caseHeight = $('.cases__item.active').outerHeight();
            $('.cases__c.--cases').css('height', `${caseHeight}px`);
        }
        if ($(window).width() < 767.9) {
            mobCaseHeight();
        }

        function casesAnim(n) {

            if (animCan) {
                $('.--cases').append($('.cases__item.active'));

                $('.cases__item.active').animate({
                    top: '50%',
                    opacity: 0,
                }, 500, function () {
                    $(this).removeClass('active');
                    $(this).attr('style', '');
                });

                $(`.--cases .cases__item[data-case=${n}]`).addClass('active');

                $('.cases__dummy').addClass('animated');
                if ($(window).width() < 767.9) {
                    mobCaseHeight();
                }

                animCan = false;
                setTimeout(function () {
                    $('.cases__dummy').removeClass('animated');
                    $('.--cases').append($('.cases__item.active'));
                    animCan = true;
                }, 510);
            }
        }


        $('.cases__slider').on('click', '.cases__slider-item:not(.cases__slider-item.active)', function () {
            casesSlider.slideTo($(this).index());
            casesAnim($(this).attr('data-item'));
        });

    }


    // Появление панели
    // инициализация слайдера после открытия кейса
    function initDevice() {
        var deviceSlider = new Swiper('.panel__functions-slider', {
            spaceBetween: 100,
            pagination: {
                el: '.panel__functions-pagination',
                type: 'bullets',
                clickable: true,
            },
            navigation: {
                nextEl: '.panel__functions-next',
                prevEl: '.panel__functions-prev',
            },
        });

        function deviceAmount() {
            $('.panel__functions-amount .current').text(deviceSlider.activeIndex + 1);
            $('.panel__functions-amount .total').text(deviceSlider.slides.length);
            $('.panel__functions-text div').hide()
                .eq(deviceSlider.activeIndex).fadeIn();
        }
        deviceAmount();

        deviceSlider.on('slideChange', function () {
            deviceAmount();
        });
    }

    $('.develop .btn').on('click', function () {
        let panelId = $(this).data('panel-id');
        let path = $(this).attr('data-link');
        console.log();
        console.log(123);
        $.ajax({
            type: "POST",
            url: "/ajax/developPanel.php",
            data: {
                panelId: panelId
            },
            dataType: "html",
            success: function (responseData) {
                $(".popup-panel-box").html(responseData);
                setTimeout(() => {
                    $(`.${path}`).addClass('active');
                    if ($(`.${path}`).find('.panel__functions').length > 0) {
                        initDevice();
                    }
                    $('body').addClass('--overflow');
                }, 100);
            }
        });
    });
    // СКРЫТИЕ
    function closePanel() {
        $('.panel').removeClass('active');
        $('body').removeClass('--overflow');
    }
    $("html body").on('click', '.panel__close', function () {
        closePanel();
    });

});


$(window).on('load', function () {
    AOS.refresh();
});