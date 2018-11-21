<?php
class Posts extends CI_Controller{

  public function post()
  	{
  		$post_text = $this->input->post('post_text');
  		$this->load->model('post');
  		$this->post->insert_post($post_text);
  		redirect('/');
  	}
  public function get_all_content(){
    $this->load->model('Post');
    $result = $this->Post->get_all_posts();

  }
}



 ?>
