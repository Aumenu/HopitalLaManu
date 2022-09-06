<?php
class Appointment extends Db
{
    public int $id;
    public string $dateHour;
    public int $idPatients;
    public array $error;
    //methode pour crée un rendez-vous dans la bdd
    public function createAppointment()
    {
        $query = 'INSERT INTO `appointments` (`dateHour`,`idPatients`) VALUES (:dateHour, :idPatients)';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $stmt->bindParam(':idPatients', $this->idPatients, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function appointmentList() {
        $query = 'SELECT `dateHour`,`appointments`.`id`, `firstname`, `lastname` FROM `appointments` INNER JOIN `patients` ON `patients`.`id` = `appointments`.`idPatients`';
        return $this->getQueryResult($query);
    }

    public function appointmentForm() {
        $query = 'SELECT `dateHour`,`appointments`.`id`, `firstname`, `lastname`, `birthdate`, `phone`, `mail` FROM `appointments` INNER JOIN `patients` ON `patients`.`id` = `appointments`.`idPatients`';
        return $this->getQueryResult($query);
    }
    public function getId($id):object
{
    $query = 'SELECT `dateHour`,`appointments`.`id`, `firstname`, `lastname`, `birthdate`, `phone`, `mail` FROM `appointments` INNER JOIN `patients` ON `patients`.`id` = `appointments`.`idPatients` WHERE `appointments`.`id` = :id';
    $stmt = $this->pdo->prepare($query);
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
}

public function idExist($id): bool
{
    $query =  'SELECT `dateHour`,`appointments`.`id`, `firstname`, `lastname`, `birthdate`, `phone`, `mail` FROM `appointments` INNER JOIN `patients` ON `patients`.`id` = `appointments`.`idPatients` WHERE `appointments`.`id` = :id';
    $stmt = $this->pdo->prepare($query);
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    if (empty ($result)) {
       return false;
    } else {
        return true;
    }
}

}
