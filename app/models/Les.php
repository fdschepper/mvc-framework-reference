<?php
class Les
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getLessen()
    {
        $this->db->query("SELECT * FROM les INNER JOIN instructeur ON les.InstructeurId	= instructeur.Id inner join leerling ON les.LeerlingId = leerling.Id where instructeur.Id = :Id");
        $this->db->bind(':Id', 2);
        $result = $this->db->resultSet();
        return $result;
    }
}
