$(document).ready(function () {
    function checkRequired(form) {
        var error = false;
        form.find(".required").each(function () {
            $(this).parents(".popup__group").removeClass("error");

            switch ($(this).attr("type")) {
                // case "checkbox":
                //     $(this).parents("label").removeClass("error");
                //     if ($(this).prop('checked') === false) {
                //         $(this).parents("label").addClass("error");
                //         $(this).addClass("error");
                //         error = true;
                //     }
                //     break;
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
    $('.popup__btn').on('click', function (e) {
        e.preventDefault();
        let form = $(this).parents("form");
        console.log(form.find("input[name=consent]").is(':checked'));
        if(formValid(form) && form.find("input[name=consent]").is(':checked')){
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
            $.ajax( {
                type: "POST",
                url: "/ajax/send-form.php",
                processData: false,
                contentType: false,
                data: formData,
                async: false,
                success: function( response ) {
                    console.log(response);
                    if(response.trim() == "send"){
                        form.hide();
                        $('.popup .fancybox-close-small').hide();
                        form.siblings('.popup__success').show();
                    }
                }
            });
        }
    });
    $("html body").on("click", ".popup__document-name", function(){
        var box = $(this).parents(".popup__document");
        var fileInput = $(this).siblings("input");
        if(fileInput.length>1){
            fileInput = fileInput[fileInput.length-1];
            $(fileInput).click();
        }else{
            fileInput.click();
        }
    });
    $("html body").on("input", ".hidden-input-file", function(){
        var box = $(this).parents(".popup__group");
        var fileName = this.files[0]["name"];
        var newInput = $(this).clone();
        var numFile = Number(newInput.attr("data-num-file"))+1;
        newInput.attr("name", "file["+numFile+"]");
        newInput.attr("data-num-file", numFile);
        newInput.attr("value", "");
        newInput.val(null);
        $(this).after(newInput);
        box.find(".popup__document:last-child").before('<div class="popup__document --loaded" data-num-input="'+newInput.data("num-file")+'"><div class="popup__document-icon"></div> <div class="popup__document-name">'+fileName+'</div></div>');
    });
    $('.popup__success-close').on('click', function () {
        $.fancybox.close();
    });


    // МАСКА ДЛЯ ТЕЛЕФОНА
    $('.input-phone').inputmask({
        mask: "+ 7(999)999-99-99",
        showMaskOnHover: false,
    });


    // ПЛАВНЫЕ ЯКОРЯ ИЗ ШАПКИ
    $('.section-link').on('click', function (e) {
        e.preventDefault();
        let id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 1000);
    });

    $(window).scroll(function () {
        let sections = $('section');
        sections.each(function (i, el) {
            let top = $(el).offset().top - 100;
            let bottom = top + $(el).height();
            let scroll = $(window).scrollTop();
            let id = $(el).attr('id');
            if (scroll > top && scroll < bottom) {
                $('a.active').removeClass('active');
                $('a[href="#' + id + '"]').addClass('active');

            }
        })
    });

    // FANCYBOX
    $('.fancybox-link').fancybox({});


    // СМЕНА ЭКРАНА НА СТАРТЕ
    // function showMain() {
    //     $('body').addClass('play-anim');
    //     setTimeout(() => {
    //         $('body').removeClass('first');
    //     }, 500);
    // }

    // $('.start__detail').on('click', function () {
    //     showMain();
    // });

    // $(window).on('wheel', function () {
    //     if ($('body').hasClass('first')) {
    //         showMain();
    //     }
    // });



    // RELLAX
    var rellax = new Rellax('.rellax', {
        speed: 1,
        center: true,
        wrapper: null,
        round: true,
        vertical: true,
        horizontal: false
    });

    // WOW
    new WOW().init();

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

    if ($('div').hasClass('panel__functions-slider')) {
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

    if ($('div').hasClass('news__content') && $(window).width() < 767.9) {
        var newsSlider = new Swiper('.news.--section  .news__content', {
            spaceBetween: 20,
            slidesPerView: 1.5,
            freeMode: true
        });
    }

    if ($('div').hasClass('cases__slider')) {
        var casesSlider = new Swiper('.cases__slider', {
            spaceBetween: 25,
            navigation: {
                nextEl: '.cases__slider-next',
                prevEl: '.cases__slider-prev',
            },
        });

        $('.cases__slider-amount .total').text(casesSlider.slides.length * 3);



        function casesCurrentSlides() {
            $('.cases__slider-amount .current').text((casesSlider.activeIndex + 1) * 3);

        }

        casesCurrentSlides();

        casesSlider.on('slideChange', function () {
            casesCurrentSlides();
            casesAnim($('.cases__slider').find('.swiper-slide').eq(casesSlider.activeIndex).find('.cases__slider-item:first-child').attr('data-item'));
        });

        // КЕЙСЫ
        let animCan = true;

        function casesAnim(n) {

            if (animCan) {
                $('.--cases').append($('.cases__item.active'));

                $('.cases__slider-item').removeClass('active');
                $('.cases__slider-item').eq(n).addClass('active');

                $('.cases__item.active').animate({
                    top: '50%',
                    opacity: 0,
                }, 500, function () {
                    $(this).removeClass('active');
                    $(this).attr('style', '');
                });

                $(`.--cases .cases__item[data-case=${n}]`).addClass('active');

                $('.cases__dummy').addClass('animated');

                animCan = false;
                setTimeout(function () {
                    $('.cases__dummy').removeClass('animated');
                    $('.--cases').append($('.cases__item.active'));
                    animCan = true;
                }, 510);
            }
        }


        $('.cases__slider').on('click', '.cases__slider-item:not(.cases__slider-item.active)', function () {
            casesAnim($(this).attr('data-item'));
        });

    }


    // Появление панели
    $('.develop .btn').on('click', function () {
        let panelId = $(this).data('panel-id');
        let path = $(this).attr('data-link');
        $.ajax( {
            type: "POST",
            url: "/ajax/developPanel.php",
            data: {panelId:panelId},
            dataType: "html",
            success: function( responseData ) {
                //console.log(responseData);
                $(".popup-panel-box").html(responseData);
                $(`.${path}`).addClass('active');
                $('body').addClass('--overflow');
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

    //WAVES
    if ($('div').hasClass('waves')) {
        var SEPARATION = 100,
            AMOUNTX = 50,
            AMOUNTY = 20;

        var container;
        var camera, scene, renderer;

        var particles, particle, count = 0;

        var mouseX = 85,
            mouseY = -342;

        var windowHalfX = window.innerWidth / 2;
        var windowHalfY = window.innerHeight / 2;

        init();
        animate();

        function init() {

            container = document.querySelector('.waves');

            camera = new THREE.PerspectiveCamera(120, window.innerWidth / window.innerHeight, 1, 10000);
            camera.position.z = 1000;

            scene = new THREE.Scene();

            particles = new Array();

            var PI2 = Math.PI * 2;
            var material = new THREE.ParticleCanvasMaterial({

                color: 0xe1e1e1,
                program: function (context) {

                    context.beginPath();
                    context.arc(0, 0, .4, 0, PI2, true);
                    context.fill();

                }

            });

            var i = 0;

            for (var ix = 0; ix < AMOUNTX; ix++) {

                for (var iy = 0; iy < AMOUNTY; iy++) {

                    particle = particles[i++] = new THREE.Particle(material);
                    particle.position.x = ix * SEPARATION - ((AMOUNTX * SEPARATION) / 2);
                    particle.position.z = iy * SEPARATION - ((AMOUNTY * SEPARATION) / 2);
                    scene.add(particle);

                }

            }

            renderer = new THREE.CanvasRenderer();
            renderer.setSize(window.innerWidth, window.innerHeight);
            container.appendChild(renderer.domElement);

            //

            window.addEventListener('resize', onWindowResize, false);

        }

        function onWindowResize() {

            windowHalfX = window.innerWidth / 2;
            windowHalfY = window.innerHeight / 2;

            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();

            renderer.setSize(window.innerWidth, window.innerHeight);

        }

        function animate() {

            requestAnimationFrame(animate);

            render();


        }

        function render() {

            camera.position.x += (mouseX - camera.position.x) * .05;
            camera.position.y += (-mouseY - camera.position.y) * .05;
            camera.lookAt(scene.position);

            var i = 0;

            for (var ix = 0; ix < AMOUNTX; ix++) {

                for (var iy = 0; iy < AMOUNTY; iy++) {

                    particle = particles[i++];
                    particle.position.y = (Math.sin((ix + count) * 0.3) * 50) + (Math.sin((iy + count) * 0.5) * 50);
                    particle.scale.x = particle.scale.y = (Math.sin((ix + count) * .2) + 1) * 2 + (Math.sin((iy + count) * 0.5) + 1) * 2;

                }

            }

            renderer.render(scene, camera);

            count += 0.04;

        }
    }
});