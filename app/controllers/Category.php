<?

class Category extends DController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function categoryList()
    {
        $data = array();
        $table = 'category';
        $catModel = $this->load->model('CatModel');
        $data['cat'] = $catModel->catList($table);
        $this->load->view('category', $data);
    }

    public function catById()
    {
        $id = 1;
        $data = array();
        $table = 'category';
        $catModel = $this->load->model('CatModel');
        $data['catById'] = $catModel->catById($table, $id);
        $this->load->view('catById', $data);
    }

    public function updateCategory()
    {
        $id = 0;
        $data = array();
        $table = 'category';
        $catModel = $this->load->model('CatModel');
        $data['catById'] = $catModel->catById($table, $id);
        $this->load->view('catupdate', $data);
    }

    public function updateCat()
    {
        $table = 'category';
        $id = $_POST['id'];
        $name = $_POST['name'];
        $cond = "id=$id";

        echo $id.' '.$name.' '.$cond.'<br>';

        $data = array(
          //  'id' => $id,
            'name' => $name);

        $catModel = $this->load->model('CatModel');
        $res = $catModel->catUpdate($table, $data, $cond);

        $mdata = array();
        if ($res == 1) {
            $mdata['msg'] = "cat update";
        } else {
            $mdata['msg'] = 'not update';
        }
        $this->load->view('catupdate', $mdata);
    }

    public function addCategory()
    {
        $this->load->view('addcategory');
    }

    public function insertCategory()
    {
        $table = 'category';
        $id = $_POST['id'];
        $name = $_POST['name'];
        $data = array(
            'id' => $id,
            'name' => $name);
        $catModel = $this->load->model('CatModel');
        $res = $catModel->insertCat($table, $data);
        $mdata = array();
        if ($res == 1) {
            $mdata['msg'] = "cat added";
        } else {
            $mdata['msg'] = 'not';
        }
        $this->load->view('addCategory', $mdata);
    }


    public function deleteCatById()
    {
        $table = 'category';
        $cond = "id=1";
        $data = array();
        $catModel = $this->load->model('CatModel');
        $$catModel->delCatById($table, $cond);
    }
}

?>