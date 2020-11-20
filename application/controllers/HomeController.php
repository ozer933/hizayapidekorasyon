<?php


class HomeController  extends CI_Controller
{

    public $module = 'home';

    public function index()
    {
        $this->load->model('banner');
        $this->load->model('category');
		$this->load->model('project');
        $this->load->model('service');
        $this->load->model('news');



        $this->load->view('master', array(
            'view' => 'home',
            'lastProjects' => $this->category->getCategoryProjects('doneProject'),
			'categoryall' => $this->project->findIds(4),
            'nextProject' => $this->category->getCategory('nextProject'),
            'doneProject' => $this->category->getCategory('lastProject'),
            'services' => $this->category->getCategoryProjects('calismalarimiz'),
            'news' => $this->news->all(6),
            'references' => $this->reference->all(),
        ));


    }



} 