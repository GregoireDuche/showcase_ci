<?php 
/**
 * This controller get the type of page called and get the posts of the matching category in the database
*/
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

		public function view($page) {
			
			$this->load->model('Posts', '', TRUE);
			$this->load->library('parser');
			
			$postsModel = new Posts();
			
			$context = array();
			switch ($page) {
				case 'employee' : 
					$posts = $postsModel->getPostsByCatId(employee);
				break;
				case 'freelance' :
					$posts = $postsModel->getPostsByCatId(freelance);
				break;
				default : 
					show_404();
			}
			
			$context['posts'] = $posts;
			
			$this->load->view('templates/header', $context);
			$this->parser->parse('pages/view_posts', $context);
			$this->load->view('templates/footer', $context);
		}
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */