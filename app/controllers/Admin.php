<?

class Admin extends DController
{
    public function __construct()
    {
        parent::__construct();
        Session::checkSession();
    }

    public function Index()
    {
        $this->home();
    }

    public function home()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/home');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/footer');
    }

    public function categoryList()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data = array();
        $table = 'category';
        $catModel = $this->load->model('CatModel');
        $data['cat'] = $catModel->catList($table);

        $this->load->view('admin/categorylist', $data);
        $this->load->view('admin/footer');
    }

    public function insertCategory()
    {
        $table = 'category';
        $name = $_POST['name'];
       // echo $id.'/'.$name;
        $data = array(
            'name' => $name
        );

        $catModel = $this->load->model('CatModel');
        $res = $catModel->insertCat($table, $data);
        $mdata = array();
        if ($res == 1) {
            $mdata['msg'] = "cat added";
        } else {
            $mdata['msg'] = 'not';
        }
        $url=BASE_URL."Admin/categoryList?msg=".urlencode(serialize($mdata));
        header("Location:$url");
    }

    public function editCategory($id){
        $data = array();
        $table = 'category';
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $catModel = $this->load->model('CatModel');
        $data['catById']=$catModel->catById($table,$id);
        $this->load->view("admin/editCat",$data);
        $this->load->view("admin/footer");
    }

    public function updateCat($id=null)
    {
        $table = 'category';
        $name = $_POST['name'];
        $cond = "id=$id";
        $data = array(
            'name' => $name);

        $catModel = $this->load->model('CatModel');
        $res = $catModel->catUpdate($table, $data, $cond);

        $mdata = array();
        if ($res == 1) {
            $mdata['msg'] = "cat update";
        } else {
            $mdata['msg'] = 'not update';
        }
        $url=BASE_URL."Admin/categoryList?msg=".urlencode(serialize($mdata));
        header("Location:$url");
    }

    public function addCategory()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/addcategory');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/footer');
    }
}

?>