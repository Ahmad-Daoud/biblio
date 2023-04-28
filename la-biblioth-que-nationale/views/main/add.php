<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter ou supprimer un livre</title>

    <!-- stylesheet boostrap 5.2.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- stylesheet boostrap 5.2.3 -->

    <!-- stylesheet utilisée uniquement dans la page add.php -->
    <link rel="stylesheet" href="/xampp/Labibliothèquenationale/la-biblioth-que-nationale/CSS/add.css">
    <!-- stylesheet utilisée uniquement dans la page add.php -->

    <!-- stylesheet globale pour toute les pages -->
    <link rel="stylesheet" href="/xampp/Labibliothèquenationale/la-biblioth-que-nationale/CSS/global.css">
    <!-- stylesheet globale pour toute les pages -->

    <!-- Polices google font API -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Rowdies:wght@400;700&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Polices google font API -->

</head>
<body>
    
<!-- Début du menu sticky, utilisé sur toute les pages -->
<div class="row menusticky">
    <div class="col-1">
        <a href="acceuil.php"> 
           <img src="/xampp/Labibliothèquenationale/la-biblioth-que-nationale/imgs/logo.png" alt="Logo de notre bibliothèque" class="imglogo">
        </a>
    </div>
    <div class="col-3 textmilieumenu">
        La Bibiliothèque Nationale
    </div>
    <div class=" col-2 textmenuglobal ">
        <a href="/xampp/Labibliothèquenationale/la-biblioth-que-nationale/index.php?page=home"><span class="animationtext"> Acceuil </span></a>
    </div>
    <div class=" col-2 textmenuglobal ">    
        <a href="/xampp/Labibliothèquenationale/la-biblioth-que-nationale/index.php?page=books"> <span class="animationtext"> Nos livres </span></a>
    </div>

    <div class=" col-2 textmenuglobal ">
        <a href="/xampp/Labibliothèquenationale/la-biblioth-que-nationale/index.php?page=modifier"><span class="animationtext"> Modifier </span></a>
    </div>


    <div class="col-2 textmenuglobal">
        <a href="/xampp/Labibliothèquenationale/la-biblioth-que-nationale/index.php?page=contact"> <span class="animationtext"> Contactez nous </span></a>
    </div>
</div>
<!-- Fin du menu sticky, utilisé sur toute les les pages -->

<div class="delform "style = "text-align:center;">
    <form action="model.php" method="get" name="submitadd" id="addform">
        Selectionnez le  <span class="specword">titre</span> du livre que vous voulez ajouter <br>  <input type="text" name ="title" placeholder="Titre" style="margin-bottom:20px;">
        <br>
        Selectionnez l' <span class="specword">autheur</span> du livre que vous voulez ajouter <br>  <input type="text" name ="author" placeholder="Autheur" style="margin-bottom:20px;">
        <br>
        Selectionnez la  <span class="specword">date</span> de publication du livre que vous voulez ajouter <br>  <input type="text" name ="year" placeholder="Date" style="margin-bottom:20px;">

        <br>
        Selectionnez le  <span class="specword">sommaire</span> du livre que vous voulez ajouter 
        <div style="font-size:12px; color: gray; text-decoration: underline;">(Veuillez ne pas ajouter de charactères spéciaux comme les accents) </div>  <input type="text" name ="summary" placeholder="Sommaire" class="sommairedesc">
        <br>
        <input type="submit" style="margin-bottom:40px; margin-top:20px;">
    </form>
</div>

<div style="margin-bottom: 30px;">
    
<a href="/xampp/Labibliothèquenationale/la-biblioth-que-nationale/index.php?page=add" class="btnchoice firstbtn">Ajouter un livre</a>
<a href="/xampp/Labibliothèquenationale/la-biblioth-que-nationale/index.php?page=modifier" class="btnchoice">Modifier un livre</a>
<a href="/xampp/Labibliothèquenationale/la-biblioth-que-nationale/index.php?page=delete" class="btnchoice">Supprimer un livre</a>


</div>


<?php 
display_books();
?>

<!-- Début du footer, utilisé sur toute les pages -->

<div class="footer">
 La bibliothèque nationale© a pour objectif d'ouvrir l'esprit de nos jeunes et de leur permettre de recevoir un 20/20 
 en cours de PHP à l'aide des informations de qualité proposé par notre système inclusif d'éducation. Nous vous remercions pour cette année plein de support pour notre cause 
 et je ne sais plus trop quoi dire donc je vais écrire quelques mots en plus afin de rendre ce paragraphe assez long pour que vous ne le lisiez pas, et si vous êtes en train de 
 le lire en ce moment cela veut dire que mon effort a été inutile et j'ai perdu 5 minutes à écrire un pargraphe qui fait 5 lignes.
</div>

<!-- Fin du footer, utilisé sur toute les les pages -->

<!-- script js Boostrap 5.2.3 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<!-- script js Boostrap 5.2.3 -->

</body>
</html>