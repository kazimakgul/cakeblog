<<<<<<< HEAD
<?php  

class PostsCOntroller extends AppController{
public $name="Posts";
public $helpers=array("html","forms");
}






?>
=======
<?php
class PostsController extends AppController {
    public $name = 'Posts';
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }
}
>>>>>>> origin/master
