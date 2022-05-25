      
      <div class="container">
      <div class="row">
      <div class="mx-auto">
      <?php //dd($etudiants)?>
      <?php foreach($professeurs as $professeur): ?>
        <?php  if($professeur["matricule"] == $matricule):?>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/720x460/?man"
              alt="Avatar 1"
            />
            <div class="card-body">
                <h5 class="text-center"><?php echo "$professeur[prenom] $professeur[nom]"?></h5>
                <div class="text-center">
                <span class="badge badge-danger"><?=  $professeur["matricule"];?></span>
                <span class="badge badge-danger"><?=  $professeur["sexe"];?></span>
                <span class="badge badge-danger"><?=  $professeur["grade"];?></span>
                </div>
            </div>
          </div>
        </div>
        <?php endif?>
        <?php endforeach?>
        </div>
      </div>
      </div>




<h1 class="text-center alert alert-dark">Cours du professeur</h1>
<table class="table mt-5 container table-bordered">
    <thead>
        <tr>
            <th>Date</th>
            <th>Nombres d'heures</th>
            <th>Module</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($cours as  $cour):?>
    <?php if($cour["professeur"]==$matricule):?>
        <tr>
            <td><?= $cour["date"] ?></td>
            <td><?= $cour["nombre_heures"]."h" ?></td>
            <td><?= $cour["modules"] ?></td>
        </tr>
    <?php endif;?>
    <?php  endforeach;?>
        
        
    </tbody>
</table>
