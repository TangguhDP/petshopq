<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_web extends CI_Model {

    function selectUserAccount($data){
        $where ='';
        if(isset($data['email'])){
            $where = "WHERE email = '".$this->db->escape_str($data['email'])."' ";
        }
        if(isset($data['id_user'])){
            $where = "WHERE id_user = '".$this->db->escape_str($data['id_user'])."' ";
        }

        $check = $this->db->query("SELECT * FROM user ".$where)->result();
        
        if($check){
            return $check;
        }
    }

    function createUserAccount($data){
        if($data){
            $dataIn = array(
                'nama' => $data['nama'],
                'email' => $data['email'],
                'alamat' => $data['alamat'],
                'role' => $data['role'],
                'password' => $data['password'],
                'created_at' => date('Y-m-d H:i:s')
            );
            $this->db->insert('user',$dataIn);
    
            return true;
        }
    }

    function editUserAccount($data){
        $dataIn = array(
            'nama' => $data['nama'],
            'email' => $data['email'],
            'alamat' => $data['alamat'],
            'role' => $data['role'],
            'edited_at' => date('Y-m-d H:i:s')
        );

        if($data['password']){
            $dataIn['password'] = $data['password'];
        }
        
        if($data['id_user']){
            $this->db->where('id_user',$data['id_user']);
            $this->db->update('user',$dataIn);
            return true;
        }

       
    }

    function deleteUserAccount($id_user){
        if($id_user){
            $this->db->where('id_user', $id_user);
            $this->db->delete('user');
            return true;
        }
        
    }

    public function selectProduk($data){
        
        $where ='';
        if(isset($data['nama'])){
            $where = 'WHERE nama LIKE "%'.$this->db->escape_str($data['nama']).'%" ';
        }

        if(isset($data['id_produk'])){
            $where = 'WHERE id_produk = "'.$this->db->escape_str($data['id_produk']).'" ';
        }

        $results = $this->db->query('SELECT * FROM produk '.$where)->result();

        if($results){
            return $results;
        }

    }

    function createProduk($data){
        if($data){
            $dataIn = array(
                'nama' => $data['nama'],
                'harga' => $data['harga'],
                'stok' => $data['stok'],
                'deskripsi' => $data['deskripsi'],
                'created_at' => date('Y-m-d H:i:s')
            );
            $this->db->insert('produk',$dataIn);
    
            return true;
        }
    }

    function editProduk($data){
        
        $dataIn = array(
            'nama' => $data['nama'],
            'harga' => $data['harga'],
            'stok' => $data['stok'],
            'deskripsi' => $data['deskripsi'],
            'edited_at' => date('Y-m-d H:i:s')
        );

        if($data['id_produk']){
            $this->db->where('id_produk',$data['id_produk']);
            $this->db->update('produk',$dataIn);
            return true;
        }
    }

    function updateStok($data){
        $dataIn = array(
            'stok' => $data['stok'],
            'edited_at' => date('Y-m-d H:i:s')
        );

        if($data['id_produk']){
            $this->db->where('id_produk',$data['id_produk']);
            $this->db->update('produk',$dataIn);
            return true;
        }
    }

    function deleteProduk($id_produk){
        if($id_produk){
            $this->db->where('id_produk', $id_produk);
            $this->db->delete('produk');
            return true;
        }
        
    }

    function createCheckout($data){
        if($data){
            $dataIn = array(
                'id_produk' => $data['id_produk'],
                'id_user' => $data['id_user'],
                'stok' => $data['stok'],
                'created_at' => date('Y-m-d H:i:s')
            );
            $this->db->insert('checkout',$dataIn);
    
            return true;
        }
    }

}