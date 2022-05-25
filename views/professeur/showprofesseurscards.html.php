<!-- -----------------------------------------------------------CONTAINER -->
<div class="container">
    <h1 class="text-center alert alert-dark">LISTE DES PROFESSEURS</h1>
      <div class="row">
      <?php //dd($etudiants)?>
      <?php foreach($professeurs as $professeur): ?>
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
                <span class="badge badge-danger"><?=  $professeur["grade"];?></span><hr>
                </div>
              <p class="card-text text-center">
                <h5 class="text-center"><ins>Classes :</ins></h5>
                <?php
                    $professeur["classes"] = str_replace("[\"","",$professeur["classes"]);
                    $professeur["classes"] = str_replace("\"]","",$professeur["classes"]);
                    $professeur["classes"] = str_replace("\",\"","<br>• ",$professeur["classes"]);
                    $professeur["classes"] = str_replace("_"," ",$professeur["classes"]);
                    echo "• "."$professeur[classes]";
                ?>
              </p>
              <hr/>
              <div class="row mt-1">
                  <div class="mx-auto">
                  <a href="<?php path("professeur/showcoursbyprofesseur/".$professeur["matricule"])?>" class="btn btn-sm btn-dark">
                    VOIR SES COURS
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach?>
      </div>
      
      <div class="row text-center">
        <div class="col-sm-4 offset-sm-4">
          <ul class="pagination pl-4">
              <li class="page-item disabled">
                <a class="page-link" href="#">&laquo;</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">5</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
              </li>
            </ul>
        </div>
      </div> 
    </div>

