<?php ob_start(); ?>

<?php 
if(isset($_POST['mail'])){
    echo "Envoi du message: " . $_POST['mail'] . "<br>";
    echo "Envoi du message: " . $_POST['objet'] . "<br>";
    echo "Envoi du message: " . $_POST['message'] . "<br>";
}

?>

<div class="container text-center">
    <h2 class="m-5 perso_colorYellow">Mes informations personnelles</h2>
    <table class="m-5 table table-borderless">
        <tbody>
            <tr>
                <td><img src="../source/images/contact/contact1.png" style="width:100px;" class="rounded-circle"/></td>
                <td><img src="../source/images/contact/contact2.png" style="width:100px;" class="rounded-circle"/></td>
            </tr>
            <tr>
                <td>06.62.45.57.92</td>
                <td>lalanne.andoni1@gmail.com</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="container text-center">
    <h2 class="m-5 perso_colorYellow">Formulaire de contact</h2>
    <form method="POST" action=""> 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label perso_colorYellow ">Adresse mail:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="mail" placeholder="Entrez votre mail">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label perso_colorYellow" id="objet">Objet du mail:</label>
            <select id="disabledSelect" class="form-select" name="objet">
                <option value="question">Question</option>
                <option value="remarque">Remarque</option>
                <option value="autre">Autre</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label perso_colorYellow">Message:</label>
            <textArea class="form-text" id="message" rows="3" name="message" placeholder="Entrez votre message..."></textArea>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div>

<?php
    $content = ob_get_clean();
    require "commons/template.php";
?>