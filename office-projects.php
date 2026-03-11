<?php include 'header.php'; ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>Office interior Projects</h1>
    <p>Workspace aligned with brand,culture and everyday operations .</p>
  </div>
</section>

<section class="institutional-projects">
  <div class="projects-grid">

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/offices/imgi_201_open-workspace-turnkey-office-design-1024x576.webp">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/offices/imgi_210_reception-area-office-fitout-india-1-2048x1151.webp">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/offices/imgi_199_custom-corporate-workstation-fitout-1536x863.webp">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/offices/mmg/mmg  (5).webp">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/offices/mmg/mmg  (3).webp">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/offices/mmg/mmg  (9).webp">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/offices/mmg/mmg  (1).webp">
     
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/offices/dwarka site/dwarka site (9).png">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/offices/dwarka site/dwarka site (1).png">
      
    </div>

  </div>
</section>

<!-- POPUP -->
<div class="popup" id="popup" onclick="closePopup()">
  <span class="popup-close">×</span>
  <img id="popupImg" onclick="event.stopPropagation()">
</div>

<script>
  function openPopup(card){
    const img = card.querySelector("img");
    document.getElementById("popupImg").src = img.src;
    document.getElementById("popup").classList.add("active");
  }

  function closePopup(){
    document.getElementById("popup").classList.remove("active");
  }

  // ESC key support
  document.addEventListener("keydown", e => {
    if(e.key === "Escape") closePopup();
  });
</script>

<?php include 'footer.php'; ?>
