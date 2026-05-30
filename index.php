<?php
include "./components/head.php";
include "./components/navbar.php";
?>

<style>
    .masonry-gallery {
        columns: 3;
        column-gap: 12px;
    }
    .masonry-item {
        break-inside: avoid;
        margin-bottom: 12px;
        border-radius: 8px;
        overflow: hidden;
        cursor: pointer;
        position: relative;
    }
    .masonry-item img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform .5s ease;
    }
    .masonry-item::after {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0);
        transition: background .3s ease;
        border-radius: 8px;
    }
    .masonry-item:hover img {
        transform: scale(1.04);
    }
    .masonry-item:hover::after {
        background: rgba(0,0,0,0.15);
    }

    @media (max-width: 991px) {
        .masonry-gallery { columns: 2; }
    }
    @media (max-width: 576px) {
        .masonry-gallery { columns: 1; }
    }
</style>

            <header class="tc-hero-st7">
                <div class="hero-slider">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="slide-item position-relative overflow-hidden">
                                <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.45); z-index: 1;"></div>
                                <div class="container position-relative" style="z-index: 2;">
                                    <div class="info col-lg-8 text-white">
                                        <h1 class="split-text">Crafted To Fit Your Identity</h1>
                                        <div class="text fsz-20 mt-30">
                                            Asif Studio is a premium creative space designed to inspire expression, storytelling, and high-quality content creation.
                                        </div>
                                        <div class="btns mt-5 d-flex">
                                            <a href="booking" class="butn border border-white text-white hover-bg-brown1 hvr-txt-trans text-capitalize px-lg-5">
                                                <div class="txt" data-text="Book Now"><span>Book Now</span></div>
                                            </a>
                                            <a href="#" onclick="openVideoModal('./assets/img/Asif-Studio.mp4'); return false;" class="icon-50 bg-white rounded-circle cr-000 dnf-center ms-4 hover-bg-brown1">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/img/OTG_8617.jpg" alt="" class="bg d-block mx-auto w-100" style="object-fit: cover; object-position: center 80%;">
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="slide-item position-relative overflow-hidden">
                                <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.45); z-index: 1;"></div>
                                <div class="container position-relative" style="z-index: 2;">
                                    <div class="info col-lg-8 text-white">
                                        <h1 class="split-text">Create. Capture. Inspire.</h1>
                                        <div class="text fsz-20 mt-30">
                                            Our studio is open to all brands, creatives, photographers, videographers, and individuals, seeking a refined versatile environment to bring their ideas to life.
                                        </div>
                                        <div class="btns mt-5 d-flex">
                                            <a href="booking" class="butn border border-white text-white hover-bg-brown1 hvr-txt-trans text-capitalize px-lg-5">
                                                <div class="txt" data-text="Book Now"><span>Book Now</span></div>
                                            </a>
                                            <a href="#" onclick="openVideoModal('./assets/img/Asif-Studioo.mp4'); return false;" class="icon-50 bg-white rounded-circle cr-000 dnf-center ms-4 hover-bg-brown1">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/img/OTG_8767.jpg" alt="" class="bg d-block mx-auto w-100" style="object-fit: cover; object-position: center 80%;">
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination swiper-pagination-st2 hrz-pagination"></div>
                </div>
            </header>

            
            <main>

                <section class="tc-portfolio-st7 section-padding bg-light3">
                    <div class="container">
                        <div class="title-wrapper">
                            <h2 class="fsz-100 letters-line"> Space Designed <span class="d-block offset-lg-3"> For Creators </span> </h2>
                            <div class="cont col-lg-4 offset-lg-4">
                                <div class="text fsz-16 cr-666 mt-30"> From content shoots to podcasts and fashion productions, our studio is designed for creators and brands. </div>
                            </div>
                        </div>
                        <div class="cards pt-30 parallaxed-container">
                            <div class="port-card-st7 d-block py-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="row justify-content-between">
                                    <div class="col-lg-5">
                                        <div class="img th-525 parallaxed">
                                            <img src="assets/img/contentStudio.jpg" alt="" class="img-cover" style="border-radius:10px;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="info py-5 d-flex flex-column justify-content-between h-100 pe-lg-5">
                                            <div class="top-cont">
                                                <h3 class="fsz-30"> Content  <br> Studio </h3>
                                                <div class="text fsz-16 cr-666 mt-20">Asif Studio's content studio is a purpose-built creative environment engineered for creators, brands, and businesses that refuse to compromise on quality. Whether you're launching a brand campaign, filming a product shoot, recording a podcast, or producing content for your audience — this is the space where premium ideas come to life.</div>
                                                <div class="text fsz-16 cr-666 mt-20">Designed from the ground up for high-performance content production, every detail of our studio has been curated to give your work a professional edge. From the controlled lighting setup to the versatile backdrops and acoustic-treated podcast room, you'll find everything you need to produce content that commands attention.</div>
                                            </div>
                                            <div class="">
                                                <a href="booking" class="butn bg-brown1 hover-bg-black hvr-txt-trans text-capitalize mt-30"> 
                                                    <div class="txt" data-text="Book a Space"><span> Book a Space </span></div> <i class="fal fa-chevron-right ms-3"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="port-card-st7 d-block py-4 wow fadeInUp mt-80" data-wow-delay="0.2s">
                                <div class="row justify-content-between">
                                    <div class="col-lg-5">
                                        <div class="img th-525 parallaxed">
                                            <img src="assets/img/cre3.jpeg" alt="" class="img-cover" style="border-radius:10px;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="info py-5 d-flex flex-column justify-content-between h-100 pe-lg-5">
                                            <div class="top-cont">
                                                <h3 class="fsz-30"> Creative <br> Studio </h3>
                                                <div class="text fsz-16 cr-666 mt-20">The Asif Studio Creative Studio is Milton Keynes' most refined production environment — built for those who take their craft seriously. This is where brands are built, campaigns are captured, and creative visions are executed without compromise.</div>
                                                <div class="text fsz-16 cr-666 mt-20">We designed this studio for one purpose: to give creators, businesses, and visionaries a professional-grade environment that matches the ambition of their work. Every square foot has been considered. Every detail, intentional.</div>
                                            </div>
                                            <div class="">
                                                <a href="booking" class="butn bg-brown1 hover-bg-black hvr-txt-trans text-capitalize mt-30"> 
                                                    <div class="txt" data-text="Book Now"><span> Book Now </span></div> <i class="fal fa-chevron-right ms-3"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/port7-bg.png" alt="" class="shap">
                </section>

                <section class="pb-120 border-bottom border-wh-1" style="overflow:hidden;">
                    <div class="container">

                        <div class="title-wrapper mb-60">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-8 mx-auto">
                                    <h2 class="fsz-70 text-lg-center my-4 my-lg-0 letters-line"> Create. Shoot. Inspire. </h2>
                                </div>
                            </div>
                        </div>

                        <!-- Masonry gallery -->
                        <div style="columns:4;column-gap:12px;" class="masonry-gallery wow fadeInUp" data-wow-delay="0.1s">

                            <div class="masonry-item" onclick="openImageModal('assets/img/OTG_8542.jpg')">
                                <img src="assets/img/OTG_8542.jpg" alt="">
                            </div>

                            <div class="masonry-item" onclick="openImageModal('assets/img/OTG_8617.jpg')">
                                <img src="assets/img/OTG_8617.jpg" alt="">
                            </div>

                            <div class="masonry-item" onclick="openImageModal('assets/img/OTG_8641.jpg')">
                                <img src="assets/img/OTG_8641.jpg" alt="">
                            </div>

                            <div class="masonry-item" onclick="openImageModal('assets/img/OTG_8676.jpg')">
                                <img src="assets/img/OTG_8676.jpg" alt="">
                            </div>

                            <div class="masonry-item" onclick="openImageModal('assets/img/OTG_8659.jpg')">
                                <img src="assets/img/OTG_8659.jpg" alt="">
                            </div>

                            <div class="masonry-item" onclick="openImageModal('assets/img/OTG_8767.jpg')">
                                <img src="assets/img/OTG_8767.jpg" alt="">
                            </div>

                            <div class="masonry-item" onclick="openImageModal('assets/img/OTG_8802.jpg')">
                                <img src="assets/img/OTG_8802.jpg" alt="">
                            </div>

                            <div class="masonry-item" onclick="openImageModal('assets/img/OTG_8772.jpg')">
                                <img src="assets/img/OTG_8772.jpg" alt="">
                            </div>

                        </div>

                    </div>
                </section>
                
                <?php include "./components/bookingcta.php"; ?>

            </main>


