<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model
{
    public function addUser( $item )
    {
        $query = "INSERT INTO users (name, email, password, created_at, updated_at) VALUES ( ?, ?, ?,?,?)";
        $values = array(
            $item['c_name'],
            $item['c_email'],
            $item['c_password'],
            date("Y-m-d, H:i:s"),
            date("Y-m-d, H:i:s")
          );
        $this->db->query($query, $values);
    }


    public function checkLog($email, $password)
    {
      return $this->db->query(
        "SELECT *FROM users WHERE email=? AND password=?",
        array($email, $password)
        )->row_array();

    }
}
