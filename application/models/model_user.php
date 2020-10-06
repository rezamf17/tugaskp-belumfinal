<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_user extends CI_Model
{
   public function login($post)
   {
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('username', $_POST['username']);
      $this->db->where('password', sha1($_POST['password']));
      $query = $this->db->get();
      return $query;
   }
   public function getDataAbsen($post){
      $this->db->select('*');
      $this->db->from('data_absen');
      $query = $this->db->get();
      return $query;
   }


   public function get($id = null)
   {
      $this->db->from('user');
      if ($id != null) {
         $this->db->where('user_id', $id);
      }
      $query = $this->db->get();
      return $query;
   }

   public function add($post)
   {
      $params['name'] = $post['fullname'];
      $params['username'] = $post['username'];
      $params['password'] = sha1($post['password']);
      $params['address'] = $post['address'] != "" ? $post['address'] : null;
      $params['level'] = $post['level'];
      $this->db->insert('user', $params);
   }
   public function edit($post)
   {
      $params['name'] = $post['fullname'];
      $params['jenis_kelamin'] = $post['jeniskelamin'];
      $params['username'] = $post['username'];
      if (!empty($post['password'])) {
         $params['password'] = sha1($post['password']);
      }
      $params['kelas'] = $post['kelas'];
      $params['alamat'] = $post['alamat'] != "" ? $post['alamat'] : null;
      $params['level'] = $post['level'];
      $this->db->where('user_id', $post['user_id']);
      $this->db->update('user', $params);
   }
   public function del($id)
   {
      $this->db->where('user_id', $id);
      $this->db->delete('user');
   }
}