<?php include "./components/footer.php"; ?>


<script>
    (function () {
        var overlay = document.createElement('div');
        Object.assign(overlay.style, {
            display:        'none',
            position:       'fixed',
            top:            '0',
            left:           '0',
            width:          '100%',
            height:         '100%',
            background:     'rgba(0,0,0,0.92)',
            zIndex:         '999999',
            alignItems:     'center',
            justifyContent: 'center',
            padding:        '1rem',
            boxSizing:      'border-box'
        });

        overlay.addEventListener('click', closeVideoModal);

        var wrapper = document.createElement('div');
        Object.assign(wrapper.style, {
            position:  'relative',
            width:     '100%',
            maxWidth:  '900px',
            boxSizing: 'border-box'
        });
        wrapper.addEventListener('click', function (e) { e.stopPropagation(); });

        var closeBtn = document.createElement('button');
        closeBtn.innerHTML = '&times;';
        Object.assign(closeBtn.style, {
            position:   'absolute',
            top:        '-2.5rem',
            right:      '0',
            background: 'none',
            border:     'none',
            color:      '#fff',
            fontSize:   '2rem',
            cursor:     'pointer',
            lineHeight: '1',
            padding:    '0'
        });
        closeBtn.addEventListener('click', closeVideoModal);

        var video = document.createElement('video');
        Object.assign(video.style, {
            width:        '100%',
            display:      'block',
            borderRadius: '8px',
            maxHeight:    '80vh'
        });
        video.controls    = true;
        video.playsinline = true;
        video.setAttribute('preload', 'metadata');

        wrapper.appendChild(closeBtn);
        wrapper.appendChild(video);
        overlay.appendChild(wrapper);
        document.body.appendChild(overlay);

        window._videoOverlay = overlay;
        window._videoEl      = video;
    })();

    function openVideoModal(src) {
        window._videoEl.src             = src;
        window._videoOverlay.style.display = 'flex';
        document.documentElement.style.overflow = 'hidden';
        window._videoEl.play();
    }

    function closeVideoModal() {
        window._videoOverlay.style.display = 'none';
        document.documentElement.style.overflow = '';
        window._videoEl.pause();
        window._videoEl.currentTime = 0;
        window._videoEl.src         = '';
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeVideoModal();
    });
