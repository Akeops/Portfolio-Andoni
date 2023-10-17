<?php ob_start(); ?>

<!-- Caroussel -->
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

<!-- Intégration vidéo -->
<div class="container text-center" id="presentation">
    <h2 class="m-5 perso_colorYellow">Andoni Lalanne-Berdouticq</h2>
    <div class="ratio ratio-16x9 img-thumbnail">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/SpfIwlAYaKk?si=0-VEXcV-HTMQv9Kv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>

<!-- Progress bar -->
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



<!-- Card -->
<div class="container text-center" id="mesProjets">
    <h2 class="m-5 perso_colorYellow">Mes projets</h2>
    <div class="m-5 container text-center">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="../source/images/card1.jpg" class="card-img-top" height="165px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Portfolio</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cours1">Détails</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="../source/images/card2.jpg" class="card-img-top" height="165px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ITwatchdog</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cours2">Détails</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="../source/images/card3.jpg" class="card-img-top" height="165px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Je ne sais pas encore</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cours3">Détails</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

    <!-- Modal (Fenêtre qui apparaît quand on clique sur le bouton de la card) -->
    <div class="modal fade" id="cours1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Portfol.io</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../source/images/card1.jpg" class="card-img-top" alt="...">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel fugit nemo libero ipsa blanditiis earum unde, neque eum modi obcaecati repellendus odio quos deserunt sunt quia nobis reprehenderit! Laboriosam, optio.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal (Fenêtre qui apparaît quand on clique sur le bouton de la card) -->
    <div class="modal fade" id="cours2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cours2">ITwatchdog</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../source/images/card2.jpg" class="card-img-top" alt="...">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel fugit nemo libero ipsa blanditiis earum unde, neque eum modi obcaecati repellendus odio quos deserunt sunt quia nobis reprehenderit! Laboriosam, optio.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal (Fenêtre qui apparaît quand on clique sur le bouton de la card) -->
    <div class="modal fade" id="cours3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cours2">ITwatchdog</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../source/images/card3.jpg" class="card-img-top" alt="...">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel fugit nemo libero ipsa blanditiis earum unde, neque eum modi obcaecati repellendus odio quos deserunt sunt quia nobis reprehenderit! Laboriosam, optio.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Section des témoignages -->
    <div class="container text-center" id="temoignages">
        <h2 class="m-5 perso_colorYellow">Mes témoignages</h2>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <img src="../source/images/card1.jpg" class="card-img-top border border-danger-subtle rounded" style="width:150px;height:150px;" alt="..."> 
                    <h3>Negu</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nostrum, quaerat doloribus incidunt inventore odit distinctio? Temporibus non vitae soluta doloremque repellat cupiditate, voluptas ut ad ipsum, eius, et numquam?</p>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="../source/images/thomas.png" class="card-img-top border border-danger-subtle rounded" style="width:150px;height:150px;" alt="...">  
                    <h3>Thomas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nostrum, quaerat doloribus incidunt inventore odit distinctio? Temporibus non vitae soluta doloremque repellat cupiditate, voluptas ut ad ipsum, eius, et numquam?</p>   
                </div>
                <div class="col-12 col-lg-4">
                    <img src="../source/images/logo3.png" class="card-img-top border border-danger-subtle rounded" style="width:150px;height:150px;" alt="...">
                    <h3>Negu</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nostrum, quaerat doloribus incidunt inventore odit distinctio? Temporibus non vitae soluta doloremque repellat cupiditate, voluptas ut ad ipsum, eius, et numquam?</p>
                </div>
            </div>
        </div>
    </div>

<?php
    $content = ob_get_clean();
    require "commons/template.php";
?>