<?php

class Kelas_delapan extends CI_Model{

      function show_nilai8(){

            $hasil=$this->db->query("SELECT * FROM kelas8");

            return $hasil;

      }    

}