<?

class Index extends DController
{
    function __construct()
    {
        parent::__construct();
    }

    public function Index(){
        $this->home();
    }

    public function home()
    {
        $this->load->view('header');
        $data = array();
        $table = "post";
        $postModel = $this->load->model('PostModel');
        $data['allPost'] = $postModel->getAllPost($table);
        $this->load->view('content', $data);
        $this->load->view('home');
        $this->load->view('footer');
    }

    public function postDetails($id)
    {
        $data = array();
        $tablePost = 'post';
        $tableCat = 'category';
        $postModel = $this->load->model('PostModel');
        $data['postbyid'] = $postModel->getPostById($tablePost, $tableCat, $id);

        $this->load->view('header');
        $this->load->view('details', $data);
        $this->load->view('footer');
    }

    public function postByCat($id)
    {
        $data = array();
        $tablePost = 'post';
        $tableCat = 'category';
        $postModel = $this->load->model('PostModel');
        $data['getcat'] = $postModel->getPostBycat($tablePost, $tableCat, $id);
        $this->load->view('header');
        $this->load->view('postbycat', $data);
        $this->load->view('footer');
    }
}

?>