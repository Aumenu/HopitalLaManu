<?php 
require 'index.php';
require 'model/Db.php';
require 'model/Appointement.php';
require 'controllers/liste-rendezvousCtrl.php';


?>
<h2 class="listrendezvous">Liste des rendez-vous</h2>
<div class="listRendezvous">
    <?php
if (is_array($rendezvousList)) { ?>
        <table>
            <thead>
                <tr>
                    <th>Date et heure</th>
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
                foreach ($rendezvousList as $rendezvous) { ?>
                    <tr>
                        <td><?= changeDate($rendezvous->dateHour, 'Y-m-d H:i:s', 'd/m/Y H:i:s') ?></td>
                        <td><?= $rendezvous->lastname ?></td>
                        <td><?= $rendezvous->firstname ?></td>
                        <td><a href="rendez-vous.php?id=<?= $rendezvous->id ?>">plus d'information ou modification</a></td>
                    </tr>
                <?php   } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>Une erreur est survenue veuillez contacter le service informatique</p>
    <?php }
    ?>
    <a href="ajout-rendezvous.php" ><button id="buttonAjoutPatient">Ajout d'un nouveau rendez-vous</button></a>
    
</body>

</div>

</body>
</html>