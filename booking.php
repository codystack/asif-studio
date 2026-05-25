<?php
include "./components/head.php";
include "./components/navbar-alt.php";
?>


<header class="tc-innerheader-st16">
    <div class="container">
        <div class="bg-box pb-120">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto">
                    <h1 class="fsz-90 text-uppercase text-center"> Booking </h1>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="tc-services-st3 pb-80">
    <div class="container">
        <div class="section-title text-center col-lg-7 mx-auto mb-70 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="fsz-50"> Flexible Booking Options For Every Creative Need </h2>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.1s">

            <div class="col-12 col-xl-4 col-md-6 mb-4">
                <a onclick="openModal('weekdayStudioModal')" class="tc-service-st3" style="cursor:pointer;">
                    <h5 class="fsz-30 mb-20">Weekday Studio Hire</h5>
                    <div class="text fsz-16 op-7">From £30 Per Hour</div>
                    <span class="arrow"><i class="fal fa-chevron-right"></i></span>
                </a>
            </div>

            <div class="col-12 col-xl-4 col-md-6 mb-4">
                <a onclick="openModal('weekendStudioModal')" class="tc-service-st3" style="cursor:pointer;">
                    <h5 class="fsz-30 mb-20">Weekend Studio Hire</h5>
                    <div class="text fsz-16 op-7">From £35 Per Hour</div>
                    <span class="arrow"><i class="fal fa-chevron-right"></i></span>
                </a>
            </div>

            <div class="col-12 col-xl-4 col-md-6 mb-4">
                <a onclick="openModal('contentRoomModal')" class="tc-service-st3" style="cursor:pointer;">
                    <h5 class="fsz-30 mb-20">Podcast/Content Room <span class="small text-danger">Weekends Only</span></h5>
                    <div class="text fsz-16 op-7">£35 Per Hour</div>
                    <span class="arrow"><i class="fal fa-chevron-right"></i></span>
                </a>
            </div>

            <div class="col-12 col-xl-4 col-md-6 mb-4">
                <a onclick="openModal('sewingMachineModal')" class="tc-service-st3" style="cursor:pointer;">
                    <h5 class="fsz-30 mb-20">Sewing Machine Area</h5>
                    <div class="text fsz-16 op-7">From £20 Per Hour</div>
                    <span class="arrow"><i class="fal fa-chevron-right"></i></span>
                </a>
            </div>

            <div class="col-12 col-xl-4 col-md-6 mb-4">
                <a onclick="openModal('eventSpaceModal')" class="tc-service-st3" style="cursor:pointer;">
                    <h5 class="fsz-30 mb-20">Event Space Dry Hire <span class="small text-danger">Weekends Only</span></h5>
                    <div class="text fsz-16 op-7">From £40 Per Hour</div>
                    <span class="arrow"><i class="fal fa-chevron-right"></i></span>
                </a>
            </div>

        </div>
    </div>
</section>


