<?php
try{
    $dbco = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8', 'root');
    echo "connexion établie";
}

catch(PDOException $e) {
   die( 'Impossible de traiter les données. Erreur : '.$e->getMessage());
}

if (isset($_POST['firstname'])&&
    isset($_POST['lastname'])&&
    isset($_POST['birthdate'])&&
    isset($_POST['phone'])&&
    isset($_POST['mail']) ){
        $insertion=$dbco ->prepare('INSERT INTO patients VALUE(NULL,:firstname, :lastname, :birthdate, :phone, :mail)');
        $insertion->bindValue(':firstname',$_POST['firstname']);
        $insertion->bindValue(':lastname',$_POST['lastname']);
        $insertion->bindValue(':birthdate',$_POST['birthdate']);
        $insertion->bindValue(':phone',$_POST['mail']);
        $insertion->bindValue(':mail',$_POST['mail']);
        $verification=$insertion->execute();
        if ($verification){
            echo "Insertion réussie";
        }else {
            echo "Echec d'insertion";
        }
    }
    ?>