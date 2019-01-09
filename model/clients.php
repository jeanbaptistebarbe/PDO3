<?php

class clients {

    public $id = 0;
    public $lastName = '';
    public $firstName = '';
    public $birthDate = '00/00/0000';
    public $card = false;
    public $cardNumber = NULL;
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost:3306;dbname=colyseum;charset=utf8', 'barbe', 'soleil02');
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }
    
    /**
     * methode permettant de recuperer la liste des 20 premiers clients
     * @return array
     */
    public function getClientListLimit20() {
        $query = 'SELECT `id`,`lastName`,`firstName`,DATE_FORMAT(`birthDate`,\'%e/%m/%Y\') AS `birthDate`,`card`,`cardNumber` FROM `clients` LIMIT 20;';
        $queryResult = $this->db->query($query);
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }

}
?>