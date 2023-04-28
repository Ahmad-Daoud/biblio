<?php
require("controller.php");
$url = "$_SERVER[REQUEST_URI]";
if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = htmlspecialchars($_GET["page"]);
if($page == "home"){
    DisplayHome();
}
else if($page == "books"){
    DisplayBook();
}
else if($page == "contact"){
    DisplayContact();
}
else if($page == "modifier"){
    DisplayModifier();
}
else if($page == "add"){
    DisplayAdd();
}
else if($page == "delete"){
    DisplayDel();
}
else{
    Display404();
}
}


 