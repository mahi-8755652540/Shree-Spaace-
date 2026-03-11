<?php include 'header.php'; ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>Hospitality Projects</h1>
    <p>Warm, inviting interiors for hotels,cafes and guest spaces.</p>
  </div>
</section>

<section class="institutional-projects">
  <div class="projects-grid">

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/Hospitality/au boun cafe/au boun cafe (1).png">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/Hospitality/au boun cafe/au boun cafe (2).png">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/Hospitality/Fat burger/fatburger (4).png">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/Hospitality/Fat burger/fatburger (1).png">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/Hospitality/Fat burger/fatburger (3).png">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/Hospitality/mr.sub/mr sub (6).png">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/Hospitality/mr.sub/mr sub (5).png">
     
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/Hospitality/Max cafe/max cafe (1).png">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/Hospitality/Max cafe/max cafe (2).png">
      
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