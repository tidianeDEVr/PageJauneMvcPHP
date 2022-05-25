<h1 class="text-center alert alert-dark">LISTE DES PROFESSEURS</h1>
<table class="table mt-5 container table-bordered">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Classes</th>
            <th>Modules</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($professeurs as  $professeur):?>
        <tr>
            <td><?= $professeur["nom"] ?></td>
            <td><?= $professeur["prenom"] ?></td>
            <td><?= $professeur["classes"] ?></td>
            <td><?= $professeur["modules"] ?></td>
        </tr>
    <?php  endforeach;?>
        
        
    </tbody>
</table>
