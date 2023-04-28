<?php
require("model.php");
function DisplayHome(){
require("views/main/acceuil.php");
}
function DisplayBook(){
    require("views/lire/books.php");
}
function DisplayBook_Alt($bookidinurl){
    delete_books($bookidinurl);
    require("views/lire/books.php");
}
function DisplayModifier(){
    require("views/main/modifier.php");
}   
function DisplayContact(){
    require("views/main/contact.php");
}
function Display404(){
    require("views/main/404.php");
}
function DisplayAdd(){
    require ("views/main/add.php");
}
function DisplayDel(){
    require("views/main/delete.php");
}