<?php ob_start(); ?>

<div class="container text-center" id="presentation">
    <h2 class="m-5 perso_colorYellow">Mes informations personnelles</h2>
    <table class="table table-borderless">
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Jacob</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
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