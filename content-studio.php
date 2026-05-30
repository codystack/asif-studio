<?php
include "./components/head.php";
include "./components/navbar-alt.php";
?>

<header class="tc-innerheader-st16">
    <div class="container">
        <div class="bg-box pb-120">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto">
                    <h1 class="fsz-80 text-uppercase text-center"> Content Studio </h1>
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

                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="wow zoomIn" style="border-radius:8px;overflow:hidden;cursor:pointer;height:500px;">
                        <img src="assets/img/OTG_8538.jpg" alt="" style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .4s ease;">
                    </div>
                </div>

                <div class="col-lg-6 order-last order-lg-last">
                    <div class="info wow fadeInUp" data-wow-delay="0.2s">
                        <div class="cont col-lg-10">
                            <div class="title">
                                <h2 class="fsz-40 mb-30">Where Vision Becomes Visual</h2>
                            </div>
                            <p>Asif Studio's content studio is a purpose-built creative environment engineered for creators, brands, and businesses that refuse to compromise on quality. Whether you're launching a brand campaign, filming a product shoot, recording a podcast, or producing content for your audience — this is the space where premium ideas come to life.</p>
                            <p class="mt-3">Designed from the ground up for high-performance content production, every detail of our studio has been curated to give your work a professional edge. From the controlled lighting setup to the versatile backdrops and acoustic-treated podcast room, you'll find everything you need to produce content that commands attention.</p>
                        </div>
                        <div class="links">
                            <a href="booking" class="butn text-white bg-000 hover-bg-orange1 hvr-txt-trans text-capitalize mt-30 py-3">
                                <div class="txt" data-text="Book Now"><span> Book A Space Now </span></div> <i class="fal fa-chevron-right ms-2"></i>
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
                            <div class="title">
                                <h2 class="fsz-40 mb-30">The Space</h2>
                            </div>
                            <p>Photography & Videography Studio — A spacious, naturally lit studio with a full lighting rig, seamless backdrop options, and ample room for full productions, editorial shoots, and brand campaigns.</p>
                            <p class="mt-3">Podcast & Content Room — A dedicated, acoustically considered room fitted for solo creators, panel conversations, and multi-camera setups. Available weekends, with rates from £25–£30 per hour.</p>
                            <p class="mt-3">Event & Production Space — A flexible dry-hire space available for brand activations, pop-ups, workshops, and private productions. Available weekends from £40 per hour.</p>
                        </div>
                        <div class="links">
                            <a href="booking" class="butn text-white bg-000 hover-bg-orange1 hvr-txt-trans text-capitalize mt-30 py-3">
                                <div class="txt" data-text="Book Now"><span> Book Your Session </span></div> <i class="fal fa-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 order-first order-lg-last mb-5 mb-lg-0">
                    <div class="wow zoomIn" style="border-radius:8px;overflow:hidden;cursor:pointer;height:500px;">
                        <img src="assets/img/OTG_8650.jpg" alt="" style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .4s ease;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./components/bookingcta.php"; ?>

</main>

<?php include "./components/footer.php"; ?>