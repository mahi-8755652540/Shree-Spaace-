<?php include 'header.php'; ?>

<div class="container">

  <div class="heading">
    <h1>CONTACT US</h1>
    <p>We transform spaces with precision, creativity, and premium turnkey interior solutions.</p>
  </div>

  <div class="grid">

    <!-- FORM -->
    <div class="card">
      <h2>Project Enquiry</h2>

      <form>
        <div class="field-group">
          <div>
            <label>Full Name</label>
            <input type="text" placeholder="Enter name" required>
          </div>
          <div>
            <label>Company</label>
            <input type="text" placeholder="Organisation name">
          </div>
        </div>

        <div class="field-group">
          <div>
            <label>Email</label>
            <input type="email" placeholder="name@company.com" required>
          </div>
          <div>
            <label>Mobile Number</label>
            <input type="tel" placeholder="+91-XXXXXXXXXX" required>
          </div>
        </div>

        <div class="field-group">
          <div>
            <label>City</label>
            <input type="text" placeholder="Gurugram / Delhi NCR" required>
          </div>
          <div>
            <label>Project Type</label>
            <select required>
              <option>Select</option>
              <option>Office Fit-out</option>
              <option>Corporate Interiors</option>
              <option>Retail Store</option>
              <option>Industrial / Factory</option>
            </select>
          </div>
        </div>

        <label>Project Area (sq.ft)</label>
        <input type="text" placeholder="e.g., 3,000 – 20,000 sq.ft" required>

        <label style="margin-top:14px;">Project Brief</label>
        <textarea placeholder="Share scope, timeline, location, area..." required></textarea>

        <button type="submit">Send Enquiry</button>
      </form>

    </div>

    <!-- INFO -->
    <div class="info-box">
      <div class="info-title">Shree Spaace Solution Pvt. Ltd.</div>
      <div class="info-text">
        Corporate Office — Gurugram, Haryana <br>
        GST: 06ABKCS0550K1Z8
      </div>

      <div class="info-text">
        <strong style="color:var(--gold)">Call:</strong> +91-XXXXXXXXXX <br>
        <strong style="color:var(--gold)">Email:</strong> hello@shreespaacesolution.com
      </div>

      <div>
        <div class="tag">Turnkey Interiors</div>
        <div class="tag">Design & Build</div>
        <div class="tag">Premium Workspaces</div>
      </div>

      <!-- LOCATION BLOCK (UPDATED + ENHANCED) -->
      <div class="info-title" style="margin-top:20px;">Location</div>

      <div style="
        height:2px;
        width:60px;
        background:var(--gold);
        border-radius:4px;
        margin:6px 0 14px 0;
      "></div>

      <div class="info-text" style="display:flex; align-items:flex-start; gap:10px;">

        <span style="
          display:inline-block;
          width:26px;
          height:26px;
          background:var(--gold);
          border-radius:50%;
          color:white;
          font-size:16px;
          font-weight:700;
          display:flex;
          align-items:center;
          justify-content:center;
        ">📍</span>

        <div>
          <strong>6th Floor, #625, Sapphire 83</strong><br>
          Sector 83, Gurgaon — 122004
        </div>

      </div>

      <div style="margin:14px 0 18px 36px;">
        <a href="https://www.google.com/maps/dir/?api=1&destination=Sapphire+83+Sector+83+Gurgaon+122004" 
          target="_blank"
          style="
            background:linear-gradient(135deg,var(--gold),#f5d77f); /* Original background */
            padding:10px 20px;
            border-radius:40px;
            color:#000;
            font-weight:700;
            text-decoration:none;
            font-size:0.9rem;
            box-shadow:0 8px 20px rgba(212,175,55,0.35);
            transition:0.2s;
          ">
          ➜ Get Directions
        </a>
      </div>

      <div class="map">
        <iframe 
          width="100%" 
          height="100%" 
          style="border:0;" 
          loading="lazy"
          src="https://www.google.com/maps?q=Sapphire+83,+Sector+83,+Gurgaon+122004&z=16&output=embed">
        </iframe>
      </div>

    </div>

  </div>

</div>

<!-- SCROLL TO TOP -->
<div id="scrollTop">↑</div>

<script>
let btn=document.getElementById("scrollTop");
window.onscroll=function(){
  btn.style.display = (document.documentElement.scrollTop>300) ? "block" : "none";
};
btn.onclick=function(){
  window.scrollTo({top:0,behavior:"smooth"});
};
</script>

<?php include 'footer.php'; ?>
