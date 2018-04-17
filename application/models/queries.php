<?php

    class Queries extends CI_Model{

        public function getPosts(){

            $posts=$this->db->get('posts');
            return $posts->result();

        }

        public function addPost($data){
            return $this->db->insert('posts', $data);

        }


        public function getSinglePost($id)
        {
            $query = $this->db->get_where('posts', array('id' => $id));

            return $query->row();
        }
        public function updatePost($data,$id)
        {
            unset($data['update']);
            return $this->db->update('posts', $data, array('id' => $id));
        }

        public function deletePost($id)
        {
            return $this->db->where('id',$id)->delete('posts');

        }


    }