<!-- Modal templates (hidden) -->
<div id="modalTemplates" style="display:none;">

    <!-- WEEKDAY STUDIO -->
    <div id="weekdayStudioModal">
      <div style="padding:0 0 1rem;border-bottom:1px solid #eee;display:flex;align-items:flex-start;justify-content:space-between;gap:1rem;margin-bottom:1rem;">
        <div>
          <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 4px;text-transform:uppercase;">Weekday Studio Hire</p>
          <p style="font-size:13px;color:#888;margin:0;">Mon – Fri · Full studio access</p>
        </div>
        <div style="text-align:right;flex-shrink:0;">
          <span style="font-size:22px;font-weight:700;">£30</span>
          <span style="font-size:13px;color:#888;"> / hr</span>
        </div>
      </div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;">
        <div>
            <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 10px;text-transform:uppercase;">Select duration</p>
            <div style="display:flex;flex-direction:column;gap:6px;">
                <a href="https://calendly.com/yetundeasif/weekday-studio" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">2 hours <span>£60</span></a>
                <a href="https://calendly.com/yetundeasif/weekday-studio-3hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">3 hours <span>£90</span></a>
                <a href="https://calendly.com/yetundeasif/weekday-studio-4hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">4 hours <span>£110</span></a>
                <a href="https://calendly.com/yetundeasif/weekday-studio-5hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">5 hours <span>£130</span></a>
                <a href="https://calendly.com/yetundeasif/weekday-studio-6hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">6 hours <span>£150</span></a>
                <a href="https://calendly.com/yetundeasif/weekday-studio-7hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">7 hours <span>£170</span></a>
                <a href="https://calendly.com/yetundeasif/weekday-studio-8hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">8 hours <span>£200</span></a>
            </div>
        </div>
        <div style="display:flex;flex-direction:column;justify-content:space-between;">
            <div>
                <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 10px;text-transform:uppercase;">What's included</p>
                <div class="bm-includes">
                    <div>✓ Free parking</div>
                    <div>✓ Complimentary tea &amp; coffee</div>
                    <div>✓ Kitchen access</div>
                    <div>✓ Toilet facilities</div>
                    <div>✓ Natural light + studio lighting</div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <!-- WEEKEND STUDIO -->
    <div id="weekendStudioModal">
      <div style="padding:0 0 1rem;border-bottom:1px solid #eee;display:flex;align-items:flex-start;justify-content:space-between;gap:1rem;margin-bottom:1rem;">
        <div>
          <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 4px;text-transform:uppercase;">Weekend Studio Hire</p>
          <p style="font-size:13px;color:#888;margin:0;">Sat &amp; Sun · Minimum 2-hour booking</p>
        </div>
        <div style="text-align:right;flex-shrink:0;">
          <span style="font-size:22px;font-weight:700;">£35</span>
          <span style="font-size:13px;color:#888;"> / hr</span>
        </div>
      </div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;">
        <div>
            <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 10px;text-transform:uppercase;">Select duration</p>
            <div style="display:flex;flex-direction:column;gap:6px;">
                <a href="https://calendly.com/yetundeasif/weekend-studio-2hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">2 hours <span>£70</span></a>
                <a href="https://calendly.com/yetundeasif/weekend-studio-3hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">3 hours <span>£105</span></a>
                <a href="https://calendly.com/yetundeasif/weekend-studio-4hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">4 hours <span>£140</span></a>
                <a href="https://calendly.com/yetundeasif/weekend-studio-5hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">5 hours <span>£175</span></a>
                <a href="https://calendly.com/yetundeasif/weekend-studio-6hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">6 hours <span>£210</span></a>
                <a href="https://calendly.com/yetundeasif/weekend-studio-7hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">7 hours <span>£245</span></a>
                <a href="https://calendly.com/yetundeasif/weekend-studio-8hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">8 hours <span>£280</span></a>
            </div>
        </div>
        <div style="display:flex;flex-direction:column;justify-content:space-between;">
          <div>
            <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 10px;text-transform:uppercase;">What's included</p>
            <div class="bm-includes">
              <div>✓ Free parking</div>
              <div>✓ Complimentary tea &amp; coffee</div>
              <div>✓ Kitchen access</div>
              <div>✓ Toilet facilities</div>
              <div>✓ Natural light + studio lighting</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- PODCAST / CONTENT ROOM -->
    <div id="contentRoomModal">
      <div style="padding:0 0 1rem;border-bottom:1px solid #eee;display:flex;align-items:flex-start;justify-content:space-between;gap:1rem;margin-bottom:1rem;">
        <div>
          <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 4px;text-transform:uppercase;">Podcast / Content Room <span style="background:#ffeaea;color:#c0392b;font-size:10px;padding:2px 7px;border-radius:20px;margin-left:6px;">Weekends only</span></p>
          <p style="font-size:13px;color:#888;margin:0;">Sat &amp; Sun · ⚠ Microphones not provided</p>
        </div>
        <div style="text-align:right;flex-shrink:0;">
          <span style="font-size:22px;font-weight:700;">£35</span>
          <span style="font-size:13px;color:#888;"> / hr</span>
        </div>
      </div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;">
        <div>
            <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 10px;text-transform:uppercase;">Select duration</p>
            <div style="display:flex;flex-direction:column;gap:6px;">
                <a href="https://calendly.com/yetundeasif/content-room-2hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">2 hours <span>£70</span></a>
                <a href="https://calendly.com/yetundeasif/content-room-3hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">3 hours <span>£105</span></a>
                <a href="https://calendly.com/yetundeasif/content-room-4hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">4 hours <span>£140</span></a>
            </div>
        </div>
        <div style="display:flex;flex-direction:column;justify-content:space-between;">
          <div>
                <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 10px;text-transform:uppercase;">What's included</p>
                <div class="bm-includes">
                    <div>✓ Free parking</div>
                    <div>✓ Complimentary tea &amp; coffee</div>
                    <div>✓ Kitchen access</div>
                    <div>✓ Toilet facilities</div>
                    <div>✓ Natural light + studio lighting</div>
                </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SEWING MACHINE -->
    <div id="sewingMachineModal">
      <div style="padding:0 0 1rem;border-bottom:1px solid #eee;display:flex;align-items:flex-start;justify-content:space-between;gap:1rem;margin-bottom:1rem;">
        <div>
          <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 4px;text-transform:uppercase;">Sewing Machine Area</p>
          <p style="font-size:13px;color:#888;margin:0;">Dedicated sewing workspace</p>
        </div>
        <div style="text-align:right;flex-shrink:0;">
          <span style="font-size:22px;font-weight:700;">£20</span>
          <span style="font-size:13px;color:#888;"> / hr</span>
        </div>
      </div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;">
        <div>
            <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 10px;text-transform:uppercase;">Select duration</p>
            <div style="display:flex;flex-direction:column;gap:6px;">
                <a href="https://calendly.com/yetundeasif/sewing-machine-area-2hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">2 hours <span>£40</span></a>
                <a href="https://calendly.com/yetundeasif/sewing-machine-area-3hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">3 hours <span>£60</span></a>
                <a href="https://calendly.com/yetundeasif/sewing-machine-area-4hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">4 hours <span>£70</span></a>
                <a href="https://calendly.com/yetundeasif/sewing-machine-area-5hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">5 hours <span>£85</span></a>
                <a href="https://calendly.com/yetundeasif/sewing-machine-area-6hrs" target="_blank" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">6 hours <span>£100</span></a>
            </div>
        </div>
        <div style="display:flex;flex-direction:column;justify-content:space-between;">
            <div>
                <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 10px;text-transform:uppercase;">What's included</p>
                <div class="bm-includes">
                    <div>✓ Free parking</div>
                    <div>✓ Complimentary tea &amp; coffee</div>
                    <div>✓ Kitchen access</div>
                    <div>✓ Toilet facilities</div>
                    <div>✓ Natural light + studio lighting</div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <!-- EVENT SPACE -->
    <div id="eventSpaceModal">
      <div style="padding:0 0 1rem;border-bottom:1px solid #eee;display:flex;align-items:flex-start;justify-content:space-between;gap:1rem;margin-bottom:1rem;">
        <div>
          <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 4px;text-transform:uppercase;">Event Space Dry Hire <span style="background:#ffeaea;color:#c0392b;font-size:10px;padding:2px 7px;border-radius:20px;margin-left:6px;">Weekends only</span></p>
          <p style="font-size:13px;color:#888;margin:0;">Sat &amp; Sun · Minimum 3-hour booking</p>
        </div>
        <div style="text-align:right;flex-shrink:0;">
          <span style="font-size:22px;font-weight:700;">£40</span>
          <span style="font-size:13px;color:#888;"> / hr</span>
        </div>
      </div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;">
        <div>
            <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 10px;text-transform:uppercase;">Select duration</p>
            <div style="display:flex;flex-direction:column;gap:6px;">
                <a href="contact?enquiry=event-space&hours=3" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">3 hours <span>£100</span></a>
                <a href="contact?enquiry=event-space&hours=4" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">4 hours <span>£140</span></a>
                <a href="contact?enquiry=event-space&hours=5" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">5 hours <span>£180</span></a>
                <a href="contact?enquiry=event-space&hours=6" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">6 hours <span>£220</span></a>
                <a href="contact?enquiry=event-space&hours=8" class="butn border border-000 text-dark text-capitalize px-lg-5 mb-2">8 hours <span>£280</span></a>
            </div>
        </div>
        <div style="display:flex;flex-direction:column;justify-content:space-between;">
            <div>
                <p style="font-size:11px;font-weight:600;letter-spacing:.08em;color:#888;margin:0 0 10px;text-transform:uppercase;">What's included</p>
                <div class="bm-includes">
                    <div>✓ Free parking</div>
                    <div>✓ Complimentary tea &amp; coffee</div>
                    <div>✓ Kitchen access</div>
                    <div>✓ Toilet facilities</div>
                    <div>✓ Natural light + studio lighting</div>
                </div>
            </div>
        </div>
      </div>
    </div>

