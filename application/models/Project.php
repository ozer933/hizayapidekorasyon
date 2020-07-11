<?php


class Project extends  CI_Model
{

    public function all($limit = null, $offset = null)
    {
        if ($limit != null) {
            $this->db->limit($limit, $offset);
        }

        return $this->db
            ->from('projects')
            ->where('language', $this->language)
            ->order_by('order', 'asc')
            ->order_by('id', 'desc')
            ->get()
            ->result();

    }

    public function count()
    {
        return $this->db
            ->from('projects')
            ->where('language', $this->language)
            ->count_all_results();
    }



public function findIds($id)
    {
        $result = $this->db
            ->from('projects')
            ->where('projectId', $id)
            ->where('language', $this->language)
            ->get()
           ->result();

 



        return $result;
    }
    public function findId($id)
    {
        $result = $this->db
            ->from('projects')
            ->where('id', $id)
            ->where('language', $this->language)
            ->get()
            ->row();

        $result->others = $this->others($result);

        if ($result) {
            $result->images = $this->db
                ->from('project_images')
                ->where('galleryId', $result->id)
                ->order_by('order', 'asc')
                ->order_by('id', 'desc')
                ->get()
                ->result();
        }


        return $result;
    }

    public function others($project)
    {
        if (empty($project)) return false;

        return $this->db
            ->from('projects')
            ->where('id !=', $project->id)
            ->where('projectId', $project->projectId)
            ->where('language', $this->language)
            ->order_by('order', 'asc')
            ->limit(3)
            ->get()
            ->result();
    }


    public function random($limit = null, $offset = null)
    {
        if ($limit !== null) $this->db->limit($limit, $offset);

        return $this->db
            ->from('project_images')
            ->where('language', $this->language)
            ->order_by('id', 'random')
            ->get()
            ->result();
    }


}