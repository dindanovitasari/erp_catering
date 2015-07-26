<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="d<?php echo base_url('jenisbarang/');?>">Jenis Barang</a>
					</li>
				</ul>
			</div>
			<a href="<?php echo base_url('jenisbarang/add_form');?>" class="btn btn-large btn-primary"><i class="icon-plus icon-blue"></i> Tambah Jenis Barang</a> 
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-tag"></i> Jenis Barang</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Jenis Barang</th>
								  <th>Keterangan Jenis Barang</th>
								  <th>Action</th>
							  </tr>
						  </thead>					  
						  <tbody>
						<?php foreach ($jenis_barang->result() as $key) {?>	
							<tr>
								<td><?php echo $key->id_jns_brg ?></td>
								<td class="center"><?php echo $key->ket_jns_brg ?></td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo base_url("jenisbarang/update/".$key->id_jns_brg); ?>/">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
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
