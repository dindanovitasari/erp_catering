<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('paket/');?>">Paket Katering</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			<a href="<?php echo base_url('paket/add_form');?>" class="btn btn-large btn-primary"><i class="icon-plus icon-blue"></i> Tambah Paket</a> 
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-tag"></i>Paket</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Paket</th>
								  <th>Nama Paket</th>
								  <th>Harga Paket</th>
								  <th>Nama Menu</th>
								  <th>Action</th>
							  </tr>
						  </thead>					  
						  <tbody>
						<?php foreach ($paket->result() as $key) {?>	
							<tr>
								<td><?php echo $key->id_paket ?></td>
								<td class="center"><?php echo $key->nama_paket ?></td>
								<td class="center"><?php echo $key->harga_paket?></td>
								<td class="center"><?php echo $key->nama_menu?></td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo base_url("paket/update/".$key->id_paket); ?>/">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="<?php echo base_url("paket/delete_paket/".$key->id_paket . '/' . $key->id_menu); ?>">
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