</script>

<script>
    (function () {
        var overlay = document.createElement('div');
        Object.assign(overlay.style, {
            display:        'none',
            position:       'fixed',
            top:            '0',
            left:           '0',
            width:          '100%',
            height:         '100%',
            background:     'rgba(0,0,0,0.92)',
            zIndex:         '999999',
            alignItems:     'center',
            justifyContent: 'center',
            padding:        '1rem',
            boxSizing:      'border-box',
            cursor:         'zoom-out'
        });
        overlay.addEventListener('click', closeImageModal);

        var img = document.createElement('img');
        Object.assign(img.style, {
            maxWidth:     '100%',
            maxHeight:    '90vh',
            borderRadius: '8px',
            display:      'block',
            objectFit:    'contain',
            userSelect:   'none'
        });
        img.addEventListener('click', function (e) { e.stopPropagation(); });

        var closeBtn = document.createElement('button');
        closeBtn.innerHTML = '&times;';
        Object.assign(closeBtn.style, {
            position:   'fixed',
            top:        '1.25rem',
            right:      '1.5rem',
            background: 'none',
            border:     'none',
            color:      '#fff',
            fontSize:   '2.5rem',
            cursor:     'pointer',
            lineHeight: '1',
            zIndex:     '1000000',
            padding:    '0'
        });
        closeBtn.addEventListener('click', closeImageModal);

        var prevBtn = document.createElement('button');
        prevBtn.innerHTML = '&#8249;';
        Object.assign(prevBtn.style, {
            position:     'fixed',
            left:         '1rem',
            top:          '50%',
            transform:    'translateY(-50%)',
            background:   'rgba(255,255,255,0.15)',
            border:       'none',
            color:        '#fff',
            fontSize:     '2.5rem',
            cursor:       'pointer',
            borderRadius: '50%',
            width:        '48px',
            height:       '48px',
            lineHeight:   '1',
            zIndex:       '1000000'
        });

        var nextBtn = document.createElement('button');
        nextBtn.innerHTML = '&#8250;';
        Object.assign(nextBtn.style, {
            position:     'fixed',
            right:        '1rem',
            top:          '50%',
            transform:    'translateY(-50%)',
            background:   'rgba(255,255,255,0.15)',
            border:       'none',
            color:        '#fff',
            fontSize:     '2.5rem',
            cursor:       'pointer',
            borderRadius: '50%',
            width:        '48px',
            height:       '48px',
            lineHeight:   '1',
            zIndex:       '1000000'
        });

        overlay.appendChild(img);
        document.body.appendChild(overlay);
        document.body.appendChild(closeBtn);
        document.body.appendChild(prevBtn);
        document.body.appendChild(nextBtn);

        var images  = [];
        var current = 0;

        function show(index) {
            current = index;
            img.src = images[current];
            prevBtn.style.display = images.length > 1 ? 'block' : 'none';
            nextBtn.style.display = images.length > 1 ? 'block' : 'none';
        }

        prevBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            show((current - 1 + images.length) % images.length);
        });

        nextBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            show((current + 1) % images.length);
        });

        document.addEventListener('keydown', function (e) {
            if (overlay.style.display === 'none') return;
            if (e.key === 'Escape')     closeImageModal();
            if (e.key === 'ArrowLeft')  show((current - 1 + images.length) % images.length);
            if (e.key === 'ArrowRight') show((current + 1) % images.length);
        });

        window._imgOverlay = overlay;
        window._imgEl      = img;
        window._imgClose   = closeBtn;
        window._imgPrev    = prevBtn;
        window._imgNext    = nextBtn;
        window._setImages  = function (arr, idx) { images = arr; show(idx); };
    })();

    var _collageImages = [
        'assets/img/OTG_8542.jpg',
        'assets/img/OTG_8617.jpg',
        'assets/img/OTG_8641.jpg',
        'assets/img/OTG_8676.jpg',
        'assets/img/OTG_8659.jpg',
        'assets/img/OTG_8767.jpg',
        'assets/img/OTG_8802.jpg',
        'assets/img/OTG_8772.jpg'
    ];

    function openImageModal(src) {
        var idx = _collageImages.indexOf(src);
        window._setImages(_collageImages, idx === -1 ? 0 : idx);
        window._imgOverlay.style.display = 'flex';
        window._imgClose.style.display   = 'block';
        document.documentElement.style.overflow = 'hidden';
    }

    function closeImageModal() {
        window._imgOverlay.style.display = 'none';
        window._imgClose.style.display   = 'none';
        window._imgPrev.style.display    = 'none';
        window._imgNext.style.display    = 'none';
        document.documentElement.style.overflow = '';
    }
</script>