<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('kredit/');?>">Kredit</a>
					</li>
				</ul>
			</div>
			<a href="<?php echo base_url('kredit/add_form');?>" class="btn btn-large btn-primary"><i class="icon-plus icon-blue"></i> Tambah Kredit</a> 
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-tag"></i> Kredit</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Kredit</th>
								  <th>Jumlah Kredit</th>
								  <th>Tanggal Kredit</th>
								  <th>Actions</th>
							  </tr>
						  </thead>					  
						  <tbody>
						<?php foreach ($kredit->result() as $key) {?>	
							<tr>
								<td><?php echo $key->id_kredit ?></td>
								<td class="center"><?php echo $key->total_harga ?></td>
								<td class="center"><?php echo $key->tgl_kredit ?></td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo base_url("kredit/update/".$key->id_kredit); ?>/">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="<?php echo base_url("kredit/delete_kredit/".$key->id_kredit); ?>">
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
