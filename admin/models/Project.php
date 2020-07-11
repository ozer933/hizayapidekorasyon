<?php

class Project extends CI_Model
{

    public function id($id)
    {
        return $this->db
            ->from($this->table)
            ->where('id', $id)
            ->where('language', $this->language)
            ->get()
            ->row();
    }


    public function all($limit = null, $offset = null)
    {
        $this->utils->filter();


        if ($limit != null) {
            $this->db->limit($limit, $offset);
        }

        return $this->db
            ->select("{$this->table}.*, (SELECT COUNT(id) FROM project_images WHERE project_images.galleryId = {$this->table}.id) images", false)
            ->from($this->table)
            ->where('language', $this->language)
            ->order_by('order', 'asc')
            ->order_by('id', 'asc')
            ->get()
            ->result();
    }


    public function count()
    {
        $this->utils->filter();

        return $this->db
            ->from($this->table)
            ->where('language', $this->language)
            ->count_all_results();
    }


    public function insert($data = array())
    {
        $order = 1;
        $lastOrderRecord = $this->db
            ->from($this->table)
            ->where('language', $this->language)
            ->order_by('order', 'desc')
            ->limit(1)
            ->get()
            ->row();

        if ($lastOrderRecord) {
            $order = $lastOrderRecord->order + 1;
        }


        $this->db->insert($this->table, array(
            'projectId'       => $this->input->post('projectId'),
            'title'           => $this->input->post('title'),
            'slug'            => $this->input->post('autoSlug') === 'true' ? makeSlug($this->input->post('title')) : makeSlug($this->input->post('slug')),
            'image'           => $data['image']['name'],
            'summary'         => $this->input->post('summary'),
            'detail'          => $this->input->post('detail'),
            'type'            => $this->input->post('type'),
            'location'        => $this->input->post('location'),
            'price'           => $this->input->post('price'),
            'room'            => $this->input->post('room'),
            'metaTitle'       => $this->input->post('metaTitle'),
            'metaDescription' => $this->input->post('metaDescription'),
            'metaKeywords'    => $this->input->post('metaKeywords'),
            'order'           => $order,
            'language'        => $this->language
        ));

        return $this->db->insert_id();
    }


    public function update($record, $data = array())
    {
        $this->db
            ->where('id', $record->id)
            ->update($this->table, array(
                'projectId'       => $this->input->post('projectId'),
                'title'           => $this->input->post('title'),
                'slug'            => $this->input->post('autoSlug') === 'true' ? makeSlug($this->input->post('title')) : makeSlug($this->input->post('slug')),
                'image'           => $data['image']['name'],
                'summary'         => $this->input->post('summary'),
                'detail'          => $this->input->post('detail'),
                'type'            => $this->input->post('type'),
                'location'        => $this->input->post('location'),
                'price'           => $this->input->post('price'),
                'room'            => $this->input->post('room'),
                'metaTitle'       => $this->input->post('metaTitle'),
                'metaDescription' => $this->input->post('metaDescription'),
                'metaKeywords'    => $this->input->post('metaKeywords'),
            ));

        return $this->db->affected_rows();
    }


    public function delete($data)
    {
        if (is_array($data)) {
            $records = $this->db
                ->from($this->table)
                ->where_in('id', $data)
                ->get()
                ->result();

            $success = $this->db
                ->where_in('id', $data)
                ->delete($this->table);

            if ($success) {
                foreach ($records as $record) {
                    @unlink("../public/upload/project/{$record->image}");
                    @unlink("../public/upload/project/show/{$record->image}");
                    @unlink("../public/upload/project/showcase/{$record->image}");
                    @unlink("../public/upload/project/thumb/{$record->image}");
                }
            }

            return $success;
        }

        $success = $this->db
            ->where('id', $data->id)
            ->delete($this->table);

        @unlink("../public/upload/project/{$data->image}");
        @unlink("../public/upload/project/show/{$data->image}");
        @unlink("../public/upload/project/showcase/{$data->image}");
        @unlink("../public/upload/project/thumb/{$data->image}");


        return $success;
    }


