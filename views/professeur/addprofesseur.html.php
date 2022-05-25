<?php 
use ism\lib\Session;
$array_error = [];
if (Session::keyExist("array_error")){
    $array_error = Session::getSession("array_error");
    Session::destroyKey("array_error");    
}
?>

      <div class="container mt-5">
      <h1 class="text-center alert alert-dark">AJOUTER UN PROFESSEUR</h1>

      <form action="<?php ROOT_CONTROLLERS.'/professeur.php' ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label  class="form-label" value="">Nom</label>
                        <input type="text" class="form-control" name="nom">
                        <?php if(isset($array_error["nom"])):?>
                            <div  class="form-text text-danger ">
                            <?= $array_error["nom"]; ?></div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label  class="form-label" value="">Prénom</label>
                        <input type="text" class="form-control" name="prenom">
                        <?php if(isset($array_error["prenom"])):?>
                            <div  class="form-text text-danger ">
                            <?= $array_error["prenom"]; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label  class="form-label">Date de naissance</label>
                <input type="date" class="form-control" name="date_de_naissance" >
                <?php if(isset($array_error["date_de_naissance"])):?>
                    <div  class="form-text text-danger ">
                    <?= $array_error["date_de_naissance"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="">Sexe</label>
              <select class="form-control" name="sexe">
                <option value="feminin">Feminin</option>
                <option value="masculin">Masculin</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Grade</label>
              <select class="form-control" name="grade">
                <option value="licence">Licence</option>
                <option value="master">Master</option>
                <option value="doctorat">Doctorat</option>
              </select>
            </div>

            <div class="mb-3">
                <p>Modules enseignes</p>
                <div class="form-check">
                    <?php
                        foreach ($modules["data"] as $module) {
                            echo '<input class="form-check-input" type="checkbox" name="modules[]" value="'.$module['libelle'].'" id="inlineCheckbox1">';
                            echo '<label class="form-check-label" for="inlineCheckbox1" >'.$module['libelle'].'</label>';
                            echo '<br>';
                        } echo '<br><br>';
                    ?>
                </div>

                <div class="mb-3">
                <p>Classes</p>
                <div class="form-check">
                    <?php
                        foreach ($classes as $classe) {
                            echo '<input class="form-check-input" type="checkbox" name="classes[]" value="'.$classe['filiere'].'-'.$classe['niveau'].'" id="inlineCheckbox1">';
                            echo '<label class="form-check-label" for="inlineCheckbox1" >'.$classe['filiere'].'-'.$classe['niveau'].'</label>';
                            echo '<br>';
                        }   echo '<br><br>';
                    ?>
                </div>

            <div class="mb-3">
                <label  class="form-label">Ajouter un Avatar (facultative)</label>
                <input type="file" class="form-control" name="avatar">
                <?php if(isset($array_error["avatar"])):?>
                    <div  class="form-text text-danger ">
                    <?= $array_error["avatar"]; ?></div>
                <?php endif; ?>
            </div>
            
            <div class="row float-right">
             <button type="submit" class="btn btn-dark">Soumettre</button></button>
            </div>
        </form>

      </div>
