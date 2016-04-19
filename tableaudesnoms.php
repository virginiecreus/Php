<!DOCTYPE html>
    <html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
 <title>Liste Simploniens</title>
    </head>
    <body>
        <table border=3px>
       
        <?php
        $fichier = 'classe-simploniens.xml';
$xml = simplexml_load_file($fichier);


foreach($xml as $personne){
    echo"<tr><td>".$personne->nom.'<td> '.$personne->prenom.'<td> '
    .$personne->date_naissance.'</tr><td>'; 
}

?>
<table>
    </body>
</html>