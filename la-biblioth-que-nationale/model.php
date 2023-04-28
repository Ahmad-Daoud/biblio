<?php   
  $db = new mysqli('localhost', 'root', '', 'MVC2');

  if ($db -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }





function get_books() {
    global $db ;
    $query = "SELECT * FROM books WHERE id = $id" ;
    try{
        $result = mysqli_query($db,$query);
    }
    catch(Exception $e ){
        echo $e->getMessage();
    }
    $bookname = $result['name'];
    $bookauthor = $result['author'];
    $booksummary = $result['summary'];
    $bookyear = $result['year'];
}

function add_books($bookname, $bookauthor, $booksummary, $bookyear){
    global $db ;
    $query = "INSERT INTO books  (name,year,author,summary) VALUES ('$bookname','$bookyear','$bookauthor','$booksummary')" ;

    try{
        mysqli_query($db, $query);
    }
    catch(Exception $e){
        echo "Une erreur c'est procurée :  ".$e->getMessage();
    }
    require("views/main/add.php");
} 

function modify_books($bookname, $bookyear, $bookauthor, $booksummary, $id){
    global $db ;
    $bookname = mysqli_real_escape_string($db, $bookname);
    $bookauthor = mysqli_real_escape_string($db, $bookauthor);
    $bookyear = mysqli_real_escape_string($db, $bookyear);
    $booksummary = mysqli_real_escape_string($db, $booksummary);
    $query = "UPDATE books SET author = '$bookauthor', year = '$bookyear', name = '$bookname', summary = '$booksummary' WHERE id ='$id'";
    try{
        mysqli_query($db,$query);
        echo $query;
    }
    catch(Exception $e ){
        echo $e->getMessage();
    }
    require("views/main/modifier.php");
}
function mod_books_alt($bookid){
    $bookid = $bookid;
    require("views/main/modifysubmit.php");
}

// Fonction qui supprime le livre choisi et ensuite affiche la page books
function display_books_alt($bookidinurl){
    delete_books($bookidinurl);
}

// Fonction qui ajoute le livre et affiche la page books
function display_add_alt($Title, $Author , $Year, $Summary){
    add_books($Title, $Author , $Summary , $Year);
}


// fonction envoyant à sql l'id de la ligne à supprimmer
function delete_books($bookhasidinurl){
        $bookhasidinurl = substr($bookhasidinurl,2);
        global $db;
        $query = "DELETE FROM books WHERE id = '$bookhasidinurl';" ;
        try{
            mysqli_query($db, $query);
        }
        catch(Exception $e){
            echo "Une erreur c'est procurée : " . $e->getmessage();
        }
        require("views/main/delete.php");
}
// fonction qui récupère les paramètres depuis l'url et choisi la fonction à executer
$page =  "$_SERVER[REQUEST_URI]";
if (strpos($page, "bookid=")){
    $bookidurl = intval(preg_replace('/[^0-9]+/', '', $page), 10);
    display_books_alt($bookidurl);
}
else if (strpos($page, "modifyid=")){
    $modid = $_GET["modifyid"];
    mod_books_alt($modid);
}
else if (strpos($page, "bookidmod=")){
    $bookidmod = $_GET["bookidmod"];
    $titlenew = $_GET["authormod"];
    $authornew = $_GET["yearmod"];
    $yearnew = $_GET["titlemod"];
    $summarynew = $_GET["summarymod"];
    modify_books($titlenew ,$authornew, $yearnew,$summarynew, $bookidmod );
}
else if (strpos($page, "title=")){
$Title = $_GET["title"];
$Author = $_GET["author"];
$Year = $_GET["year"];
$Summary = $_GET["summary"];
display_add_alt($Title, $Author, $Year, $Summary, $id);
}
    




// fonction pour afficher le code dynamiquement
function display_books(){
    global $db ;
    $query = "SELECT * FROM books";
    $result = mysqli_query($db,$query);
    
    if ($result->num_rows > 0) {
        // ligne de code qui permet la création de code html selon la quantité de livres
            while($row = $result->fetch_assoc())
         {
          echo '<div class="displaybookscss">'.' <div class="idtable">'. $row["id"].'</div> ' .
          ' <div class="nametable"> ' . $row["name"] .'</div> ' .
           '<div class="authortable">' . $row["author"].'</div>'.
             '<div class="yeartable">' .$row["year"] . '</div>'.
             '<div class="summarytable">' . $row["summary"]. '</div>'.
             "<br>"  .'</div>';
        }
      } else {
        echo '<div class="nobookstext">Il n y a pas de livres en stock :/</div>';
      }
    
}

function display_book_where_id($bookid){
    global $db;
    $query = "SELECT * FROM books WHERE id = '$bookid'";
    $result = mysqli_query($db,$query);
    if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
        echo'<form action="model.php" method="get" name="submitmodify2" class="formchange"> 
        Id du livre choisi : <input type ="text" Value ="'. $bookid .'" name = "bookidmod" readonly="readonly">
        <br> <br>Titre du livre : <input type="text" name="titlemod" value ="' . $row["name"] .'"> 
        Autheur du livre : <input type="text" name ="authormod" Value = "'.$row["author"].'"> 
        <br> <br> <br>Année de publication : <input type = "text" name = "yearmod" Value = "'.$row["year"].'">
        Sommaire : <input type = "text" name = "summarymod" Value = "'.$row["summary"].'"> 
        <br> <br><input type="submit" class=submitmodifybutton>
        </form>';
        }
    }
    else {
        echo "L'id que vous avez selectionné ne correspond à aucun livre";
    }
}
?>