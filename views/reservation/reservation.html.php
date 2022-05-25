<div class="container">
    <h2 class="text-center">Liste des resevations</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom et Prenom</th>
                <th>Reference</th>
                <th>Type</th>
                <th>Prix</th>
                <th>Localite</th>
                <th>Nombre de Pieces</th>
                <th>Date de Reservation</th>
            </tr>
        </thead>
        <tbody>
        <?php

use ism\lib\FormatDate;

foreach ($reservations as  $reservation):?>
            <tr>
                <td><a href="<?php path("reservation/showReservationByClient/".$reservation["client_id"]);?>"><?= $reservation["nom_complet"];?></a></td>
                <td><?= $reservation["reference"];?></td>
                <td><?= $reservation["type"];?></td>
                <td><?= $reservation["prix"];?></td>
                <td><?= $reservation["localite"];?></td>
                <td><?= $reservation["nombre_piece"];?></td>
                <td><?=FormatDate::dateToStringFr($reservation["create_at"]); ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>