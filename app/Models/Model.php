<?php

namespace App\Models;
use PDO;
use Database\DBConnection;
use stdClass;
use DateTime;
abstract class Model{
    protected $db;
    protected $table;

        public function __construct(DBConnection $db){
            $this->db = $db;
        }

        public function read(): array{
            $stmt = $this->db->getPDO()->query("SELECT * FROM {$this->table} ORDER BY createAt DESC");
            $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
            return $stmt->fetchAll();
        }

        public function findById(int $id): Model{
/* fonction permettant de voir un article*/
            $stmt = $this->db->getPDO()->prepare('SELECT * FROM article WHERE id=? ');
            $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
            $stmt->execute([$id]);
            return $stmt->fetch();


        }
        
        
        

        public function getCreateAt(): string{
           $date = (new DateTime($this->createAt))->format('d/m/Y à H:m');
           return $date;
        }

}