<?php
require 'model/Db.php';
require 'model/Appointement.php';
require 'controllers/fiche-rendezvousCtrl.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fiche rendez-vous</title>
</head>
<body>
<main>
<?php if (isset($match)) { ?>
    <table class="tableAppointment">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Téléphonne</th>
                <th>Email</th>
                <th>Date et heure du rendez-vous
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border"><?= $appointmentbyid->firstname  ?></td>
                <td class="border"><?= $appointmentbyid->lastname?></td>
                <td class="border"><?= $appointmentbyid->birthdate ?></td>
                <td class="border"><?= $appointmentbyid->phone ?></td>
                <td class="border"><?= $appointmentbyid->mail ?></td>
                <td class="border"><?= $appointmentbyid->dateHour ?></td>
            </tr>
        </tbody>
    </table>
    <?php }else{ ?>
    <?= $errors['id'] ?>
<?php } ?>
</main>
<a href="liste-rendezvous.php" ><button id="buttonReturnList">Retour à la liste des rendez-vous</button></a>
</body>

</html>