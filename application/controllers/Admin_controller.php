<?php
class Admin_controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
            
        $this->load->model('M_admin'); 
        }

    public function tambahView(){
        $data['content'] = 'tambahDataGunung';
        $this->load->view('template', $data);
    }

/*penyakit*/  
    public function save(){
        $this->M_admin->tambah();
        redirect('Main_controller/halaman3/');
    }
    
    public function update_pk($id_penyakit){
		$this->M_admin->update($id_penyakit);
		redirect('index.php/Main/halaman3/');
    }
     
    public function delete_pk($id_penyakit){
		$this->M_admin->delete($id_penyakit);
		redirect('index.php/Main/halaman3/');
    }
    
    public function edit_pk($id_penyakit){
		$data['penyakit']= $this->M_admin->view_by($id_penyakit);
		$this->load->view('form_edit_penyakit', $data);
    }

/*pasien*/    
    public function delete_ps($id_pasien){
		$this->M_admin->delete($id_pasien);
		redirect('index.php/Main/halaman3/');
    }

/*makanan*/
    public function edit_mk($id_makanan){
        // $where = array('namagunung', $namagunung);
        $data['gunungberapi']= $this->M_admin->view_by($id_makanan);
        $data['content'] = 'Form';
        $this->load->view('template', $data);
    }

    public function update_mk($id_makanan){
        $this->M_admin->update($id_makanan);
		redirect('index.php/Main/halaman3/');
    }
    
/*aturan*/
    public function save_at(){
        $this->M_admin->tambah();
        redirect('index.php/Main/halaman3/');
    }

    public function edit_at($id_aturan){
        // $where = array('namagunung', $namagunung);
        $data['gunungberapi']= $this->M_admin->view_by($id_aturan);
        $data['content'] = 'Form';
        $this->load->view('template', $data);
    }

    public function delete_at($id_aturan){
		$this->M_admin->delete($id_aturan);
		redirect('index.php/Main/halaman3/');
    }

    public function update_at($id_aturan){
		$this->M_admin->update($id_aturan);
		redirect('index.php/Main/halaman3/');
    }


}