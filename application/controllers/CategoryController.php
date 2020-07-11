<?php


class CategoryController  extends CI_Controller
{

    public $module = 'category';



//    public function index()
//    {
//        $this->load->model('project');
//        $this->lang->load('modules/project');
//
//        $projects = array();
//        $pagination = null;
//        $projectCount = $this->project->count();
//
//        if ($projectCount > 0) {
//            $config = array(
//                'base_url' => clink(array('@project')),
//                'total_rows' => $projectCount,
//                'per_page' => 10
//            );
//
//            $this->load->library('pagination');
//            $this->pagination->initialize($config);
//
//
//            $projects = $this->project->all($this->pagination->per_page, $this->pagination->offset);
//            $pagination = $this->pagination->create_links();
//        }
//
//
//        $this->load->view('master', array(
//            'view' => 'project/index',
//            'projects' => $projects,
//            'pagination' => $pagination,
//
//        ));
//    }




    public function view($id)
    {
        $this->load->model('category');

        if (! $category = $this->category->findId($id)) {
            show_404();
        }

        $this->site->set('metaTitle', $category->title);

        $this->site->set('ogType', 'article');
        $this->site->set('ogTitle', $category->title);
        $this->site->set('ogImage', uploadPath($category->image, 'category'));


        $this->load->view('master', array(
            'view' => 'project/category',
            'category' => $category

        ));


    }



} 