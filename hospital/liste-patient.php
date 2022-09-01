<?php 
require 'index.php';
require 'model/Db.php';
require 'model/Patient.php';
require 'controllers/liste-patientCtrl.php';



?>
<h2 class="pageNamePatient">Liste des patients</h2>
<div class="listPatient">
    <?php
if (is_array($patientList)) { ?>
        <table>
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                /**
                 * On parcours la liste des clients.
                 */
                foreach ($patientList as $patient) { ?>
                    <tr>
                        <td><?= $patient->id ?></td>
                        <td><?= $patient->lastname ?></td>
                        <td><?= $patient->firstname ?></td>
                        <td><a href="fiche-patient.php?id=<?= $patient->id ?>">plus d'information</a></td>
                    </tr>
                <?php   } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>Une erreur est survenue veuillez contacter le service informatique</p>
    <?php }
    ?>
    <a href="ajout-patient.php" ><button id="buttonAjoutPatient">Ajout d'un nouveau patient</button></a>
</body>

</div>

</body>
</html>