<?php
class Posts extends CI_Model {
	
	var $title = '';
	var $link = '';
	var $description = '';
	
	function __construct() {
		// Call the Model constructor
		parent::__construct();
	}
	
	public function getPosts() {
		
		$query = $this->db->get('posts');
		return $query->result();
	}
	
	public function getPostsByCatId($id = null) {
		if ($id == null) {
			return $this->getPosts();
		} 
		
		$query = ' SELECT * FROM posts p'.
				 ' INNER JOIN post_categories pc'.
				 ' ON p.id = pc.post_id '.
				 " WHERE pc.category_id = $id";
		return $this->db->query($query)->result();
				 		
	}
	
}
?>