<?php

$rendezvous = new Appointment;

$rendezvousList = $rendezvous->appointmentList();

function changeDate(string $date, string $formatInput, string $formatOutput):string
{   
    $d = DateTimeImmutable::createFromFormat($formatInput, $date);
    return $d->format($formatOutput);
}
