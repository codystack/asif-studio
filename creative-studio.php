<?php
include "./components/head.php";
include "./components/navbar-alt.php";
?>
<style>
    .img-nav-btn  { display: none; }
    .img-close-btn { display: none; }

    @media (min-width: 992px) {
        .img-nav-btn   { display: block !important; }
        .img-close-btn { display: block !important; }
    }
</style>

<header class="tc-innerheader-st16">
    <div class="container">
        <div class="bg-box pb-120">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto">
                    <h1 class="fsz-80 text-uppercase text-center"> Creative Studio </h1>
                </div>
            </div>
        </div>
    </div>
</header>

<main>

    <!-- SECTION 1 — two portrait images -->
    <section class="tc-features-st10 section-padding">
        <div class="container">
            <div class="row justify-content-between align-items-center">

                <div class="col-lg-5 order-first order-lg-first mb-5 mb-lg-0">
                    <div class="wow zoomIn" style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">

                        <div style="border-radius:8px;overflow:hidden;cursor:pointer;height:420px;" onclick="openImageModal('assets/img/cre1.jpeg')">
                            <img src="assets/img/cre1.jpeg" alt="" style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .4s ease;">
                        </div>

                        <div style="border-radius:8px;overflow:hidden;cursor:pointer;height:420px;margin-top:40px;" onclick="openImageModal('assets/img/cre2.jpeg')">
                            <img src="assets/img/cre2.jpeg" alt="" style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .4s ease;">
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 order-last order-lg-last">
                    <div class="info wow fadeInUp" data-wow-delay="0.2s">
                        <div class="cont col-lg-10">
                            <div class="title">
                                <h2 class="fsz-40 mb-30">The Tailoring Gym & Creative Sewing Studio</h2>
                            </div>
                            <p>Professional Workspace for Designers & Makers. A high-performance environment in Milton Keynes to cut, sew, and create.</p>
                            <p class="mt-3">At Yétúndé Asif, we provide the industrial tools and the professional space you need to bring your vision to life. No more cramped tables or domestic machines that can't handle the job. Book your station and work in a professional, heated, and inspiring studio.</p>
                            <h2 class="fsz-30 mt-20">Studio Access & Rates</h2>
                            <p class="mt-1">All bookings include access to our industrial workstations and professional pressing suite.</p>
                        </div>
                        <div class="links">
                            <a href="booking" class="butn text-white bg-000 hover-bg-orange1 hvr-txt-trans text-capitalize mt-30 py-3">
                                <div class="txt" data-text="Book Now"><span> Book Now </span></div> <i class="fal fa-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 2 — single image -->
    <section class="tc-features-st10 section-padding">
        <div class="container">
            <div class="row justify-content-between align-items-center">

                <div class="col-lg-6 order-last order-lg-first">
                    <div class="info wow fadeInUp" data-wow-delay="0.2s">
                        <div class="cont col-lg-10">
                            <h2 class="fsz-30 mt-20">The Independent Maker</h2>
                            <p class="mt-1">
                                Rent a professional workstation and use our facilities to execute your projects at your own pace.
                                <ul style="list-style-type:disc;padding-left:40px;margin:0;" class="mt-2 mb-2">
                                    <li style="margin-bottom:10px;">Hourly Rate: £20 (Minimum 2-hour booking)</li>
                                    <li style="margin-bottom:10px;">The Half-Day Sprint (4 Hours): £70</li>
                                    <li>The Full-Day Intensive (6 Hours): £100</li>
                                </ul>
                            </p>
                            <h2 class="fsz-30 mt-20">The Assisted Session</h2>
                            <p class="mt-1">
                                Need a professional "spotter"? Book a session with Yétúndé for technical support or construction guidance.
                                <ul style="list-style-type:disc;padding-left:40px;margin:0;" class="mt-2 mb-2">
                                    <li style="margin-bottom:10px;">Rate: £35 per hour</li>
                                    <li>Best For: Technical troubleshooting, pattern understanding, or garment finishing.</li>
                                </ul>
                            </p>
                        </div>
                        <div class="links">
                            <a href="booking" class="butn text-white bg-000 hover-bg-orange1 hvr-txt-trans text-capitalize mt-30 py-3">
                                <div class="txt" data-text="Book Now"><span> Book Now </span></div> <i class="fal fa-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 order-first order-lg-last mb-5 mb-lg-0">
                    <div class="wow zoomIn" style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">

                        <div style="border-radius:8px;overflow:hidden;cursor:pointer;height:420px;" onclick="openImageModal('assets/img/cre3.jpeg')">
                            <img src="assets/img/cre3.jpeg" alt="" style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .4s ease;">
                        </div>

                        <div style="border-radius:8px;overflow:hidden;cursor:pointer;height:420px;margin-top:40px;" onclick="openImageModal('assets/img/cre4.jpeg')">
                            <img src="assets/img/cre4.jpeg" alt="" style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .4s ease;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3 — single image -->
    <section class="tc-features-st10" style="padding-bottom:120px;">
        <div class="container">
            <div class="row justify-content-between align-items-center">

                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="wow zoomIn" style="border-radius:8px;overflow:hidden;cursor:pointer;height:500px;" onclick="openImageModal('assets/img/cre5.jpeg')">
                        <img src="assets/img/cre5.jpeg" alt="" style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .4s ease;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="info wow fadeInUp" data-wow-delay="0.2s">
                        <div class="cont col-lg-10">
                            <h2 class="fsz-30 mt-20">Studio Features</h2>
                            <p class="mt-1">
                                <ul style="list-style-type:disc;padding-left:40px;margin:0;" class="mt-2 mb-2">
                                    <li style="margin-bottom:10px;">Industrial Workstations: 3 high-speed industrial machines (Straight stitch & Overlockers).</li>
                                    <li style="margin-bottom:10px;">The Master Cutting Table</li>
                                    <li style="margin-bottom:10px;">Our oversized professional surface — designed for precision.</li>
                                    <li style="margin-bottom:10px;">Professional Pressing: Gravity-feed steam irons for a crisp, high-end finish and professional ironing tools.</li>
                                    <li style="margin-bottom:10px;">Easy to use eyelets and cover buttons maker</li>
                                    <li style="margin-bottom:10px;">Fitting Facilities: Standing mirrors and a private changing area are available for your use.</li>
                                    <li>Climate Controlled: suitable temperature environment so you can focus on your craft.</li>
                                </ul>
                            </p>
                        </div>
                        <div class="links">
                            <a href="booking" class="butn text-white bg-000 hover-bg-orange1 hvr-txt-trans text-capitalize mt-30 py-3">
                                <div class="txt" data-text="Book Now"><span> Book Now </span></div> <i class="fal fa-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
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

        /* Close button — desktop only */
        var closeBtn = document.createElement('button');
        closeBtn.innerHTML = '&times;';
        closeBtn.className = 'img-close-btn';
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

        /* Prev button — desktop only */
        var prevBtn = document.createElement('button');
        prevBtn.innerHTML = '&#8249;';
        prevBtn.className = 'img-nav-btn';
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

        /* Next button — desktop only */
        var nextBtn = document.createElement('button');
        nextBtn.innerHTML = '&#8250;';
        nextBtn.className = 'img-nav-btn';
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
        }

        prevBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            show((current - 1 + images.length) % images.length);
        });

        nextBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            show((current + 1) % images.length);
        });

        /* Touch swipe for mobile */
        var touchStartX = 0;
        overlay.addEventListener('touchstart', function (e) {
            touchStartX = e.changedTouches[0].clientX;
        }, { passive: true });
        overlay.addEventListener('touchend', function (e) {
            var diff = touchStartX - e.changedTouches[0].clientX;
            if (Math.abs(diff) < 40) return;
            if (diff > 0) show((current + 1) % images.length);
            else          show((current - 1 + images.length) % images.length);
        }, { passive: true });

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
        'assets/img/cre1.jpeg',
        'assets/img/cre2.jpeg',
        'assets/img/cre3.jpeg',
        'assets/img/cre4.jpeg',
        'assets/img/cre5.jpeg'
    ];

    function openImageModal(src) {
        var idx = _collageImages.indexOf(src);
        window._setImages(_collageImages, idx === -1 ? 0 : idx);
        window._imgOverlay.style.display = 'flex';
        document.documentElement.style.overflow = 'hidden';
    }

    function closeImageModal() {
        window._imgOverlay.style.display = 'none';
        document.documentElement.style.overflow = '';
    }
</script>