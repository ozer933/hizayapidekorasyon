<?php


class Category extends  CI_Model
{

    public function all($limit = null, $offset = null)
    {
        if ($limit != null) {
            $this->db->limit($limit, $offset);
        }

        return $this->db
            ->from('categories')
            ->where('language', $this->language)
            ->order_by('id', 'desc')
            ->get()
            ->result();

    }

    public function count()
    {
        return $this->db
            ->from('categories')
            ->where('language', $this->language)
            ->count_all_results();
    }

    public function findId($id)
    {
        $category = $this->db
            ->from('categories')
            ->where('id', $id)
            ->where('language', $this->language)
            ->order_by('id', 'desc')
            ->get()
            ->row();

        $category->projects = $this->db
            ->from('projects')
            ->where('projectId', $category->id)
            ->order_by('id', 'desc')
            ->get()
            ->result();

        foreach ($category->projects as $project) {
            $project->images = $this->db
                ->from('project_images')
                ->where('galleryId', $project->id)
                ->order_by('id', 'desc')
                ->get()
                ->result();
        }

        return $category;

    }

    public function getCategoryProjects($key = null)
    {

        if ($key === null) return false;

        $category = $this->db
            ->from('categories')
            ->where('item', $key)
            ->where('language', $this->language)
            ->order_by('id', 'desc')
            ->get()
            ->row();

    
        $projects = $this->db
            ->from('projects')
            ->where('projectId', $category->id)
            ->order_by('id', 'desc')
            ->get()
            ->result();

        foreach ($projects as $project) {
            $project->images = $this->db
                ->from('project_images')
                ->where('galleryId', $project->id)
                ->order_by('id', 'desc')
                ->limit(4)
                ->get()
                ->result();
        }

        return $projects;

    }

    public function getCategory($key = null)
    {
        if ($key === null) return false;

        return $this->db
            ->from('categories')
            ->where('item', $key)
            ->where('language', $this->language)
            ->get()
            ->row();
    }


}