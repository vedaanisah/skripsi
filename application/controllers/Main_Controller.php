<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_Controller extends CI_Controller{

	function __construct(){
        parent::__construct();	
        $this->load->model([
            'M_login','M_knn','M_user',"M_admin"
        ]);
        $this->load->helper(['authentification_helper']);
    }

    /* load pertama */
    function halaman4(){
        $data['pasien'] = $this->M_admin->view_all2();
        $this->load->view('tampil_data_pasien', $data);
    }

    function index3(){
        $data['penyakit'] = $this->M_admin->view_all();
        $this->load->view('tampil_data_penyakit', $data);
    }
    
    function halaman5(){
        $data['makanan'] = $this->M_admin->view_all3();
        $this->load->view('tampil_data_makanan', $data);
    }
    
    function halaman6(){
        $data['aturan'] = $this->M_admin->view_all4();
        $this->load->view('tampil_data_aturan', $data);
    }
    
    function index_pk($id_penyakit = 'P01'){
        $data['penyakit'] = $this->M_admin->view_by($id_penyakit);
        $this->load->view('form_edit_penyakit', $data);
    }

    function index_pkt($id_penyakit = 'P01'){
        $data['penyakit'] = $this->M_admin->view_by($id_penyakit);
        $this->load->view('form_tambah_penyakit', $data);
    }

    function index_mk($id_makanan = '01'){
        $data['makanan'] = $this->M_admin->view_by2($id_makanan);
        $this->load->view('form_edit_makanan', $data);
    }

    function index_mkn($id_makanan = '01'){
        $data['makanan'] = $this->M_admin->view_by2($id_makanan);
        $this->load->view('form_tambah_makanan', $data);
    }

    function index_at($id_aturan = 'P01'){
        $data['aturan'] = $this->M_admin->view_by3($id_aturan);
        $this->load->view('form_edit_aturan', $data);
    }

    function index_atr($id_aturan = 'P01'){
        $data['aturan'] = $this->M_admin->view_by3($id_aturan);
        $this->load->view('form_tambah_aturan', $data);
    }

    function index1(){
        $this->load->view('form_login_admin');
    }	
    
    function halaman(){
        $this->load->view('form_login_user');
    }

    function halaman2(){
        $this->load->view('form_login_admin');
    }

    function index(){
        /* Jika user langsung membuka halaman padahal status session false, maka akan dilempar ke halaman login */
        if(empty($this->session->userdata('userdata')) || !$this->session->has_userdata('userdata')){
            $data['userdata'] = false;
            redirect('login-page', $data);
        }
        $this->load->view('dashboard');
    }

    /*penyakit*/ 
    public function save_pk(){
        $this->M_admin->tambah_pk();
        redirect('Main_Controller/index3/');
    }

    public function update_pk($id_penyakit){
		$this->M_admin->update_pk($id_penyakit);
		redirect('Main_Controller/index3/');
    }
     
    public function delete_pk($id_penyakit){
		$this->M_admin->delete_pk($id_penyakit);
		redirect('Main_Controller/index3/');
    }
    
    public function edit_pk($id_penyakit){
		$data['penyakit']= $this->M_admin->view_by($id_penyakit);
        $this->load->view('form_edit_penyakit', $data);
        redirect('Main_Controller/index3/');
    }

    /*pasien*/
    public function delete_ps($id_pasien){
		$this->M_admin->delete_ps($id_pasien);
		redirect('Main_Controller/halaman4/');
    }

    /*makanan*/
    public function save_mk(){
        $this->M_admin->tambah_mk();
        redirect('Main_controller/halaman5/');
    }

    public function edit_mk($id_makanan){
        $data['makanan']= $this->M_admin->view_by2($id_makanan);
        $this->load->view('form_edit_makanan', $data);
        redirect('Main_Controller/halaman5/');
    }

    public function delete_mk($id_penyakit){
		$this->M_admin->delete_mk($id_penyakit);
		redirect('Main_Controller/halaman5/');
    }

    public function update_mk($id_makanan){        
        $this->M_admin->update_mk($id_makanan);
		redirect('Main_Controller/halaman5/');
    }

    /*aturan*/
    public function save_at(){
        $this->M_admin->tambah_at();
        redirect('Main_Controller/halaman6/');
    }

    public function edit_at($id_aturan){
        $data['gunungberapi']= $this->M_admin->view_by3($id_aturan);
        $this->load->view('form_edit_aturan', $data);
        redirect('Main_Controller/halaman6/');
    }

    public function delete_at($id_aturan){
		$this->M_admin->delete_at($id_aturan);
		redirect('Main_Controller/halaman6/');
    }

    public function update_at($id_aturan){
		$this->M_admin->update_at($id_aturan);
		redirect('Main_Controller/halaman6/');
    }
    
}