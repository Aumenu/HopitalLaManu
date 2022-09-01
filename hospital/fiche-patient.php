<?php 
require 'model/Db.php';
require 'model/Patient.php';
require 'controllers/fiche-patientCtrl.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fiche patient</title>
</head>
<body>
<main>
<?php if (isset($match)) { ?>
    <table class="tablePatient">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Téléphonne</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border"><?= $patientbyid->firstname  ?></td>
                <td class="border"><?= $patientbyid->lastname?></td>
                <td class="border"><?= $patientbyid->birthdate ?></td>
                <td class="border"><?= $patientbyid->phone ?></td>
                <td class="border"><?= $patientbyid->mail ?></td>
            </tr>
        </tbody>
    </table>
<?php }else{ ?>
    <?= $errors['id'] ?>
<?php } ?>
</main>
<?php if (isset($match)) { ?>
    <form method="POST" action="fiche-patient.php">
        <input type="hidden" value="<?= $patientbyid->id ?>" name="id" />
    <label for="firstname">Nom :</label>
            <input type="text" id="firstname" name="firstname"  class="inputForm" value="<?= $patientbyid->firstname ?>">
            <span class="text-danger"><?= isset($errors['firstname']) ? $errors['firstname']: '' ?></span>
        </div>
        <div>
            <label for="lastname">Prénom :</label>
            <input type="text" id="lastname" name="lastname" class="inputForm" value="<?= $patientbyid->lastname ?>">
            <span class="text-danger"><?= isset($errors['lastname']) ? $errors['lastname']: '' ?></span>
        </div>
        <div>
            <label for="birthdate">Date de naissance :</label>
            <input type="date" id="birthdate" name="birthdate" class="inputForm" value="<?= $patientbyid->birthdate ?>">
            <span class="text-danger"><?= isset($errors['birthdate']) ? $errors['birthdate']: '' ?></span>
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="number" id="phone" name="phone"  class="inputForm" value="<?= $patientbyid->phone ?>">
            <span class="text-danger"><?= isset($errors['mail']) ? $errors['mail']: '' ?></span>
        </div>
        <div>
            <label for="mail">Email :</label>
            <input type="mail" id="mail" name="mail"  class="inputForm" value="<?= $patientbyid->mail ?>">
        </div>
        <div class="button">
            <input type="submit"  value="Modification" class="ModifyButton" name="dataFormModifydPatients">
        </div>
    </form>
    <?php } else { ?>
        <p>Une erreur est survenue veuillez contacter le service informatique</p>
    <?php } ?>
<a href="liste-patient.php" ><button id="buttonReturnList">Retour à la liste des patients</button></a>
</body>

</html>