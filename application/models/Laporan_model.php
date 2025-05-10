<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    public function getlaporan($nopeg)
    {
        $query = "SELECT `laporan`.*
                  FROM `laporan`
                  WHERE `nopeg` = $nopeg
                  ORDER BY `tgl` DESC
                 ";
        return $this->db->query($query)->result_array();
    }

    public function getFulllaporan()
    {
        $query = "SELECT `laporan`.*
                  FROM `laporan`
                  ORDER BY `tgl` ASC
                 ";
        return $this->db->query($query)->result_array();
    }

    public function getBytanggal($dari, $sampai)
    {
        $query = "SELECT * 
                  FROM laporan 
                  WHERE date(tgl) >= '$dari' AND date(tgl) <= '$sampai'
                  ";
        return $this->db->query($query)->result_array();
    }

    public function getBytanggalnama($dari, $sampai)
    {
        $query = "SELECT * 
                  FROM `laporan` JOIN `users` 
                  ON `laporan`.`nopeg` = `users`.`nopeg`
                  WHERE date(tgl) >= '$dari' AND date(tgl) <= '$sampai'
                  ";
        return $this->db->query($query)->result_array();
    }
}
