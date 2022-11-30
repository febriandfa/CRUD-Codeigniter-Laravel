<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class mahasiswa extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('mahasiswa_m');
    }
    function index() {
        $data['result']=$this->mahasiswa_m->get_data();
        $this->load->view('list', $data);
    }
    function add() {
        $data['jk'] = $this->mahasiswa_m->get_jk();
        $data['prodi'] = $this->mahasiswa_m->get_prodi();
        $this->load->view('form', $data);
    }
    function insert() {
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama_mhs');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $prodi = $this->input->post('prodi');
        $foto = $this->input->post('foto');
        $email = $this->input->post('email');
        $params = array($nim, $nama, $jk, $alamat, $prodi, $foto, $email);
        $this->mahasiswa_m->insert($params);
        return redirect('mahasiswa');
    }
    function edit($params = "") {
        $data['jk'] = $this->mahasiswa_m->get_jk();
        $data['prodi'] = $this->mahasiswa_m->get_prodi();
        $data['result'] = $this->mahasiswa_m->edit($params);
        $this->load->view('edit', $data);
    }
    function update() {
        $id = $this->input->post('id_mhs');
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama_mhs');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $prodi = $this->input->post('prodi');
        $foto = $this->input->post('foto');
        $email = $this->input->post('email');
        $params = array($nim, $nama, $jk, $alamat, $prodi, $foto, $email, $id);
        $this->mahasiswa_m->update($params);
        return redirect('mahasiswa');
    }
    function delete($params = "") {
        $this->mahasiswa_m->hapus($params);
        return redirect('mahasiswa');
    }
    function cariJk() {
        $id_jk = $this->input->post('id_jk');
        $id_jk = $this->mahasiswa_m->cariJk($id_jk);
        if ($jk->num_rows()>0) {
            $jk = $jk->row_array();
            echo $jk['nama_jk'];
        }
    }
    function cariProdi() {
        $id_prodi = $this->input->post('id_prodi');
        $id_prodi = $this->mahasiswa_m->cariProdi($id_prodi);
        if ($prodi->num_rows()>0) {
            $prodi = $prodi->row_array();
            echo $prodi['nama_prodi'];
        }
    }
}