<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model {

  public function insert_post($post_text)
  {
    $data = $this->session->userdata();

    $query = "INSERT INTO posts (post, created_at, updated_at, users_id) VALUES(?,?,?,?)";
    $values = array($post_text, date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"), $data['gebruiker_id']);

    $this->db->query($query, $values);
  }

  public function get_all_posts()
  {
    $query = "SELECT * FROM posts JOIN users ON posts.users_user_id = users.users_id ORDER BY upvotes DESC";
    return $this->db->query($query)->result_array();
  }

  public function addVote($post_id)
  {
      $query = "SELECT upvotes FROM posts";
      $this->db->query($query)->$votes;
      $query = "INSERT INTO posts (upvotes) VALUES (?)";

      $values = $votes + 1 ;
      $this->db->query($query, $values);
  }

}
