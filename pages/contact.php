<?php ob_start(); ?>

<div class="container text-center" id="presentation">
    <h2 class="m-5 perso_colorYellow">Mes informations personnelles</h2>
    <table class="table table-borderless">
        <tbody>
            <tr>
                <td><img src="../source/images/contact/contact1.png" style="width:100px;"/></td>
            </tr>
            <tr>
                <td><img src="../source/images/contact/contact2.png" style="width:100px;"/></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
            </tr>
        </tbody>
    </table>
</div>

<?php

    $content = ob_get_clean();
    require "commons/template.php";
?>