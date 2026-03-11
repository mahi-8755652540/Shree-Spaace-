<?php include 'header.php'; ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>Institutional Projects</h1>
    <p>Modern, functional environments built for learning and leadership.</p>
  </div>
</section>

<section class="institutional-projects">
  <div class="projects-grid">

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/institutional project/Aakash Institution  Mayapuri Shree Spaace Solution  Interior Company.png">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/institutional project/3.png">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/institutional project/9.png">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/institutional project/Aakash Mayapuri.png">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/institutional project/Waiting Area Shree Spaace Solution Insitittional Interior.png">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/institutional project/imgi_51_Aakash-768x549.jpg">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/institutional project/imgi_5_WhatsApp-Image-2022-10-19-at-15.55.44.jpg">
     
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/institutional project/reception Aakash Insititutional Project Mayapuri interior for Shree Spaace Solution.png">
      
    </div>

    <div class="project-card" onclick="openPopup(this)">
      <img src="asset/institutional project/caffee area shree spaace solution ncr gurgaon.png">
      
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
