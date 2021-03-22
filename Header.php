<header>
<?php session_start ();?>
<?php include 'fct.php' ;

if(isset($_GET['LAN'])){if($_GET['LAN'] == "en"){include "Traduction/EN.php";}else{include "Traduction/FR.php";}}else{include "Traduction/FR.php";}

?>

<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="script/script.js"></script>

<div class="Head">
    <div class="Logo"><a href="PageAccueil.php"><img src="/GerardRadeCinevent/images/logo.png"></a></div>
    <div class="HorsLogo">
        <div class="Bouton">
        <ul>
        <li >
        <form name="Langue" method="GET">
            <select name='LAN' id='LAN' class="Bouton_Menu" onchange='javascript:submit();'>
                <option value='fr' <?php if(isset($_GET['LAN'])){if($_GET['LAN'] == "fr"){echo ' selected';}} ?>> FR </option>
                <option value='en' <?php if(isset($_GET['LAN'])){if($_GET['LAN'] == "en"){echo ' selected';}} ?>> EN </option>

            </select>
                </form></li>

        <?php if (isset($_SESSION['email']))
        {?>
            <li class="Bouton_Menu"><a href="script/deconnexion.php"><?php echo $Deconnexion ?></a></li>
        <?php
        }
        else
        {
        ?>
            <li class="Bouton_Menu"><a href="PageConnexion.php"><?php echo $connexion ?></a></li>
        <?php
        }
        ?>
        
            <li class="Bouton_Menu"><a href="PageContact.php"><?php echo $Contact ?></a></li>
            <li class="Bouton_Menu"><a href="PageAPropos.php"><?php echo $APropos ?></a></li>
            <li class="Bouton_Recherche"><img src="/GerardRadeCinevent/images/loupe.png"></li>
            <li class="Barre_Recherche"><input type="search" placeholder="<?php echo $chercher ?>" ></li>
            <li class="Bouton_Menu"><a href="AjtFilm.php">Ajout Film</a></li>
        </ul>
    </div>

        <div>
            <div class="BarreRouge"></div>
        </div>
    </div>
</div>
</header>