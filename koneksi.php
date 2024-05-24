<?php
class koneksi{
    private $server="localhost";
    private $user="root";
    private $password="";
    private $db="mahasiswa_database";

    function getKoneksi(){
        return new mysqli($this->server, $this->user, $this->password, $this->db);
    }

}

?>