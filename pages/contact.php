<?php ob_start(); 
require "../utile/formatage.php"; /* Page nécessaire pour le bon affichage des titres de sections */

function connectionBDD(){
    try {

        $db = new PDO('mysql:host=localhost;dbname=contact;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec('SET NAMES utf8');
        return $db;

    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
        // Nous pourrions par exemple envoyer un email au webmaster et logger l'erreur en base de données
    }
}
    
function insertContact($email, $objet, $message){ //permet de mettre les données dans la bdd
    $db = connectionBDD();
    try {
        $sql = "INSERT INTO email(email, objet, message) VALUES(:email, :objet, :message)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':objet', $objet);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
    }
    catch (PDOException $e){
        die('Erreur : ' . $e->getMessage());
    }
    
}

if(isset($_POST['email'])){
        $to = "lalanne.andoni1@gmail.com";
        $email = "Envoi du message: " . $_POST['email'] . "<br>";
        $objet =  "Envoi du message: " . $_POST['objet'] . "<br>";
        $message = "Envoi du message: " . $_POST['message'] . "<br>";

        insertContact($_POST['email'], $_POST['objet'], $_POST['message']);
        mail($to, $objet, $message, $email); ?>
            <div class="alert alert-success" role="alert">
                Message envoyé!
            </div>
    <?php
}
?>

<div class="container text-center">
    <?= formatageTitre("Mes informations personnelles") ?>
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
    <?= formatageTitre("Formulaire de contact") ?>
    <form method="POST" action=""> 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label perso_colorYellow ">Adresse mail:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Entrez votre mail">
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