    public function order($ids = null)
    {
        if (is_array($ids)) {
            $records = $this->db
                ->from($this->table)
                ->where_in('id', $ids)
                ->where('language', $this->language)
                ->order_by('order', 'asc')
                ->order_by('id', 'desc')
                ->get()
                ->result();

            $firstOrder = 0;
            $affected = 0;

            foreach ($records as $record) {
                if ($firstOrder === 0) {
                    $firstOrder = $record->order;
                }

                $order = array_search($record->id, $ids) + $firstOrder;

                if ($record->order != $order) {
                    $this->db
                        ->where('id', $record->id)
                        ->update($this->table, array('order' => $order));

                    if ($this->db->affected_rows() > 0) {
                        $affected++;
                    }
                }

            }

            return $affected;
        }
    }

    public function getCategories()
    {
        return $this->db
            ->from('categories')
            ->where('language', $this->language)
            ->order_by('order', 'asc')
            ->get()
            ->result();
    }


    public function image($id)
    {
        return $this->db
            ->from('project_images')
            ->where('id', $id)
            ->where('language', $this->language)
            ->get()
            ->row();
    }


    public function imageAll($gallery, $limit = null, $offset = null)
    {
        $this->utils->filter();


        if ($limit != null) {
            $this->db->limit($limit, $offset);
        }

        return $this->db
            ->from('project_images')
            ->where('galleryId', $gallery->id)
            ->where('language', $this->language)
            ->order_by('order', 'asc')
            ->order_by('id', 'asc')
            ->get()
            ->result();
    }


    public function imageCount($gallery)
    {
        $this->utils->filter();

        return $this->db
            ->from('project_images')
            ->where('galleryId', $gallery->id)
            ->where('language', $this->language)
            ->count_all_results();
    }


    public function imageInsert($gallery, $data = array())
    {
        $order = 1;
        $lastOrderRecord = $this->db
            ->from('project_images')
            ->where('galleryId', $gallery->id)
            ->where('language', $this->language)
            ->order_by('order', 'desc')
            ->limit(1)
            ->get()
            ->row();


        if ($lastOrderRecord) {
            $order = $lastOrderRecord->order + 1;
        }


        $this->db->insert('project_images', array(
            'galleryId' => $gallery->id,
            'image'     => $data['image']['name'],
            'order'     => $order,
            'language'  => $this->language,
        ));

        return $this->db->insert_id();
    }


    public function imageUpdate($record, $data = array())
    {
        $this->db
            ->where('id', $record->id)
            ->update('project_images', array(
                'image' => $data['image']['name'],
            ));

        return $this->db->affected_rows();
    }


    public function imageDelete($data)
    {
        if (is_array($data)) {
            $records = $this->db
                ->from('project_images')
                ->where_in('id', $data)
                ->get()
                ->result();

            $success = $this->db
                ->where_in('id', $data)
                ->delete('project_images');

            if ($success) {
                foreach ($records as $record) {
                    @unlink("../public/upload/project/thumb/{$record->image}");
                    @unlink("../public/upload/project/normal/{$record->image}");
                    @unlink("../public/upload/project/show/{$record->image}");
                    @unlink("../public/upload/project/showcase/{$record->image}");
                }
            }

            return $success;
        }

        $success = $this->db
            ->where('id', $data->id)
            ->delete('project_images');

        @unlink("../public/upload/project/thumb/{$data->image}");
        @unlink("../public/upload/project/normal/{$data->image}");
        @unlink("../public/upload/project/show/{$data->image}");
        @unlink("../public/upload/project/showcase/{$data->image}");


        return $success;
    }


    public function imageOrder($ids = null)
    {
        if (is_array($ids)) {
            $records = $this->db
                ->from('project_images')
                ->where_in('id', $ids)
                ->where('language', $this->language)
                ->order_by('order', 'asc')
                ->order_by('id', 'desc')
                ->get()
                ->result();

            $firstOrder = 0;
            $affected = 0;

            foreach ($records as $record) {
                if ($firstOrder === 0) {
                    $firstOrder = $record->order;
                }

                $order = array_search($record->id, $ids) + $firstOrder;

                if ($record->order != $order) {
                    $this->db
                        ->where('id', $record->id)
                        ->update('project_images', array('order' => $order));

                    if ($this->db->affected_rows() > 0) {
                        $affected++;
                    }
                }

            }

            return $affected;
        }

    }

} 