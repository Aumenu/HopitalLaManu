<?php
declare(strict_types=1);
require 'index.php';
require 'model/Db.php';
require 'model/Patient.php';
require_once 'controllers/ajout-patientCtrl.php';



?>

<body>
    <p class="bg-danger" id="patientRegister"><?= isset($errors['patientRegister']) ? $errors['patientRegister']: '' ?></p>
    <form method="POST" action="ajout-patient.php">
        <div>
            <label for="firstname">Nom :</label>
            <input type="text" id="firstname" name="firstname" placeholder="exemple : Dupont" class="inputForm" value="<?= isset($_POST['firstname'])? $_POST['firstname']: '' ?>" placeholder="firstName">
            <span class="text-danger"><?= isset($errors['firstname']) ? $errors['firstname']: '' ?></span>
        </div>
        <div>
            <label for="lastname">Prénom :</label>
            <input type="text" id="lastname" name="lastname" placeholder="exemple : Aurélien" class="inputForm">
            <span class="text-danger"><?= isset($errors['lastname']) ? $errors['lastname']: '' ?></span>
        </div>
        <div>
            <label for="birthdate">Date de naissance :</label>
            <input type="date" id="birthdate" name="birthdate" class="inputForm">
            <span class="text-danger"><?= isset($errors['birthdate']) ? $errors['birthdate']: '' ?></span>
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="number" id="phone" name="phone" placeholder="exemple : 0632586942" class="inputForm">
            <span class="text-danger"><?= isset($errors['mail']) ? $errors['mail']: '' ?></span>
        </div>
        <div>
            <label for="mail">Email :</label>
            <input type="mail" id="mail" name="mail" placeholder="exemple : DupontAurélien@laposte.net" class="inputForm">
        </div>
        <div class="button">
            <input type="submit"  value="Inscription" class="inscrptionButton" name="dataFormValidPatients">
        </div>
    </form>

</body>

</html>