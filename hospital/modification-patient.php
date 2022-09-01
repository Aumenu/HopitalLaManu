<?php
require 'model/Db.php';
require 'model/Patient.php';
require_once 'controllers/modification-patientCtrl.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification des données patients</title>
</head>
<body>
<?php if (isset($match)) { ?>
    <form method="POST" action="modification-patient.php">
    <label for="firstname">Nom :</label>
            <input type="text" id="firstname" name="firstname" placeholder="exemple : Dupont" class="inputForm" value="<?= $patientbyid->firstName ?>" placeholder="firstName">
            <span class="text-danger"><?= isset($errors['firstname']) ? $errors['firstname']: '' ?></span>
        </div>
        <div>
            <label for="lastname">Prénom :</label>
            <input type="text" id="lastname" name="lastname"  placeholder="exemple : Aurélien" class="inputForm" value="<?= $patientbyid->lastName ?>">
            <span class="text-danger"><?= isset($errors['lastname']) ? $errors['lastname']: '' ?></span>
        </div>
        <div>
            <label for="birthdate">Date de naissance :</label>
            <input type="date" id="birthdate" name="birthdate" class="inputForm" value="<?= $patientbyid->birthdate ?>">
            <span class="text-danger"><?= isset($errors['birthdate']) ? $errors['birthdate']: '' ?></span>
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="number" id="phone" name="phone" placeholder="exemple : 0632586942" class="inputForm" value="<?= $patientbyid->phone ?>">
            <span class="text-danger"><?= isset($errors['mail']) ? $errors['mail']: '' ?></span>
        </div>
        <div>
            <label for="mail">Email :</label>
            <input type="mail" id="mail" name="mail" placeholder="exemple : DupontAurélien@laposte.net" class="inputForm" value="<?= $patientbyid->mail ?>">
        </div>
        <div class="button">
            <input type="submit"  value="Modification" class="ModifyButton" name="dataFormModifydPatients">
        </div>
    </form>
    <?php } else { ?>
        <p>Une erreur est survenue veuillez contacter le service informatique</p>
    <?php } ?>
</body>
</html>