<link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">

<div class="container-table100">
	<div class="wrap-table100">
	    <div class="table">
			<div class="col-lg-10 mx-auto">
			    <h1 class="text-uppercase">   
					<strong>Data Penyakit</strong></h1><hr>

					<style>
						body { 
						margin-top: 50pt;
						margin-left: 300pt;
						margin-right: 300pt;
						margin-bottom: 300pt;
					}
					</style>
					
			</div>
			    <a class="btn btn-primary" href="<?php echo base_url();?>Main_controller/index_pkt"><span>Tambah Penyakit</span></a>
			        <div class="row header">
			           <table>
							<thead >
								<tr>
                                    <th width="20%">Id Penyakit</th>
									<th width="20%">Nama Penyakit</th>
									<th width="20%">Penjelasan</th>
									<th width="20%">AKSI</th>
								</tr>
							</thead>

							<tbody>
								<?php 
									foreach ( $penyakit->result_array() as $key) {
										?>
										<tr>
											<td><?php echo $key['id_penyakit']; ?></td>
											<td><?php echo $key['nama_penyakit']; ?></td>
                                            <td><?php echo $key['penjelasan']; ?></td>
											<td>
												<a href="<?php echo base_url('Main_Controller/delete_pk/'.$key['id_penyakit'])?>">Hapus</a> 
												<a href="<?php echo base_url('Main_Controller/index_pk/'.$key['id_penyakit'])?>">Edit</a>	
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