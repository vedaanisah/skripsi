<link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">

<div class="container-table100">
	<div class="wrap-table100">
	    <div class="table">
			<div class="col-lg-10 mx-auto">
			    <h1 class="text-uppercase">   
					<strong>Data Makanan</strong></h1><hr>

					<style>
						body { 
						margin-top: 50pt;
						margin-left: 300pt;
						margin-right: 300pt;
						margin-bottom: 300pt;
					}
					</style>
					
			</div>
			    <a class="btn btn-primary" href="<?php echo base_url();?>Main_controller/index_mkn"><span>Tambah Makanan</span></a>
			        <div class="row header">
			           <table>
							<thead >
								<tr>
                                    <th width="20%">Id Makanan</th>
									<th width="20%">Nama Makanan</th>
									<th width="20%">Pagi</th>
                                    <th width="20%">Siang</th>
                                    <th width="20%">Malam</th>
                                    <th width="20%">Kalori</th>
									<th width="20%">AKSI</th>
								</tr>
							</thead>

							<tbody>
								<?php 
									foreach ( $makanan->result_array() as $key) {
										?>
										<tr>
											<td><?php echo $key['id_makanan']; ?></td>
											<td><?php echo $key['nama_makanan']; ?></td>
                                            <td><?php echo $key['pagi']; ?></td>
                                            <td><?php echo $key['siang']; ?></td>
                                            <td><?php echo $key['malam']; ?></td>
                                            <td><?php echo $key['kalori']; ?></td>
											<td>
												<a href="<?php echo base_url('Main_controller/delete_mk/'.$key['id_makanan'])?>">Hapus</a> 
												<a href="<?php echo base_url('Main_controller/index_mk/'.$key['id_makanan'])?>">Edit</a>	
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