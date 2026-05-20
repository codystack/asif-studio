<?php include "./components/footer.php"; ?>

<!-- ===== VIDEO MODAL ===== -->
<div id="videoModal"
     role="dialog"
     aria-modal="true"
     aria-label="Video player"
     onclick="handleBackdropClick(event)"
     style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.82); z-index:99999; justify-content:center; align-items:center; opacity:0; transition:opacity 0.25s ease;">

    <div id="modalBox"
         style="position:relative; width:90%; max-width:800px; transform:scale(0.95); transition:transform 0.25s ease;">

        <button onclick="closeVideoModal()"
                aria-label="Close video"
                style="position:absolute; top:-44px; right:0; background:none; border:none; color:#fff; font-size:15px; cursor:pointer; display:flex; align-items:center; gap:6px; opacity:0.85; padding:4px 8px;">
            <span style="font-size:26px; line-height:1;">&times;</span> Close
        </button>

        <iframe id="youtubeVideo"
                width="100%"
                height="450"
                src=""
                frameborder="0"
                allow="autoplay; encrypted-media; fullscreen"
                allowfullscreen
                title="YouTube video player"
                style="display:block; border-radius:8px;">
        </iframe>

    </div>
</div>
<!-- ===== END VIDEO MODAL ===== -->

<script>
    // ✅ Move modal directly onto <body> so position:fixed is never
    // trapped inside a Swiper/transformed parent element
    document.body.appendChild(document.getElementById("videoModal"));

    const modal    = document.getElementById("videoModal");
    const iframe   = document.getElementById("youtubeVideo");
    const modalBox = document.getElementById("modalBox");
    let previousFocus = null;

    function openVideoModal(videoId) {
        previousFocus       = document.activeElement;
        iframe.src          = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
        modal.style.display = "flex";
        document.body.style.overflow = "hidden"; // ✅ prevent background scroll
        requestAnimationFrame(() => {
            modal.style.opacity      = "1";
            modalBox.style.transform = "scale(1)";
        });
    }

    function closeVideoModal() {
        modal.style.opacity      = "0";
        modalBox.style.transform = "scale(0.95)";
        document.body.style.overflow = ""; // ✅ restore scroll
        setTimeout(() => {
            modal.style.display = "none";
            iframe.src          = "";
        }, 250);
        if (previousFocus) previousFocus.focus();
    }

    function handleBackdropClick(e) {
        if (e.target === modal) closeVideoModal();
    }

    document.addEventListener("keydown", function(e) {
        if (e.key === "Escape" && modal.style.display === "flex") closeVideoModal();
    });
</script>