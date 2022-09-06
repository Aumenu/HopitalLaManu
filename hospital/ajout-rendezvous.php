<?PHP
require 'index.php';
require 'model/Db.php';
require 'model/Patient.php';
require 'model/Appointement.php';
require 'controllers/ajout-rendezvousCtrl.php'
?>

<H2>Rendez-vous</H2>
<form class="addPatientForm" action="ajout-rendezvous.php" method="post">
<label for="patientInfo">Choisissez un patient :</label>
    <select name="patientInfo">
             <?php foreach ($patientList as $patient) { ?>
            <option value="<?= $patient->id?>"><?= $patient->firstname . " " . $patient->lastname . " " . $patient->birthdate ?></option>
        <?php } ?>
    </select>
    <p class="textRed"><?= isset($errors['id']) ? $errors['id'] : '' ?></p>
    <div>
    <label for="dateHour">Date de rendez-vous</label>
    <input type="datetime-local" id="dateHour" name="dateHour">
    <p class="textRed"><?= isset($errors['formatDateHour']) ? $errors['formatDateHour'] : '' ?></p>
    </div>
    <input type="submit"  value="Inscription" class="inscrptionButton" name="validForm">
    </form>

    </body>