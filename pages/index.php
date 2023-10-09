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
        <div class="col-12 col-md-6 perso_colorYellow">
            HTML/CSS
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 50%">50%</div>
            </div>
        </div>
        <div class="col-12 col-md-6 perso_colorYellow">
            PHP / POO
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 25%">25%</div>
            </div>
        </div>
        <div class="col-12 col-md-6 perso_colorYellow">
            Javascript / Node.js
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 5%">5%</div>
            </div>
        </div>
        <div class="col-12 col-md-6 perso_colorYellow">
            SQL / PDO
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 50%">50%</div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center" id="mesProjets">
    <h2 class="m-5 perso_colorYellow">Mes projets</h2>
    <div class="card" style="width: 18rem;">
        <img src="../source/images/card1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Portfolio</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="../source/images/card3.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">ITwatchdog</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="../source/images/card2.jpg" class="card-img-top" alt="...">
            div class="card-body">
            <h5 class="card-title">Je ne sais pas encore</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

<?php
    $content = ob_get_clean();
    require "commons/template.php";
?>