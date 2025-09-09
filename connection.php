<?php

class connection{

    public function connect(){
        return new mysqli("localhost", "root", "", "buku_db");
    }
    
}

?>