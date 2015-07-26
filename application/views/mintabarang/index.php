<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="d<?php echo base_url('mintabarang/');?>">Permintaan Barang</a>
					</li>
				</ul>
			</div>
			<a href="<?php echo base_url('mintabarang/add_form');?>" class="btn btn-large btn-primary"><i class="icon-plus icon-blue"></i> Permintaan Barang</a> 
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-tag"></i> Permintaan Barang</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Pesan</th>
								  <th>Nama Barang</th>
								  <th>Jumlah Pesan</th>
								  <th>Tanggal Pesan Barang</th>
								  <th>Action</th>
							  </tr>
						  </thead>					  
						  <tbody>
						<?php foreach ($permintaan_barang->result() as $key) {?>	
							<tr>
								<td><?php echo $key->id_pesan ?></td>
								<td class="center"><?php echo $key->nama_brg ?></td>
								<td class="center"><?php echo $key->jumlah_psn ?></td>
								<td class="center"><?php echo $key->tgl_psn_brg ?></td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo base_url("mintabarang/update/".$key->id_pesan); ?>/">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="<?php echo base_url("mintabarang/delete_barang/".$key->id_pesan); ?>">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
							<?php }?>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
    
<?php include('footer.php'); ?>