</div><!-- /modalTemplates -->


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
            background:     'rgba(0,0,0,0.6)',
            zIndex:         '999999',
            alignItems:     'center',
            justifyContent: 'center',
            padding:        '1rem',
            boxSizing:      'border-box'
        });

        var dialog = document.createElement('div');
        Object.assign(dialog.style, {
            position:     'relative',
            width:        '100%',
            maxWidth:     '560px',
            maxHeight:    '90vh',
            overflowY:    'auto',
            background:   '#fff',
            borderRadius: '12px',
            boxShadow:    '0 24px 64px rgba(0,0,0,0.25)',
            boxSizing:    'border-box'
        });

        /* ── Header ── */
        var header = document.createElement('div');
        header.style.cssText = 'background:#000;padding:1.5rem 1.75rem 1.25rem;border-radius:12px 12px 0 0;';
        header.innerHTML = '<h5 style="margin:0 0 4px;font-size:1rem;font-weight:700;color:#fff;letter-spacing:.02em;">Studio Policy — Please Read Before Booking</h5><p style="margin:0;font-size:0.8rem;color:rgba(255,255,255,0.8);">Asif Studio, Milton Keynes</p>';

        /* ── Body ── */
        var body = document.createElement('div');
        body.style.cssText = 'padding:1.5rem 1.75rem;';
        body.innerHTML = `
            <div style="display:flex;align-items:center;gap:1rem;background:#fff1f0;border:1px solid #fb1100;border-radius:8px;padding:1rem 1.25rem;margin-bottom:1.25rem;">
                <div style="font-size:1.75rem;font-weight:700;color:#fb1100;flex-shrink:0;line-height:1;">£50</div>
                <div style="font-size:0.8rem;color:#000;line-height:1.4;">
                    <strong style="display:block;font-size:0.9rem;color:#fb1100;margin-bottom:2px;">Refundable Holding Deposit</strong>
                    Collected upon arrival · Fully refunded after your session
                </div>
            </div>
            <p style="font-size:0.875rem;color:#555;line-height:1.7;margin:0 0 1rem;">
                Our space features premium furnishings, including light-toned seating and carpeted flooring that require extra care to maintain their quality.
            </p>
            <ul style="list-style:none;padding:0;margin:0 0 1rem;display:flex;flex-direction:column;gap:8px;">
                <li style="display:flex;align-items:flex-start;gap:8px;font-size:0.875rem;color:#444;">
                    <span style="flex-shrink:0;width:18px;height:18px;background:#fb1100;border-radius:50%;display:flex;align-items:center;justify-content:center;margin-top:2px;">
                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="2,6 5,9 10,3"/></svg>
                    </span>
                    No standard cleaning fee is charged
                </li>
                <li style="display:flex;align-items:flex-start;gap:8px;font-size:0.875rem;color:#444;">
                    <span style="flex-shrink:0;width:18px;height:18px;background:#fb1100;border-radius:50%;display:flex;align-items:center;justify-content:center;margin-top:2px;">
                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="2,6 5,9 10,3"/></svg>
                    </span>
                    £50 deposit collected on arrival — fully refundable
                </li>
                <li style="display:flex;align-items:flex-start;gap:8px;font-size:0.875rem;color:#444;">
                    <span style="flex-shrink:0;width:18px;height:18px;background:#fb1100;border-radius:50%;display:flex;align-items:center;justify-content:center;margin-top:2px;">
                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="2,6 5,9 10,3"/></svg>
                    </span>
                    Studio must be left in its original condition
                </li>
                <li style="display:flex;align-items:flex-start;gap:8px;font-size:0.875rem;color:#444;">
                    <span style="flex-shrink:0;width:18px;height:18px;background:#fb1100;border-radius:50%;display:flex;align-items:center;justify-content:center;margin-top:2px;">
                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="2,6 5,9 10,3"/></svg>
                    </span>
                    No stains, spillages, or damage to furniture or flooring
                </li>
            </ul>
            <p style="font-size:0.875rem;color:#555;line-height:1.7;margin:0;">
                We appreciate your cooperation in helping us keep the studio pristine for every client.
            </p>`;

        /* ── Footer buttons built as DOM nodes — listeners attach reliably ── */
        var footer = document.createElement('div');
        footer.style.cssText = 'padding:0 1.75rem 1.75rem;display:flex;flex-direction:column;gap:8px;';

        var acceptBtn = document.createElement('button');
        acceptBtn.textContent = 'I understand — Continue to Booking';
        acceptBtn.style.cssText = 'width:100%;padding:14px;background:#000;color:#fff;border:none;border-radius:8px;font-size:0.95rem;font-weight:600;cursor:pointer;letter-spacing:.02em;';
        acceptBtn.addEventListener('click', function () {
            overlay.style.display = 'none';
            document.documentElement.style.overflow = '';
        });

        var backBtn = document.createElement('button');
        backBtn.textContent = 'Go back';
        backBtn.style.cssText = 'width:100%;padding:11px;background:transparent;color:#888;border:1px solid #ddd;border-radius:8px;font-size:0.875rem;cursor:pointer;';
        backBtn.addEventListener('click', function () { window.history.back(); });

        /* ── Assemble ── */
        footer.appendChild(acceptBtn);
        footer.appendChild(backBtn);

        dialog.appendChild(header);
        dialog.appendChild(body);
        dialog.appendChild(footer);

        dialog.addEventListener('click', function (e) { e.stopPropagation(); });
        overlay.appendChild(dialog);
        document.body.appendChild(overlay);

        document.addEventListener('DOMContentLoaded', function () {
            overlay.style.display = 'flex';
            document.documentElement.style.overflow = 'hidden';
        });

    })();
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
            background:     'rgba(0,0,0,0.55)',
            zIndex:         '99998',
            alignItems:     'center',
            justifyContent: 'center',
            padding:        '1rem',
            boxSizing:      'border-box'
        });

        var dialog = document.createElement('div');
        Object.assign(dialog.style, {
            position:     'relative',
            width:        '100%',
            maxWidth:     '780px',
            maxHeight:    '85vh',
            overflowY:    'auto',
            background:   '#fff',
            borderRadius: '8px',
            padding:      '2rem',
            boxShadow:    '0 20px 60px rgba(0,0,0,0.3)',
            boxSizing:    'border-box'
        });

        var closeBtn = document.createElement('button');
        closeBtn.innerHTML = '&times;';
        Object.assign(closeBtn.style, {
            position:   'absolute',
            top:        '1rem',
            right:      '1rem',
            background: 'none',
            border:     'none',
            fontSize:   '1.5rem',
            cursor:     'pointer',
            lineHeight: '1',
            color:      '#333'
        });

        var content = document.createElement('div');
        var footer  = document.createElement('p');
        footer.style.cssText = 'margin-top:1.5rem;font-size:.85rem;color:#888;';
        footer.innerHTML = 'Need a custom quote? <a href="contact">Get in touch</a>.';

        dialog.appendChild(closeBtn);
        dialog.appendChild(content);
        dialog.appendChild(footer);
        overlay.appendChild(dialog);
        document.body.appendChild(overlay);

        dialog.addEventListener('click', function(e){ e.stopPropagation(); });
        overlay.addEventListener('click', closeModal);
        closeBtn.addEventListener('click',  closeModal);

        window._bmOverlay = overlay;
        window._bmContent = content;
    })();

    function openModal(id) {
        var src = document.getElementById(id);
        if (!src) return;
        window._bmContent.innerHTML    = src.innerHTML;
        window._bmOverlay.style.display = 'flex';
        document.documentElement.style.overflow = 'hidden';
    }

    function closeModal() {
        window._bmOverlay.style.display = 'none';
        document.documentElement.style.overflow = '';
    }

    document.addEventListener('keydown', function(e){
        if (e.key === 'Escape') closeModal();
    });
</script>