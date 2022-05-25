 <!-- -----------------------------------------------------------CONTAINER -->
  <div class="container">
      <div class="row">
      <?php foreach($biens as $bien): ?>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?product"
              alt="Annonce 1"
            />
            <div class="card-body">
              <button class="btn btn-primary">
                      <?=  $bien["type"];?> <span class="badge badge-light"><?=  $bien["nombre_piece"];?> </span>

              </button>

              <span class="badge badge-success"><?=  $bien["localite"];?></span>
              <span class="badge badge-danger"><?=  $bien["etat"];?></span>
              <?php 

                $tag_json=$bien["tag"];
                $tag_array=json_decode($tag_json,true);

            
              ?>
              <p class="card-title">
              <?php foreach($tag_array as $tag):?>
                <span class="badge badge-warning"><?= $tag ?></span>
              <?php endforeach ?>
              </p>
              <p class="card-text">
                <?=substr( $bien["description"],0,201)." ...";?>
              </p>
              <hr />

              <div class=" btn btn-sm btn-outline-danger  disabled"
                ><?=$bien["prix"];?>FCFA</div>
                <div class=" btn btn-sm btn-outline-danger  disabled"
                ><?=date_format(date_create($bien["create_at_reservation"]),"d-m-Y");?></div>
              <br>
              <div class=" float-right row mt-1">
                  <div class=" col-sm-3 mr-3">
                        <a href="<?php path("bien/showDetail/".$bien["id_bien"]) ?>" class="btn btn-sm btn-outline-success "
                    >Détails</a>
                  </div>
                  <?php if($bien['etat']=="EN COURS"): ?>
                  <div class="col-sm-3 ">
                  <a href="#" class="btn btn-sm btn-outline-danger "
                    >Annuler</a>
                  </div>
                  <?php endif;?>
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