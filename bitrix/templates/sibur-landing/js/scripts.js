$(document).ready(function () {
    // МАСКА ДЛЯ ТЕЛЕФОНА
    $('.input-phone').inputmask({
        mask: "+ 7(999)999-99-99",
        showMaskOnHover: false,
    });


    // ПЛАВНЫЕ ЯКОРЯ ИЗ ШАПКИ
    $('.header__nav-link').on('click', function (e) {
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
            let top = $(el).offset().top;
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


    //WAVES
    var SEPARATION = 100,
        AMOUNTX = 70,
        AMOUNTY = 30;

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
                context.arc(0, 0, .6, 0, PI2, true);
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
                particle.scale.x = particle.scale.y = (Math.sin((ix + count) * 0.3) + 1) * 2 + (Math.sin((iy + count) * 0.5) + 1) * 2;

            }

        }

        renderer.render(scene, camera);

        count += 0.1;

    }
});