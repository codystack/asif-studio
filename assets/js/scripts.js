/* --------------------------------------------------------------
                        [ global ]
-------------------------------------------------------------- */

    $( function() {

        var wind = $(window);

        wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 200,
            mobile: false,
            live: false
        });
        wow.init();

        // floating cursor move 
        const floatCursorContainers = document.querySelectorAll('.float-cursor-container');
        floatCursorContainers.forEach(container => {
            const floatCursor = container.querySelector('.float-cursor');
            let mouseX = 0, mouseY = 0;
            let isMoving = false;
            container.addEventListener('mouseenter', () => {
                floatCursor.style.opacity = '1';
                floatCursor.style.transform = 'scale(1)';
            });
            container.addEventListener('mousemove', (e) => {
                const rect = container.getBoundingClientRect();
                mouseX = e.clientX - rect.left - 75;
                mouseY = e.clientY - rect.top - 75;
                isMoving = true;
            });
            function updateCursor() {
                if (isMoving) {
                    floatCursor.style.left = `${mouseX}px`;
                    floatCursor.style.top = `${mouseY}px`;
                    isMoving = false;
                }
                requestAnimationFrame(updateCursor);
            }
            updateCursor();
            container.addEventListener('mouseleave', () => {
                floatCursor.style.opacity = '0';
                floatCursor.style.transform = 'scale(0)';
            });
        });

        // joy button
        const strength = 40;
        document.addEventListener('mousemove', (e) => {
            document.querySelectorAll('.arrow-cir-st1').forEach(btn => {
                const rect = btn.getBoundingClientRect();
                const btnX = rect.left + rect.width / 2;
                const btnY = rect.top + rect.height / 2;

                const distanceX = e.clientX - btnX;
                const distanceY = e.clientY - btnY;
                const distance = Math.sqrt(distanceX ** 2 + distanceY ** 2);

                if (distance < 200) {
                    const moveX = (distanceX / rect.width) * strength;
                    const moveY = (distanceY / rect.height) * strength;
                    btn.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.05)`;
                } else {
                    btn.style.transform = `translate(0, 0) scale(1)`;
                }
            });
        });



        // plus & minus btns 
        // $(".plus-btn").click(function() {
        //     let input = $(this).siblings(".qt-input");
        //     let value = parseInt(input.val());
        //     input.val(value + 1);
        // });
        // $(".minus-btn").click(function() {
        //     let input = $(this).siblings(".qt-input");
        //     let value = parseInt(input.val());
        //     if (value > 1) {
        //         input.val(value - 1);
        //     }
        // });
        

        // img height same width 
        var imgWidth = $(".img-h-w").width();
        $(".img-h-w").each(function() {
            $(this).css("height", imgWidth);
        });


        // ---------- background change -----------
        var pageSection = $(".bg-img");
        pageSection.each(function (indx) {

            if ($(this).attr("data-background")) {
                $(this).css("background-image", "url(" + $(this).data("background") + ")");
            }
        });

        // split text 
        const splits = document.querySelectorAll('.split-txt');
        splits.forEach(div => {
            const text = div.textContent;
            div.innerHTML = '';
            for (let i = 0; i < text.length; i++) {
                const span = document.createElement('span');
                span.textContent = text[i];
                div.appendChild(span);
            }
        });

        // -------- counter --------
        // $('.counter').countUp({
        //     delay: 10,
        //     time: 2000
        // });
        


        // ------------ working in desktop -----------
        if ($(window).width() > 991) {
                $('.parallaxie').parallaxie({
            });
        }

        // ---------- tooltip -----------
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        })
            
    });

    // -------- Enhanced Parallax img mouse move -------
    if ($(window).width() > 991) {
        $(function () {
            
            var parallaxContainers = document.getElementsByClassName("parallaxed-container");

            for (var j = 0; j < parallaxContainers.length; j++) {
                var container = parallaxContainers[j];
                
                container.addEventListener("mouseenter", function(event) {
                    this.addEventListener("mousemove", parallaxed);
                });
                
                container.addEventListener("mouseleave", function(event) {
                    this.removeEventListener("mousemove", parallaxed);
                    // Reset transforms when mouse leaves
                    var parallaxElements = this.getElementsByClassName("parallaxed");
                    for (var i = 0; i < parallaxElements.length; i++) {
                        parallaxElements[i].style.transform = 'translate(0px, 0px) scale(1)';
                    }
                });
            }

            function parallaxed(e) {
                var container = this;
                var containerRect = container.getBoundingClientRect();
                var mouseX = e.clientX - containerRect.left;
                var mouseY = e.clientY - containerRect.top;
                var containerWidth = containerRect.width;
                var containerHeight = containerRect.height;
                
                // Calculate normalized mouse position (-1 to 1)
                var normalizedX = (mouseX / containerWidth) * 2 - 1;
                var normalizedY = (mouseY / containerHeight) * 2 - 1;
                
                var parallaxElements = container.getElementsByClassName("parallaxed");
                
                for (var i = 0; i < parallaxElements.length; i++) {
                    var element = parallaxElements[i];
                    var elementRect = element.getBoundingClientRect();
                    var elementCenterX = elementRect.left + elementRect.width / 2 - containerRect.left;
                    var elementCenterY = elementRect.top + elementRect.height / 2 - containerRect.top;
                    
                    // Calculate distance from mouse to element center
                    var distanceX = (mouseX - elementCenterX) / containerWidth;
                    var distanceY = (mouseY - elementCenterY) / containerHeight;
                    
                    // Different movement intensity based on element index
                    var intensity = 0.4 + (i * 0.15); // Increased intensity
                    
                    // Movement calculations - increased values
                    var amountMovedX = distanceX * intensity * 50;
                    var amountMovedY = distanceY * intensity * 50;
                    
                    // Enhanced scale based on mouse proximity
                    var scale = 1 + (Math.abs(distanceX) + Math.abs(distanceY)) * 0.05;
                    
                    // Combine transformations
                    element.style.transform = `
                        translate(${amountMovedX}px, ${amountMovedY}px) 
                        scale(${scale})
                    `;
                }
            }
        });
    }


    // // ------------ letters line -----------
    // document.querySelectorAll(".letters-line").forEach(title => {
    //     function processTextNodes(element) {
    //         const walker = document.createTreeWalker(element, NodeFilter.SHOW_TEXT, null, false);
    //         const textNodes = [];
    //         let node;
    //         while (node = walker.nextNode()) {
    //             if (node.textContent.trim() !== '') {
    //                 textNodes.push(node);
    //             }
    //         }

    //         textNodes.forEach(textNode => {
    //             const text = textNode.textContent;
    //             const parent = textNode.parentNode;

    //             // Split into words first
    //             const words = text.split(/(\s+)/); // keep spaces

    //             const fragment = document.createDocumentFragment();

    //             words.forEach(word => {
    //                 if (word.trim() === "") {
    //                     const space = document.createTextNode(word);
    //                     fragment.appendChild(space);
    //                 } else {
    //                     const wordWrapper = document.createElement("span");
    //                     wordWrapper.className = "word";
    //                     wordWrapper.style.display = "inline-block"; // prevents line break within word

    //                     // Create spans for each letter
    //                     word.split("").forEach(char => {
    //                         const span = document.createElement("span");
    //                         span.className = "letter";
    //                         span.innerHTML = char;
    //                         wordWrapper.appendChild(span);
    //                     });

    //                     fragment.appendChild(wordWrapper);
    //                 }
    //             });

    //             parent.replaceChild(fragment, textNode);
    //         });
    //     }

    //     processTextNodes(title);

    //     gsap.from(title.querySelectorAll(".letter"), {
    //         scrollTrigger: {
    //             trigger: title,
    //             start: "top 80%",
    //             toggleActions: "play none none reverse"
    //         },
    //         opacity: 0,
    //         y: 50,
    //         duration: 0.6,
    //         delay: 0.3,
    //         stagger: 0.03,
    //         ease: "power4.out"
    //     });
    // });




    // ------------ hover tab cards -----------
    $(document).ready(function () {
        $(".hover-tabs").each(function () {
            var $container = $(this);

            $container.find(".info-cards .item").on("mouseenter", function () {
            var tabId = $(this).data("tab");

            // $(this).find(".bod").slideDown(200);
            // $(this).siblings().find(".bod").slideUp(200);

            // Add active to this item only inside this container
            $container.find(".info-cards .item").removeClass("active");
            $(this).addClass("active");

            // Show related tab-card inside this container
            $container.find(".tabs-cards .tab-card").removeClass("active");
            $container.find('.tabs-cards .tab-card[data-tab-item="' + tabId + '"]').addClass("active");
            });
        });
    });



    // ------------ Preloader -----------
    $( function() {
        const svg = document.getElementById("svg");
        const tl = gsap.timeline();
        const curve = "M0 502S175 272 500 272s500 230 500 230V0H0Z";
        const flat = "M0 2S175 1 500 1s500 1 500 1V0H0Z";

        tl.to(".loader-wrap-heading .load-text , .loader-wrap-heading .cont", {
            delay: 1.5,
            y: -100,
            opacity: 0,
        });
        tl.to(svg, {
            duration: 0.5,
            attr: { d: curve },
            ease: "power2.easeIn",
        }).to(svg, {
            duration: 0.5,
            attr: { d: flat },
            ease: "power2.easeOut",
        });
        tl.to(".loader-wrap", {
            y: -1500,
        });
        tl.to(".loader-wrap", {
            zIndex: -1,
            display: "none",
        });
        tl.from(
            "header",
            {
                y: 200,
            },
            "-=1.5"
        );
        tl.from(
            "header .container",
            {
                y: 40,
                opacity: 0,
                delay: 0.3,
            },
            "-=1.5"
        );
    });


    // ------------ mousecursor scripts -----------
    $(function () {
      function mousecursor() {
        if ($("body")) {
          const e = document.querySelector(".cursor-inner"),
            t = document.querySelector(".cursor-outer");
          let n,
            i = 0,
            o = !1;
          (window.onmousemove = function (s) {
            o ||
              (t.style.transform =
                "translate(" + s.clientX + "px, " + s.clientY + "px)"),
              (e.style.transform =
                "translate(" + s.clientX + "px, " + s.clientY + "px)"),
              (n = s.clientY),
              (i = s.clientX);
          }),
            $("body").on("mouseenter", "a, .cursor-pointer", function () {
              e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
            }),
            $("body").on("mouseleave", "a, .cursor-pointer", function () {
              e.classList.remove("cursor-hover"),
                t.classList.remove("cursor-hover");
            }),
            // $("body").on("mouseenter", ".swiper-wrapper.curs-scroll", function () {
            //     e.classList.add("cursor-scroll"), t.classList.add("cursor-scroll")
            // }), $("body").on("mouseleave", ".swiper-wrapper.curs-scroll", function () {
            //     $(this).is("a") && $(this).closest(".cursor-pointer").length || (e.classList.remove("cursor-scroll"), t.classList.remove("cursor-scroll"))
            // }),

            (e.style.visibility = "visible"),
            (t.style.visibility = "visible");
        }
      }

      $(function () {
        mousecursor();
      });
    });

    // simple parallax image
    document.addEventListener("DOMContentLoaded", function () {
      const images = document.querySelectorAll(".parallax-img");
      new simpleParallax(images, {
        // orientation: 'right',
        scale: 1.3,
        // overflow: true,
        delay: 0.4,
        transition: "cubic-bezier(0.25, 1, 0.5, 1)",
        // maxTransition: 50,
        // customContainer: '.scroll-container',
        // customWrapper: '.image-wrapper'
      });
    });


    // swiper text animation function 
    let currentSplits = [];

    function animateSplitText(slide) {
        if (typeof gsap === 'undefined' || typeof SplitText === 'undefined' || !slide) return;

        // revert any previous splits
        currentSplits.forEach(split => split.revert());
        currentSplits = [];

        const splitTextElements = slide.querySelectorAll('.split-text');
        splitTextElements.forEach((element, index) => {
            // split into words and chars
            const splitInstance = new SplitText(element, { type: "words,chars" });
            currentSplits.push(splitInstance);

            // prevent words from breaking
            splitInstance.words.forEach(word => {
                word.style.display = "inline-block";
                word.style.whiteSpace = "nowrap";
            });

            // animate characters smoothly
            gsap.fromTo(
                splitInstance.chars,
                { opacity: 0, y: 50 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.6,
                    stagger: 0.05,
                    ease: "power2.out",
                    delay: 0.4 + (index * 0.1)
                }
            );
        });
    }


/* --------------------------------------------------------------
                        [ gsap scripts ]
-------------------------------------------------------------- */
$(function () {
  gsap.registerPlugin(ScrollTrigger, ScrollSmoother, SplitText);

  // ---------- ScrollSmoother ----------
  let smoother = ScrollSmoother.create({
    smooth: 1.5,
    effects: true,
  });

  // ---------- js-title ----------
  let headings = gsap.utils.toArray(".js-title").reverse();
  headings.forEach((heading, i) => {
    let headingIndex = i + 1;
    let mySplitText = new SplitText(heading, { type: "chars" });
    let chars = mySplitText.chars;

    chars.forEach((char, i) => {
      smoother.effects(char, { lag: (i + headingIndex) * 0.1, speed: 1 });
    });
  });

  // ---------- js-splittext-lines ----------
  let splitTextLines = gsap.utils.toArray(".js-splittext-lines");

  splitTextLines.forEach((splitTextLine) => {
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: splitTextLine,
        start: "top 90%",
        end: "bottom 60%",
        scrub: false,
        markers: false,
        toggleActions: "play none none none",
      },
    });

    const itemSplitted = new SplitText(splitTextLine, { type: "lines" });
    gsap.set(splitTextLine, { perspective: 400 });
    tl.from(itemSplitted.lines, {
      duration: 1,
      delay: 0.5,
      opacity: 0,
      rotationX: -30,
      translateY: 50,
      force3D: true,
      transformOrigin: "top center -50",
      stagger: 0.1,
    });
  });

  ScrollTrigger.refresh();
});




/* --------------------------------------------------------------
                        [ home 1 scripts ]
-------------------------------------------------------------- */


// ------------ swiper sliders -----------
$(document).ready(function () {

    // hero slider 1
    var heroSwiper1 = new Swiper('.tc-hero-st1 .hero-slider', {
        slidesPerView: 1,
        spaceBetween: 50,
        speed: 1500,
        pagination: {
            el: '.tc-hero-st1 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },
        loop: false,
        on: {
            init: function () {
                setTimeout(() => {
                    animateSplitText(this.slides[this.activeIndex]);
                    updateCustomPagination1(this);
                }, 100);
            },
            slideChange: function () {
                animateSplitText(this.slides[this.activeIndex]);
                updateCustomPagination1(this);
            }
        }
    });

    // custom pagination for slider 1
    function updateCustomPagination1(swiper) {
        const totalSlides = swiper.slides.length - (swiper.loop ? 2 : 0);
        const currentIndex = swiper.realIndex + 1;

        const customPagination = document.querySelector('.tc-hero-st1 .numbers-pagination');
        if (customPagination) {
            customPagination.innerHTML = `
                <span class="slide-cont">${currentIndex}</span>
                <span class="slide-mark"></span>
                <span class="slide-all">${totalSlides}</span>
            `;
        }
    }


    // portfolio slider
    var swiper = new Swiper('.tc-portfolio-st1 .portfolio-slider', {
        spaceBetween: 40,
        centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-portfolio-st1 .swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.tc-portfolio-st1 .swiper-button-next',
            prevEl: '.tc-portfolio-st1 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 1.6,
            }
        }
    });


    // testimonials slider
    var swiper = new Swiper('.tc-testimonials-st1 .testi-slider', {
        spaceBetween: 1,
        centeredSlides: true,
        speed: 1500,
        pagination: false,
        navigation: {
            nextEl: '.tc-testimonials-st1 .swiper-button-next',
            prevEl: '.tc-testimonials-st1 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
    });


    // clients slider
    var swiper = new Swiper('.tc-clients-st1 .clients-slider', {
        spaceBetween: 40,
        // centeredSlides: true,
        speed: 1500,
        pagination: false,
        navigation: false,
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: false,
        breakpoints: {
            0: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 5,
            }
        }
    });


    // blog slider
    var swiper = new Swiper('.tc-blog-st1 .blog-slider', {
        spaceBetween: 100,
        // centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-blog-st1 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 3,
            }
        }
    });
    

});




/* --------------------------------------------------------------
                        [ home 2 scripts ]
-------------------------------------------------------------- */


// ------------ swiper sliders -----------
$(document).ready(function () {

    // hero slider 2 - main
    var heroSwiper2Main = new Swiper('.tc-hero-st2 .hero-slider', {
        slidesPerView: 1,
        spaceBetween: 5,
        speed: 1500,
        pagination: {
            el: '.tc-hero-st2 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        allowTouchMove: false,
        a11y: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },
        loop: false,
        on: {
            init: function () {
                setTimeout(() => {
                    animateSplitText(this.slides[this.activeIndex]);
                    updateCustomPagination2(this);
                }, 100);
            },
            slideChange: function () {
                animateSplitText(this.slides[this.activeIndex]);
                updateCustomPagination2(this);
            }
        }
    });

    // hero slider 2 - thumbs
    var heroSwiper2Thumbs = new Swiper('.tc-hero-st2 .thumb-slider', {
        slidesPerView: 1,
        spaceBetween: 5,
        speed: 1500,
        pagination: {
            el: '.tc-hero-st2 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        allowTouchMove: false,
        a11y: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },
        loop: false,
    });

    // custom pagination for slider 2
    function updateCustomPagination2(swiper) {
        const totalSlides = swiper.slides.length - (swiper.loop ? 2 : 0);
        const currentIndex = swiper.realIndex + 1;

        const customPagination = document.querySelector('.tc-hero-st2 .numbers-pagination');
        if (customPagination) {
            customPagination.innerHTML = `
                <span class="slide-cont">${currentIndex}</span>
                <span class="slide-mark"></span>
                <span class="slide-all">${totalSlides}</span>
            `;
        }
    }



    // blog slider
    var swiper = new Swiper('.tc-portfolio-st2 .portfolio-slider', {
        spaceBetween: 50,
        // centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-portfolio-st2 .swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.tc-portfolio-st2 .swiper-button-next',
            prevEl: '.tc-portfolio-st2 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 3.4,
            }
        }
    });


    // testimonials slider
    var swiper = new Swiper('.tc-testimonials-st2 .testi-slider', {
        slidesPerView: 1,
        spaceBetween: 50,
        // centeredSlides: true,
        speed: 1500,
        pagination: false,
        navigation: {
            nextEl: '.tc-testimonials-st2 .next-btn',
            // prevEl: '.tc-portfolio-st2 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
    });


    // clients slider
    var swiper = new Swiper('.tc-clients-st2 .clients-slider', {
        spaceBetween: 40,
        // centeredSlides: true,
        speed: 1500,
        pagination: false,
        navigation: false,
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: false,
        breakpoints: {
            0: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 5,
            }
        }
    });




});



/* --------------------------------------------------------------
                        [ home 3 scripts ]
-------------------------------------------------------------- */


// ------------ swiper sliders -----------
$(document).ready(function () {

    // hero slider 3
    var heroSwiper3 = new Swiper('.tc-hero-st3 .hero-slider', {
        slidesPerView: 1,
        spaceBetween: 5,
        speed: 1500,
        pagination: {
            el: '.tc-hero-st3 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        allowTouchMove: false,
        a11y: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },
        loop: false,
        on: {
            init: function () {
                setTimeout(() => {
                    animateSplitText(this.slides[this.activeIndex]);
                }, 100);
            },
            slideChange: function () {
                animateSplitText(this.slides[this.activeIndex]);
            }
        }
    });


    // services slider
    var swiper = new Swiper('.tc-services-st3 .services-slider', {
        spaceBetween: 20,
        // centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-services-st3 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 4,
            }
        }
    });


    // portfolio slider
    var swiper = new Swiper('.tc-portfolio-st3 .portfolio-slider', {
        spaceBetween: 20,
        // centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-portfolio-st3 .swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.tc-portfolio-st3 .swiper-button-next',
            prevEl: '.tc-portfolio-st3 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 4,
            }
        },
        on: {
            slideChange: function () {
              var activeIndex = this.activeIndex;
              var realIndex = this.slides.eq(activeIndex).attr('data-swiper-slide-index');
             $('.swiper-slide').removeClass('swiper-slide-nth-prev-2 swiper-slide-nth-next-2 swiper-slide-nth-prev-3 swiper-slide-nth-next-3');
             $('.swiper-slide[data-swiper-slide-index="'+realIndex+'"]').prev().prev().addClass('swiper-slide-nth-prev-2');
             $('.swiper-slide[data-swiper-slide-index="'+realIndex+'"]').next().next().addClass('swiper-slide-nth-next-2');
             $('.swiper-slide[data-swiper-slide-index="'+realIndex+'"]').prev().prev().prev().addClass('swiper-slide-nth-prev-3');
             $('.swiper-slide[data-swiper-slide-index="'+realIndex+'"]').next().next().next().addClass('swiper-slide-nth-next-3');
            },
        }
    });


    // services slider
    var swiper = new Swiper('.tc-testimonials-st3 .testi-slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        // centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-testimonials-st3 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
    });


    // blog slider
    var swiper = new Swiper('.tc-blog-st3 .blog-slider', {
        spaceBetween: 100,
        // centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-blog-st3 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 3,
            }
        }
    });


});



/* --------------------------------------------------------------
                        [ home 4 scripts ]
-------------------------------------------------------------- */


// ------------ swiper sliders -----------
$(document).ready(function () {

    // testimonials slider
    var swiper = new Swiper('.tc-testimonials-st4 .testi-slider', {
        spaceBetween: 1,
        centeredSlides: true,
        speed: 1500,
        pagination: false,
        navigation: {
            nextEl: '.tc-testimonials-st4 .swiper-button-next',
            prevEl: '.tc-testimonials-st4 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
    });


});

// about list item hover 
$(document).ready(function () {
  const $listItems = $(".tc-about-st4 .links-list .list-item");
  const $imgs = $(".tc-about-st4 .imgs .img");

  function activateItem($item) {
    const imgIndex = $item.data("img");

    $listItems.removeClass("active");
    $item.addClass("active");

    $imgs.removeClass("active");
    $(`.tc-about-st4 .imgs .img-${imgIndex}`).addClass("active");
  }


  $listItems.hover(function () {
    activateItem($(this));
  });
  
});





/* --------------------------------------------------------------
                        [ home 5 scripts ]
-------------------------------------------------------------- */


// ------------ swiper sliders -----------
$(document).ready(function () {

    // services slider
    var swiper = new Swiper('.tc-portfolio-st5 .portfolio-slider', {
        spaceBetween: 20,
        // centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-portfolio-st5 .swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.tc-portfolio-st5 .swiper-button-next',
            prevEl: '.tc-portfolio-st5 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 1,
            },
            787: {
                slidesPerView: 1,
            },
            991: {
                slidesPerView: 1,
            },
            1200: {
                slidesPerView: 1.4,
            }
        }
    });


    // services slider
    var swiper = new Swiper('.tc-team-st5 .team-slider', {
        spaceBetween: 20,
        // centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-team-st5 .swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.tc-team-st5 .swiper-button-next',
            prevEl: '.tc-team-st5 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 1,
            },
            787: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }
        }
    });


});



/* --------------------------------------------------------------
                        [ home 6 scripts ]
-------------------------------------------------------------- */


// ------------ swiper sliders -----------
$(document).ready(function () {

    // hero slider 6
    var heroSwiper6 = new Swiper('.tc-hero-st6 .hero-slider', {
        slidesPerView: 1,
        spaceBetween: 5,
        speed: 1500,
        pagination: false,
        navigation: false,
        mousewheel: false,
        keyboard: true,
        // allowTouchMove: false,
        // a11y: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },
        loop: false,
        parallax: true,
        on: {
            init: function () {
                if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined') {
                    setTimeout(() => {
                        const activeSlide = this.slides[this.activeIndex];
                        animateSplitText(activeSlide);
                    }, 100);
                }

                // parallax attr
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    $(swiper.slides[i])
                        .find(".bg")
                        .attr({
                            "data-swiper-parallax": 0.75 * swiper.width,
                        });
                }
            },
            slideChange: function () {
                if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined') {
                    const activeSlide = this.slides[this.activeIndex];
                    animateSplitText(activeSlide);
                }
            },
            resize: function () {
                this.update();
            },
        }
    });


    // categories slider
    var swiper = new Swiper('.tc-categories-st6 .categories-slider', {
        spaceBetween: 65,
        // centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-categories-st6 .swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.tc-categories-st6 .swiper-button-next',
            prevEl: '.tc-categories-st6 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            787: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 6,
            }
        }
    });


    // products slider
    var swiper = new Swiper('.tc-products-st6 .products-slider', {
        spaceBetween: 25,
        // centeredSlides: true,
        speed: 1500,
        pagination: false,
        navigation: {
            nextEl: '.tc-products-st6 .swiper-button-next',
            prevEl: '.tc-products-st6 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 1,
            },
            787: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }
        }
    });


});



/* --------------------------------------------------------------
                        [ home 7 scripts ]
-------------------------------------------------------------- */


// ------------ swiper sliders -----------
$(document).ready(function () {

    // hero slider 7
    var heroSwiper7 = new Swiper('.tc-hero-st7 .hero-slider', {
        slidesPerView: 1,
        spaceBetween: 5,
        speed: 1500,
        pagination: {
            el: '.tc-hero-st7 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        // allowTouchMove: false,
	    // a11y: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },
        loop: false,
        parallax: true,
        on: {
            init: function () {
                if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined') {
                    setTimeout(() => {
                        const activeSlide = this.slides[this.activeIndex];
                        animateSplitText(activeSlide);
                    }, 100);
                }
            },
            slideChange: function () {
                if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined') {
                    const activeSlide = this.slides[this.activeIndex];
                    animateSplitText(activeSlide);
                }
            },
            init: function () {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    $(swiper.slides[i])
                        .find(".bg")
                        .attr({
                            "data-swiper-parallax": 0.75 * swiper.width,
                        });
                }
            },
            resize: function () {
                this.update();
            },
        }
    });


    // testimonials 7 slider
    var swiper = new Swiper('.tc-testimonials-st7 .testi-slider', {
        slidesPerView: 5,
        spaceBetween: 30,
        centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-testimonials-st7 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 3,
            }
        }
    });


    // team 7 slider
    var swiper = new Swiper('.tc-team-st7 .team-slider', {
        slidesPerView: 5,
        spaceBetween: 30,
        centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-team-st7 .swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.tc-team-st7 .swiper-button-next',
            prevEl: '.tc-team-st7 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 3,
            }
        }
    });



});




/* --------------------------------------------------------------
                        [ home 8 scripts ]
-------------------------------------------------------------- */


// ------------ swiper sliders -----------
$(document).ready(function () {

    // hero slider 8
    var heroSwiper8 = new Swiper('.tc-hero-st8 .hero-slider', {
        slidesPerView: 1,
        spaceBetween: 5,
        speed: 1500,
        pagination: false,
        navigation: {
            nextEl: '.tc-hero-st8 .swiper-button-next',
            prevEl: '.tc-hero-st8 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        // allowTouchMove: false,
        // a11y: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },
        loop: false,
        parallax: true,
        on: {
            init: function () {
                if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined') {
                    setTimeout(() => {
                        const activeSlide = this.slides[this.activeIndex];
                        animateSplitText(activeSlide);
                    }, 100);
                }

                // parallax attr
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    $(swiper.slides[i])
                        .find(".bg")
                        .attr({
                            "data-swiper-parallax": 0.75 * swiper.width,
                        });
                }
            },
            slideChange: function () {
                if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined') {
                    const activeSlide = this.slides[this.activeIndex];
                    animateSplitText(activeSlide);
                }
            },
            resize: function () {
                this.update();
            },
        }
    });


    // hero slider 8
    var portfolioSwiper8 = new Swiper('.tc-portfolio-st8 .portfolio-slider', {
        slidesPerView: 1,
        spaceBetween: 5,
        speed: 1500,
        pagination: false,
        navigation: {
            nextEl: '.tc-portfolio-st8 .swiper-button-next',
            prevEl: '.tc-portfolio-st8 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        // allowTouchMove: false,
        // a11y: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },
        loop: false,
    });

    portfolioSwiper8.on("slideChangeTransitionStart", function () {
    let currentSlide = portfolioSwiper8.slides[portfolioSwiper8.activeIndex];

    let images = currentSlide.querySelectorAll(".img-cover");

    images = Array.from(images).sort(() => Math.random() - 0.5);

    gsap.set(images, { opacity: 0, scale: 1.2 });
        gsap.to(images, {
            opacity: 1,
            scale: 1,
            duration: 1.2,
            ease: "power3.out",
            stagger: 0.2,
            delay: 0.3
        });
    });


    // partners 8 slider
    var swiper = new Swiper('.tc-partners-st8 .partners-slider', {
        slidesPerView: 5,
        spaceBetween: 30,
        // centeredSlides: true,
        speed: 1500,
        pagination: false,
        navigation: false,
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 5,
            }
        }
    });


    // partners 8 slider
    var swiper = new Swiper('.tc-team-st8 .team-slider', {
        slidesPerView: 5,
        spaceBetween: 30,
        // centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-team-st8 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 3,
            }
        }
    });


});


// ------------ home 8 side-navbar -----------
$(".toggle-btn-st8").on("click", function(){
    $(".aside-navbar-st8").toggleClass("show")
})




/* --------------------------------------------------------------
                        [ home 9 scripts ]
-------------------------------------------------------------- */


// ------------ swiper sliders -----------
$(document).ready(function () {

    // services 9 slider
    var swiper = new Swiper('.tc-services-st9 .services-slider', {
        slidesPerView: 4,
        spaceBetween: 200,
        // centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-services-st9 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }
        }
    });


    // portfolio 9 slider
    var swiper = new Swiper('.tc-portfolio-st9 .portfolio-slider', {
        slidesPerView: 3,
        spaceBetween: 10,
        centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-portfolio-st9 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 3.4,
            }
        }
    });


    // testi 9 slider
    var swiper = new Swiper('.tc-testimonials-st9 .testi-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 1500,
        pagination: false,
        navigation: {
            nextEl: '.tc-testimonials-st9 .swiper-button-next',
            prevEl: '.tc-testimonials-st9 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
    });


    // ------------ process title -----------
    var swiper = new Swiper('.tc-process-st9 .lg-title-slider', {
        slidesPerView: "auto",
        spaceBetween: 50,
        centeredSlides: true,
        pagination: false,
        navigation: false,
        mousewheel: false,
        keyboard: true,
        speed: 50000,
        allowTouchMove: false,
        a11y: false,
        autoplay: {
            delay: 1,
        },
        loop: true,
    });


});


/* --------------------------------------------------------------
                        [ home 10 scripts ]
-------------------------------------------------------------- */


// ------------ swiper sliders -----------
$(document).ready(function () {

    // hero slider 10
    var heroSwiper10 = new Swiper('.tc-hero-st10 .hero-slider', {
        slidesPerView: 1,
        spaceBetween: 5,
        speed: 2000,
        pagination: {
            el: '.tc-hero-st10 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        allowTouchMove: false,
        a11y: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },
        loop: false,
        parallax: true,
        on: {
            init: function () {
                if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined') {
                    setTimeout(() => {
                        const activeSlide = this.slides[this.activeIndex];
                        animateSplitText(activeSlide);
                    }, 100);
                }

                // parallax attr
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    $(swiper.slides[i])
                        .find(".bg")
                        .attr({
                            "data-swiper-parallax": 0.75 * swiper.width,
                        });
                }
            },
            slideChange: function () {
                if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined') {
                    const activeSlide = this.slides[this.activeIndex];
                    animateSplitText(activeSlide);
                }
            },
            resize: function () {
                this.update();
            },
        }
    });


    // portfolio 10 slider
    var swiper = new Swiper('.tc-portfolio-st10 .portfolio-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 1500,
        pagination: false,
        navigation: {
            nextEl: '.tc-portfolio-st10 .swiper-button-next',
            prevEl: '.tc-portfolio-st10 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
    });


    // services 10 slider
    var swiper = new Swiper('.tc-team-st10 .team-slider', {
        slidesPerView: 4,
        spaceBetween: 30,
        // centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-team-st10 .swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.tc-team-st10 .swiper-button-next',
            prevEl: '.tc-team-st10 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 6,
            }
        },
        on: {
            slideChange: function () {
              var activeIndex = this.activeIndex;
              var realIndex = this.slides.eq(activeIndex).attr('data-swiper-slide-index');
             $('.swiper-slide').removeClass('swiper-slide-nth-prev-2 swiper-slide-nth-next-2 swiper-slide-nth-prev-3 swiper-slide-nth-next-3');
             $('.swiper-slide[data-swiper-slide-index="'+realIndex+'"]').prev().prev().addClass('swiper-slide-nth-prev-2');
             $('.swiper-slide[data-swiper-slide-index="'+realIndex+'"]').next().next().addClass('swiper-slide-nth-next-2');
            },
        }
    });


    // blog 10 slider
    var swiper = new Swiper('.tc-blog-st10 .blog-slider', {
        slidesPerView: 3,
        spaceBetween: 100,
        // centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-blog-st10 .swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.tc-blog-st10 .swiper-button-next',
            prevEl: '.tc-blog-st10 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 3,
            }
        }
    });


});


/* --------------------------------------------------------------
                        [ home 11 scripts ]
-------------------------------------------------------------- */


// ------------ swiper sliders -----------
$(document).ready(function () {

    // portfolio 11 slider
    var swiper = new Swiper('.tc-portfolio-st11 .portfolio-slider', {
        slidesPerView: 3,
        spaceBetween: 10,
        centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-portfolio-st11 .swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.tc-portfolio-st11 .swiper-button-next',
            prevEl: '.tc-portfolio-st11 .swiper-button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 3.4,
            }
        }
    });


    // testimonials 7 slider
    var swiper = new Swiper('.tc-testimonials-st11 .testi-slider', {
        slidesPerView: 5,
        spaceBetween: 30,
        centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-testimonials-st11 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 3,
            }
        }
    });


});


/* --------------------------------------------------------------
                        [ showcases scripts ]
-------------------------------------------------------------- */


// ------------ swiper sliders -----------
$(document).ready(function () {


    // thumb12
    var thumb12 = new Swiper(".thumb-slider-st12", {
      spaceBetween: 10,
      slidesPerView: 2,
      freeMode: true,
      watchSlidesProgress: true,
    });

    // hero slider 12
    var heroSwiper12 = new Swiper('.tc-hero-st12 .hero-slider', {
        slidesPerView: 1,
        spaceBetween: 5,
        speed: 1500,
        pagination: {
            el: '.tc-hero-st12 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        // allowTouchMove: false,
	    // a11y: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },
        loop: false,
        parallax: true,
        thumbs: {
            swiper: thumb12,
        },
        on: {
            init: function () {
                if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined') {
                    setTimeout(() => {
                        const activeSlide = this.slides[this.activeIndex];
                        animateSplitText(activeSlide);
                    }, 100);
                }
            },
            slideChange: function () {
                if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined') {
                    const activeSlide = this.slides[this.activeIndex];
                    animateSplitText(activeSlide);
                }
            },
            init: function () {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    $(swiper.slides[i])
                        .find(".bg")
                        .attr({
                            "data-swiper-parallax": 0.75 * swiper.width,
                        });
                }
            },
            resize: function () {
                this.update();
            },
        }
    });


    // hero 13 slider 
    const swiper13 = new Swiper('.tc-hero-st13 .hero-slider', {
        modules: [SwiperGL],
        speed: 1500,
        effect: 'gl',
        loop: true,
        gl: {
            shader: 'peel-x',
        },
        pagination: {
            el: '.tc-hero-st13 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },
        on: {
            init: function () {
                if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined') {
                    setTimeout(() => {
                        const activeSlide = this.slides[this.activeIndex];
                        animateSplitText(activeSlide);
                    }, 100);
                }

                // parallax attr
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    $(swiper.slides[i])
                        .find(".bg")
                        .attr({
                            "data-swiper-parallax": 0.75 * swiper.width,
                        });
                }
            },
            slideChange: function () {
                if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined') {
                    const activeSlide = this.slides[this.activeIndex];
                    animateSplitText(activeSlide);
                }
            },
            resize: function () {
                this.update();
            },
        }
    });


    // hero 14 slider 
    const swiper14 = new Swiper('.tc-hero-st14 .hero-slider', {
        modules: [SwiperGL],
        speed: 1500,
        effect: 'gl',
        loop: true,
        gl: {
            shader: 'flyeye',
        },
        pagination: {
            el: '.tc-hero-st14 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },
        on: {
            init: function () {
                if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined') {
                    setTimeout(() => {
                        const activeSlide = this.slides[this.activeIndex];
                        animateSplitText(activeSlide);
                    }, 100);
                }

                // parallax attr
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    $(swiper.slides[i])
                        .find(".bg")
                        .attr({
                            "data-swiper-parallax": 0.75 * swiper.width,
                        });
                }
            },
            slideChange: function () {
                if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined') {
                    const activeSlide = this.slides[this.activeIndex];
                    animateSplitText(activeSlide);
                }
            },
            resize: function () {
                this.update();
            },
        }
    });


    // hero 15 script 
    $(document).ready(function () {
        $('.tc-hero-st15 .box-item').hover(function () {
            const bgClass = $(this).data('bg');
            $('.boxex-bg .bg').removeClass('show');
            $('.boxex-bg .' + bgClass).addClass('show');
        });
        $('.tc-hero-st15 .box-item').mouseenter(function () {
            $(".tc-hero-st15 .box-item").removeClass("active");
            $(this).addClass("active");
        });
    });

    // partners 8 slider
    var swiper = new Swiper('.tc-team-st17 .team-slider', {
        slidesPerView: 5,
        spaceBetween: 30,
        // centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-team-st17 .swiper-pagination',
            clickable: true,
        },
        navigation: false,
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }
        }
    });





});


/* --------------------------------------------------------------
                        [ home preview ]
-------------------------------------------------------------- */


    // ------------ swiper sliders -----------
    $(document).ready(function () {


        // ------------ about slider -----------
        var swiper = new Swiper('.tc-header-preview .imgs-slider', {
            slidesPerView: 4,
            spaceBetween: 10,
            effect: 'coverflow',
            grabCursor: true,
            coverflowEffect: {
                rotate: 30,
                stretch: 20,
                depth: 200,
                modifier: 1,
                slideShadows : false,
            },
            centeredSlides: true,
            pagination: false,
            navigation: false,
            mousewheel: false,
            keyboard: true,
            speed: 5000,
            allowTouchMove: false,
            a11y: false,
            autoplay: {
                delay: 1,
            },
            loop: true,
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                480: {
                    slidesPerView: 2,
                },
                787: {
                    slidesPerView: 3,
                },
                991: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 4.5,
                },
                on: {
                    slideChange: function () {
                    var activeIndex = this.activeIndex;
                    var realIndex = this.slides.eq(activeIndex).attr('data-swiper-slide-index');
                    $('.swiper-slide').removeClass('swiper-slide-nth-prev-2 swiper-slide-nth-next-2 swiper-slide-nth-prev-3 swiper-slide-nth-next-3');
                    $('.swiper-slide[data-swiper-slide-index="'+realIndex+'"]').prev().prev().addClass('swiper-slide-nth-prev-2');
                    $('.swiper-slide[data-swiper-slide-index="'+realIndex+'"]').next().next().addClass('swiper-slide-nth-next-2');
                    $('.swiper-slide[data-swiper-slide-index="'+realIndex+'"]').prev().prev().prev().addClass('swiper-slide-nth-prev-3');
                    $('.swiper-slide[data-swiper-slide-index="'+realIndex+'"]').next().next().next().addClass('swiper-slide-nth-next-3');
                    },
                }
            }
        });

        // ------------ features slider -----------
        var swiper = new Swiper('.tc-features-preview .features-slider', {
            slidesPerView: "auto",
            spaceBetween: 30,
            centeredSlides: true,
            pagination: false,
            navigation: false,
            mousewheel: false,
            keyboard: true,
            speed: 15000,
        allowTouchMove: false,
            autoplay: {
                delay: 1,
            },
            loop: true,
        });


        // ------------ footer slider -----------
        var swiper = new Swiper('.tc-footer-preview .text-slider', {
            slidesPerView: "auto",
            spaceBetween: 30,
            centeredSlides: true,
            pagination: false,
            navigation: false,
            mousewheel: false,
            keyboard: true,
            speed: 25000,
        allowTouchMove: false,
            autoplay: {
                delay: 1,
            },
            loop: true,
        });

    });



    // ------------ letters line -----------
    window.addEventListener("load", () => {

        const smoother = window.ScrollSmoother ? ScrollSmoother.get() : null;

        document.querySelectorAll(".letters-line").forEach(title => {

            if (title.dataset.lettersProcessed) return;
            title.dataset.lettersProcessed = true;

            function processTextNodes(element) {
                const walker = document.createTreeWalker(element, NodeFilter.SHOW_TEXT, null, false);
                const textNodes = [];
                let node;
                while (node = walker.nextNode()) {
                    if (node.textContent.trim() !== '') textNodes.push(node);
                }

                textNodes.forEach(textNode => {
                    const text = textNode.textContent;
                    const parent = textNode.parentNode;
                    const words = text.split(/(\s+)/);
                    const fragment = document.createDocumentFragment();

                    words.forEach(word => {
                        if (word.trim() === "") {
                            fragment.appendChild(document.createTextNode(word));
                        } else {
                            const wordWrapper = document.createElement("span");
                            wordWrapper.className = "word";
                            wordWrapper.style.display = "inline-block";
                            wordWrapper.style.whiteSpace = "nowrap";
                            
                            word.split("").forEach(char => {
                                const span = document.createElement("span");
                                span.className = "letter";
                                span.style.display = "inline-block";
                                span.style.transformStyle = "preserve-3d";
                                span.style.willChange = "transform";
                                span.innerHTML = char;
                                wordWrapper.appendChild(span);
                            });
                            fragment.appendChild(wordWrapper);
                        }
                    });

                    parent.replaceChild(fragment, textNode);
                });
            }

            processTextNodes(title);

            gsap.from(title.querySelectorAll(".letter"), {
                scrollTrigger: {
                    trigger: title,
                    scroller: smoother ? smoother.scrollContainer : window,
                    start: "top 80%",
                    toggleActions: "play none none reverse",
                },
                opacity: 0,
                y: 50,
                duration: 0.6,
                delay: 0.3,
                stagger: 0.03,
                ease: "power4.out"
            });
        });

        ScrollTrigger.refresh();
    });
