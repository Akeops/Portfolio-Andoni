<?php ob_start(); ?>

<div id="carouselExampleIndicators" class="carousel slide perso_bgYellowDegrade">
    <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-warning" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-warning" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-warning" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" id="accueil">
        <div class="carousel-item active">
            <img src="../source/images/img1.jpg" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../source/images/img2.jpg" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../source/images/img3.jpg" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
        </div>
    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon " aria-hidden="true"></span>
            <span class="visually-hidden bg-warning">Next</span>
        </button>
</div>

<div class="container text-center" id="presentation">
    <h2 class="m-5 perso_colorYellow">Andoni Lalanne-Berdouticq</h2>
    <div class="ratio ratio-16x9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/onY9eHi_eco?si=4GhBNwNYKLp3-EtG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>

<div class="container text-center" id="competences">
    <h2 class="m-5 perso_colorYellow"> Mes compétences</h2>
    <div class="row">
        <div class="col-4 border border-dark">
            HTML/CSS
        </div>
        <div class="col-4 border border-dark">
            PHP / POO
        </div>
        <div class="col-4 border border-dark">
            Javascript / Node.js
        </div>
    </div>
    
    
</div>

<?php
    $content = ob_get_clean();
    require "commons/template.php";
?>