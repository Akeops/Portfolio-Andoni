<?php ob_start(); ?>

<div class="container text-center">
    <h2 class="m-5 perso_colorYellow">Mes informations personnelles</h2>
    <table class="table table-borderless">
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
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php

    $content = ob_get_clean();
    require "commons/template.php";
?>