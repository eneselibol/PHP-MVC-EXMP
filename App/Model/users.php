<?php
require_once(CORE.'model.php');
class Users extends Model
{
    public function getAll()
    {
        $querytu = $this->db->prepare("SELECT * FROM users ");
        $querytu->execute();
        return $querytu->fetchAll();
    }
}