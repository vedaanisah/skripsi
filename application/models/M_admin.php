<?php

class M_admin extends CI_Model{	

	public function view_by($id_penyakit){
	    $this->db->where('id_penyakit', $id_penyakit);
	    return $this->db->get('penyakit')->row();
	}

	public function view_by2($id_makanan){
	    $this->db->where('id_makanan', $id_makanan);
	    return $this->db->get('makanan')->row();
	}

	public function view_by3($id_aturan){
	    $this->db->where('id_aturan', $id_aturan);
	    return $this->db->get('aturan')->row();
	}

	// ketika id penyakit null -> ga bisa
	// ketika buat percabangan selain null -> id_penyakit = ada isinya
	public function view_all($id_penyakit=null){
		$this->db->from('penyakit');
		if (!is_null($id_penyakit)) {
			$this->db->where('id_penyakit', $id_penyakit);
			$result = $this->db->get();
			if ($result->num_rows() !== 1) {
				return array();
			}
			return $result->row_array();
		} else {
			$query = $this->db->get();
			return $query;
		}
	}

	public function view_all2($id_pasien=null){
		$this->db->from('pasien');
		if (!is_null($id_pasien)) {
			$this->db->where('id_pasien', $id_pasien);
			$result = $this->db->get();
			if ($result->num_rows() !== 1) {
				return array();
			}
			return $result->row_array();
		} else {
			$query = $this->db->get();
			return $query;
		}
	}

	public function view_all3($id_makanan=null){
		$this->db->from('makanan');
		if (!is_null($id_makanan)) {
			$this->db->where('id_makanan', $id_makanan);
			$result = $this->db->get();
			if ($result->num_rows() !== 1) {
				return array();
			}
			return $result->row_array();
		} else {
			$query = $this->db->get();
			return $query;
		}
	}

	public function view_all4($id_aturan=null){
		$this->db->from('aturan');
		if (!is_null($id_aturan)) {
			$this->db->where('id_aturan', $id_aturan);
			$result = $this->db->get();
			if ($result->num_rows() !== 1) {
				return array();
			}
			return $result->row_array();
		} else {
			$query = $this->db->get();
			return $query;
		}
	}

/*penyakit*/
	function tambah_pk(){
		$data = array(
			'id_penyakit' => $this->input->post('id_penyakit'),
			'nama_penyakit' => $this->input->post('nama_penyakit'),
			'penjelasan' => $this->input->post('penjelasan')
		);
	    $this->db->insert('penyakit',$data);
	}
	
	function update_pk($id_penyakit){
		$data = array(
			'nama_penyakit' => $this->input->post('nama_penyakit'),
			'penjelasan' => $this->input->post('penjelasan')
		);

		$this->db->where('id_penyakit',$id_penyakit);
		$this->db->update('penyakit', $data);

	}

	function delete_pk($id_penyakit){
		$this->db->where('id_penyakit',$id_penyakit);
		$this->db->delete('penyakit');
	}

	function edit_pk($where, $tabel){
		return $this->db->get_where($tabel, $where);
	}

/*pasien*/
	function delete_ps($id_pasien){
		$this->db->where('id_pasien',$id_pasien);
		$this->db->delete('pasien');
	}

/*makanan*/
	function edit_mk($where, $tabel){
		return $this->db->get_where($tabel, $where);
	}

	function update_mk($id_makanan){
		$data = array(
			'nama_makanan' => $this->input->post('nama_makanan'),
			'pagi' => $this->input->post('pagi'),
			'siang' => $this->input->post('siang'),
			'malam' => $this->input->post('malem'),
			'kalori' => $this->input->post('kalori')
		);

		$this->db->where(array('id_makanan' => $id_makanan))->update('makanan', $data);
	}

	function tambah_mk(){
		$data = array(
			'nama_makanan' => $this->input->post('nama_makanan'),
			'pagi' => $this->input->post('pagi'),
			'siang' => $this->input->post('siang'),
			'malam' => $this->input->post('malam'),
			'kalori' => $this->input->post('kalori')
		);
		$this->db->insert('makanan',$data);
	}

	function delete_mk($id_makanan){
		$this->db->where('id_makanan',$id_makanan);
		$this->db->delete('makanan');
	}

/*aturan*/
	function tambah_at(){
		$data = array(
			'id_penyakit' => $this->input->post('id_penyakit'),
			'nama_penyakit' => $this->input->post('nama_penyakit'),
			'penjelasan' => $this->input->post('penjelasan')
		);
		$this->db->insert('penyakit',$data);
	}

	function update_at($id_penyakit){
		$data = array(
			'id_penyakit' => $this->input->post('id_penyakit'),
			'nama_penyakit' => $this->input->post('nama_penyakit'),
			'penjelasan' => $this->input->post('penjelasan')
		);

		$this->db->where('id_penyakit',$id_penyakit);
		$this->db->update('penyakit',$data);

	}

	function delete_at($id_penyakit){
		$this->db->where('id_penyakit',$id_penyakit);
		$this->db->delete('penyakit');
	}

	function edit_at($where, $tabel){
		return $this->db->get_where($tabel, $where);
	}

}