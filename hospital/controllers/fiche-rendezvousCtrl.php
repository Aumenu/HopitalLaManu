<?php
$appointment = new Appointment;
$errors = [];

$appointmentid = $_GET['id'];
if (isset($appointmentid)) {
    $id = htmlspecialchars($appointmentid);
    if (!is_numeric($id)) {
        $errors['id'] = 'L\'id renseigner ne respecte pas le format attendu';
    }
    if (empty($errors)) {
        if ($appointment->idExist($id)) {
            $appointmentbyid = $appointment->getId($appointmentid);
            $match = true;
        } else {
            $errors['id'] = 'Aucun patient avec cet id n\'existe.';
        }
    }
} else {
    $errors['id'] = 'Aucun id n\'est renseigner';
}