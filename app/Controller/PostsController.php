
<?php
class PostsController extends AppController {
    public $name = 'Posts';
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }
	
	public function view($id)
	{
	$this->Post->id=$id;
	$this->set("post",$this->post->read());
	
	}
	
}
?>
