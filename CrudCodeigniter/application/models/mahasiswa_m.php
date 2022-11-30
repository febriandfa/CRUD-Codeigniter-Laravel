<?php

if(!defined('BASEPATH')) {
    exit('No direct script access allowe');
}

class mahasiswa_m extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function index() {

    }
    function get_data() {
        $sql = "SELECT a.*, b.nama_jk, c.nama_prodi FROM tbl_mhs a JOIN tbl_jk b JOIN tbl_prodi c ON a.jk=b.id_jk AND a.prodi=c.id_prodi";
        $query = $this->db->query($sql);
        if($query->num_rows()>0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    function insert($params ="") {
        $sql = "INSERT INTO tbl_mhs VALUES ('', ?, ?, ?, ?, ?, ?, ?)";
        return $this->db->query($sql, $params);
    }
    function edit($params) {
        $sql = "SELECT * FROM tbl_mhs WHERE id_mhs = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows()>0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    function update($params) {
        $sql = "UPDATE tbl_mhs SET nim = ?, nama_mhs = ?, jk = ?, alamat = ?, prodi = ?, foto = ?, email = ? WHERE id_mhs = ?";
        return $this->db->query($sql, $params);
    }
    function hapus($params) {
        $sql = "DELETE FROM tbl_mhs WHERE id_mhs = ?";
        return $this->db->query($sql, $params);
    }
    function cariJk($id_mhs) {
        $this->db->where('id_jk', $id_jk);
        return $this->db->get('tbl_jk');
    }
    function get_jk() {
        $sql = "SELECT * FROM tbl_jk";
        $query = $this->db->query($sql);
        if ($query->num_rows()>0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    function cariProdi($id_mhs) {
        $this->db->where('id_prodi', $id_prodi);
        return $this->db->get('tbl_prodi');
    }
    function get_prodi() {
        $sql = "SELECT * FROM tbl_prodi";
        $query = $this->db->query($sql);
        if ($query->num_rows()>0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
}