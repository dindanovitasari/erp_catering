<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('supplier/');?>">Supplier</a>
					</li>
				</ul>
			</div>
			<a href="<?php echo base_url('supplier/add_form');?>" class="btn btn-large btn-primary"><i class="icon-plus icon-blue"></i> Tambah Supplier</a> 
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-tag"></i> Supplier</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Supplier</th>
								  <th>Nama Supplier</th>
								  <th>Alamat Supplier</th>
								  <th>Telepon Supplier</th>
								  <th>Nama Barang</th>
								  <th>Harga Barang</th>
								  <th>Actions</th>
							  </tr>
						  </thead>					  
						  <tbody>
						<?php foreach ($supplier->result() as $key) {?>	
							<tr>
								<td><?php echo $key->id_supp ?></td>
								<td class="center"><?php echo $key->nama_supp ?></td>
								<td class="center"><?php echo $key->alamat_supp ?></td>
								<td class="center"><?php echo $key->tlp_supp ?></td>
								<td class="center"><?php echo $key->nama_brg ?></td>
								<td class="center"><?php echo $key->harga_supp ?></td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo base_url("supplier/update/".$key->id_supp); ?>/">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="<?php echo base_url("supplier/delete_supplier/".$key->id_supp); ?>">
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
