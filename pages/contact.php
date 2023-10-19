<?php ob_start(); ?>

<div class="container text-center" id="presentation">
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

<?php

    $content = ob_get_clean();
    require "commons/template.php";
?>