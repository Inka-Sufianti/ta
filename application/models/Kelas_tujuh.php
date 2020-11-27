<?php

class Kelas_tujuh extends CI_Model{

      function show_nilai7(){

            $hasil=$this->db->query("SELECT * FROM kelas7");

            return $hasil;

      }    

}