<?php

class Kelas_sembilan extends CI_Model{

      function show_nilai9(){

            $hasil=$this->db->query("SELECT * FROM kelas9");

            return $hasil;

      }    

}