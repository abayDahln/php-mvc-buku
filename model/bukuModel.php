<?php
include "../connection.php";

class bukuModel extends connection{

    public function getAll(){
        $query = $this->connect()->query("SELECT * FROM buku")->fetch_all(MYSQLI_ASSOC);
        return $query;
    }

    public function getById($id){
        $query = $this->connect()->query("SELECT * FROM buku WHERE id='$id'")->fetch_assoc();
        return $query;
    }
}

?>