<?php 
use ism\lib\Role;
use ism\lib\Session;?>
<nav class="navbar">
    <div class="max-width">
        <a class="navbar-brand" href="<?php path('annuaire/accueil') ?>">
            <img src="<?php echo WEB_ROOT."media/bg_logos/assets/logo-pj.png"?>" 
            alt="Logo Page Paunes">
        </a>
        <ul class="list">
            <?php  if(!Role::estConnect()): ?>
                <li><a href="<?php path('security/register') ?>">Offres d'emploi</a></li>
                <li><a href="<?php path('security/register') ?>">Annuaire inversé</a></li>
                <li><a href="<?php path('security/register') ?>">Inscrire mon entreprise</a></li>
                <li><a href="<?php path('security/login') ?>">Mon compte</a></li>
            <?php endif ?>
            <?php  if(Role::estConnect()): ?>
                
            <?php endif ?>
        </ul>
        <form action="#" class="search-box">
            <div class="what-box">
                <input type="text" name="what" placeholder="Qu'est ce que vous recherchez ?">
            </div>
            <div class="where-box">
                <i class="fas fa-street-view"></i>
                <input type="text" name="where" placeholder="Dakar">
                <a type="submit" name="submit" id="submit"><i class="fa fa-search"></i></a>
            </div>
        </form>
    </div>
</nav>

<style>
    *{
        border: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Open Sans', sans-serif;
    }
    /* Styling Navbar */
    nav{
        z-index: 9;
        background-color: #fff;
        width: 100%;
        position: fixed;
        box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);
    }
    .navbar{
        z-index: 999;
    }
    nav .max-width{
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 95%;
        height: 85px;
        margin: 0 auto;
    }
    nav .max-width ul{
        display: flex;
    }
    nav .max-width ul li{
        list-style-type: none;
    }
    nav .max-width ul li a{
        text-decoration: none;
        color: #000;
        font-weight: 500;
        font-size: 15px;
        margin: 0 10px;
    }
    nav .max-width ul li a:hover{
        color: #EAB637;
    }
    .list.hide{
        display: none;
    }
    .search-box.show{
        display: flex;
    }
    /* Styling Search-bar */
    nav .max-width form{
        display: none;
    }
    nav .max-width form .what-box{
        border-right: 1px solid #a9a9a9;
    }
    nav .max-width form .where-box,
    nav .max-width form .what-box{
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 10px;
    }
    nav .max-width form{
        border-radius: 50px;
        margin-left: 5px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }
    nav .max-width form .what-box,
    nav .max-width form .what-box input{
        justify-content: center;
        width: 90%;
        outline: none;
        appearance: none;
        -webkit-appearance: none;
        -ms-appearance: none;
        -moz-appearance: none;
        font-weight: 400;
        font-size: 18px;
    }
</style>