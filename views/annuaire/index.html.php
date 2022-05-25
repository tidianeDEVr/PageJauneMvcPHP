<?php
    // Importation du fichier CSS
    include("index.css.php");

    // Gestion Entreprise A La Une
    $entreprises_a_la_une=[];
    foreach ($entreprises as $entreprise){
        if ($entreprise["lienActif"]==1) {
            array_push($entreprises_a_la_une, $entreprise);
        }
    }
?>

<!-- Annuaire Search Section -->
<div class="annuaire">
    <div class="max-width">
        <div class="search-box">
            <div class="max-width">
                <form action="#" method="post">
                    <div class="what-box">
                        <input class="" id="what" type="text" name="what" placeholder="Qu'est ce que vous recherchez ?"/>
                        <span id="what_result"></span>
                    </div>
                    <div class="where-box">
                        <input id="where" type="text" name="where" placeholder="Dakar">
                        <span id="where_result"></span>
                        <a type="submit" name="submit" id="submit"><i class="fa fa-search"></i></a>
                    </div>
                </form>
            </div>
        </div>
        <h3>
            Nous mettons a votre dispotion des annuaires professionels de la région de votre choix.
        </h3>
    </div>
</div>

<!-- Banners Section-->
<div class="banners">
    <div class="pub-slider">
        <?php
            $id = opendir("./media/gif_pub_banner/");
            while($str=readdir($id)){
                if (pathinfo($str, PATHINFO_EXTENSION)=="gif"){
                    echo "<div><img src=".WEB_ROOT."media/gif_pub_banner/$str alt=banner></div>";
                }
            };
        ?>
    </div>    
</div>

<!-- Entreprise-a-la-une Section -->
<div class="section-enterprises-a-la-une">
    <h2 class="title">Entreprises</h2>
    <div class="block-enterprises">
        <div>
            <i class="fa fa-arrow-circle-left fa-3x" id="arrow-left"></i>
        </div>
        <div class="entreprises-container">
            <?php
                foreach($entreprises_a_la_une as $entreprise){
                    echo "
                    <div class='card-entr'>
                        <div class='max-width'>";
                            if(file_exists(getcwd()."/media/bg_logos/logos/vignettes/$entreprise[LOGOLIEN]")){ 
                                echo "<img width='50px' height='50px' src='../../media/bg_logos/logos/vignettes/$entreprise[LOGOLIEN]' alt='LOGO'>";
                            }else{
                                echo "<img width='50px' height='50px' src='../../media/bg_logos/logos/vignettes/vignette.png' alt='LOGO'>";
                            };
                            echo "
                            <h4>$entreprise[NOM]</h4>
                            <p>$entreprise[ADRESSE]</p>
                        </div>
                    </div>
                    ";
                }
            ?>
        </div>
        <div>
            <i class='fa fa-arrow-circle-right fa-3x' id="arrow-right"></i>
        </div>
    </div>
</div>

<!-- Join Section -->
<div class="section-join">
    <div class="max-width">
        <div class="left part"></div>
        <div class="right part">
            <div class="max-width">
                <h3>Pourquoi nous choisir ?</h3>
            </div>
        </div>
    </div>
</div>

<!-- Discover Section -->
<div class="section-discover">
    <div class="max-width">
        <h2 class="title">Découvrez</h2>
        <div class="cards">
            <a href="#">
                <div class="card health">
                    <div class="max-width">
                        <h2>Hopitaux<br>Cliniques</h2>
                        <i class="fa fa-heartbeat fa-5x"></i>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card car">
                    <div class="max-width">
                        <h2>Achat, location et<br>entretien véhicule</h2>
                        <i class="fa fa-car fa-5x"></i>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card food">
                    <div class="max-width">
                        <h2>Restaurants<br>Fast Food</h2>    
                        <i class="fa fa-pizza-slice fa-5x"></i>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card hotel">
                    <div class="max-width">
                        <h2>Hotels<br>auberges</h2>
                        <i class="fa fa-hotel fa-5x"></i>
                    </div>
                </div>
            </a>
            <a href="#" class="proa">
                <div class="card pro">
                    <div class="max-width">
                        <div class="top">
                            <h2>Les professionels de la région</h2>
                            <p>
                                Nous mettons a votre disposition des 
                                répertoires professionnels et annuaires d’entreprises 
                                au Sénégal, au Burkina et au Mali.
                            </p>    
                        </div>
                        <div class="bottom">
                            <i class="fa fa-check-circle fa-5x"></i>    
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="btn">
            <a href="#">
                Voir d'autres catégories...
            </a>
        </div>
    </div>
</div>
<!-- Footer Section -->
<div class="footer">
    <div class="max-width">
        <div class="footer-cards">
            <div class="footer-card">
                <ul>
                    <li class="title">A propos</li>
                    <li><a href="#">Qui sommes-nous ?</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Aide</a></li>
                </ul>
            </div>
            <div class="footer-card">
                <ul>
                    <li class="title">Groupes afripages</li>
                    <li><a href="#">Pages jaunes du Mali</a></li>
                    <li><a href="#">Pages jaunes du Burkina</a></li>
                    <li><a href="#">Indicatifs internationaux</a></li>
                </ul>
            </div>
            <div class="footer-card">
                <ul>
                    <li class="title">Annonces</li>
                    <li><a href="#">Annoncez avec nous</a></li>
                    <li><a href="#">Creer un compte</a></li>
                    <li><a href="#">Se connecter</a></li>
                </ul>
            </div>
            <div class="footer-card">
                <ul>
                    <li class="title">Suivez-nous</li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </div>
        </div>
        <div class="news-letter">
            <form action="#">
                <div class="input-btn-cont">
                    <input class="mail" type="email" placeholder="Abonnement newsletters">
                    <a href="#" type="submit">OK</a>
                </div>
            </form>
        </div>
        <div class="copyright">
            <h3>COPYRIGHT © <span>AFRIPAGES</span> 2021. TOUS DROITS RESERVES.</h3>
        </div>
    </div>
</div>