<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue à la bibliothèque nationale!</title>
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- fichier css unique à la page "acceuil" -->
    <link rel="stylesheet" href="../../CSS/acceuil.css">

    <!-- CSS global contenant quelques variables et des règles globales pour les pages -->
    <link rel="stylesheet" href="../../CSS/global.css">

    <!-- Polices google font API -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Rowdies:wght@400;700&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600&display=swap" rel="stylesheet">
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


<!-- Début d'un article récent avec une photo -->
<div class="row">
    <div class="offset-2 col-5">
        <img src="/xampp/Labibliothèquenationale/la-biblioth-que-nationale/imgs/livrevente.jpg" alt="Photo de notre vente de livres!" width="100%">
    </div>
    <div class="col-4">
        <span class="texteasso">
            Nous avons récemment effectué une vente de livres qui nous a aidé à récupérer une somme 
            qui a été offerte à l'association arc-en-ciel qui propose des aide aux personnes en situations de handicap.
            Si vous voulez en savoir plus, vous pouvez les retrouver sur <a href="https://www.arcenciel48.com" class="lienparagraphevente"> leur page web. </a>
        </span>
    </div>
</div>
<!-- Fin d'un article récent avec une photo -->

<!-- Début Galerie D'images -->

<div class="row">
    <div class="col-4 ">
        <img src="https://s1.qwant.com/thumbr/0x380/3/0/778291a028867a49365be99f72c5dd139741684ef8ac090bb4508342e77e56/Bibliotheque-du-th%C3%A9%C3%A2tre-c-Andr%C3%A9-Pelle.jpg?u=https%3A%2F%2Fi0.wp.com%2Fwww.studinano.com%2Fwp-content%2Fuploads%2F2014%2F12%2FBibliotheque-du-th%25C3%25A9%25C3%25A2tre-c-Andr%25C3%25A9-Pelle.jpg%3Fw%3D3008&q=0&b=1&p=0&a=0" alt="" width="100%">

    </div>

    <div class="col-3">
        <img src="https://s2.qwant.com/thumbr/700x0/4/9/30a19408c5fd628146552cec5e912ed6835c06484966fd64c7a7278fcf2121/bibliotheque.jpg?u=https%3A%2F%2Fcache.marieclaire.fr%2Fdata%2Fphoto%2Fw2000_ci%2F51%2Fbibliotheque.jpg&q=0&b=1&p=0&a=0"class="40% "alt="" height="100%">
    </div>
    <div class="col-3">
        <img src="https://s2.qwant.com/thumbr/700x0/5/a/bf78e56b42ea0a3bb832346b6e873abad075c0cc601d178275592336c963ef/BIBLIOTHEQUE.jpg?u=https%3A%2F%2Fwww.museeyslmarrakech.com%2Fwp-content%2Fuploads%2F2017%2F10%2FBIBLIOTHEQUE.jpg&q=0&b=1&p=0&a=0" alt=""  height="100%" class="midgalimg">
    </div>

</div>

<!-- Fin Galerie D'images -->



<!-- Début du footer, utilisé sur toute les pages -->

<div class="footer">
 La bibliothèque nationale© a pour objectif d'ouvrir l'esprit de nos jeunes et de leur permettre de recevoir un 20/20 
 en cours de PHP à l'aide des informations de qualité proposé par notre système inclusif d'éducation. Nous vous remercions pour cette année plein de support pour notre cause 
 et je ne sais plus trop quoi dire donc je vais écrire quelques mots en plus afin de rendre ce paragraphe assez long pour que vous ne le lisiez pas, et si vous êtes en train de 
 le lire en ce moment cela veut dire que mon effort a été inutile et j'ai perdu 5 minutes à écrire un pargraphe qui fait 5 lignes.
</div>

<!-- Fin du footer, utilisé sur toute les les pages -->


<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<!-- Bootstrap js -->

</body>
</html>
