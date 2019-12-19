<!-- <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> -->

<div class="container-table100">
	<div class="wrap-table100">
	    <div class="table">
			<div class="col-lg-10 mx-auto">
			    <h1 class="text-uppercase">   
					<strong>Data Pasien</strong></h1><hr>

					<!-- <style>
						body { 
						margin-top: 50pt;
						margin-left: 300pt;
						margin-right: 300pt;
						margin-bottom: 300pt;
					}
					</style> -->
					
			</div>
			    <!-- <a class="btn btn-primary" href="<?php echo base_url();?>index.php/Admin_controller/tambahView"><span>Tambah Penyakit</span></a> -->
			        <div class="row header">
						<div class="">
			           <table>
							<thead>
								<tr>
                                    <th width="20%">Id Pasien</th>
									<th width="20%">Nama Pasien</th>
									<th width="20%">Umur</th>
                                    <th width="20%">Tinggi Badan</th>
                                    <th width="20%">Berat Badan</th>
                                    <th width="20%">Hemuglobin</th>
                                    <th width="20%">Lingkar Lengan Atas</th>
                                    <th width="20%">Lingkar Lengan Bawah</th>
                                    <th width="20%">Faktor Aktivitas</th>
                                    <th width="20%">Faktor Stres</th>
									<th width="20%">AKSI</th>
								</tr>
							</thead>

							<tbody>
								<?php 
									foreach ( $pasien->result_array() as $key) {
										?>
										<tr>
											<td><?php echo $key['id_pasien']; ?></td>
											<td><?php echo $key['nama_pasien']; ?></td>
                                            <td><?php echo $key['umur']; ?></td>
                                            <td><?php echo $key['tinggi_badan']; ?></td>
                                            <td><?php echo $key['berat_badan']; ?></td>
                                            <td><?php echo $key['hemuglobin']; ?></td>
                                            <td><?php echo $key['lengan_atas']; ?></td>
                                            <td><?php echo $key['lengan_bawah']; ?></td>
                                            <td><?php echo $key['tingkat_aktivitas']; ?></td>
                                            <td><?php echo $key['tingkat_stres']; ?></td>
											<td>
												<a href="<?php echo base_url('Main_Controller/delete_ps/'.$key['id_pasien'])?>">Hapus</a> 
												<!-- <a href="<?php echo base_url('Admin_controller/edit_ps/'.$key['id_pasien'])?>">Edit</a>-->
											</td>
										</tr>
										<?php
									}
								 ?>	
							</tbody>

						</table>
					  </div>
					</div>
			</div>
		</div>