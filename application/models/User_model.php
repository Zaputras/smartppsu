<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getUserMember($userrole)
    {
        $query = "SELECT `users`.*
                  FROM `users`
                  WHERE `role_id` = $userrole
                  ORDER BY 'nama' ASC
                  ";
        return $this->db->query($query)->result_array();
    }
    public function getUser()
    {
        $query = "SELECT `users`.*, `user_role`.*
                  FROM `users` JOIN `user_role`
                  ON `users`.`role_id` = `user_role`.`role_id`
                  ";
        return $this->db->query($query)->result_array();
    }


    // public function deleteuser($data)
    // {
    //     $this->db->where('id', $data);
    //     $this->db->delete('users', $data);
    // }

    public function updateProfile($data)
    {
        $this->db->where('nopeg', $data['nopeg']);
        $this->db->update('users', $data);
    }
}
