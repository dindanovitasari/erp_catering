<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('debit/');?>">Debit</a>
					</li>
				</ul>
			</div>
			<a href="<?php echo base_url('debit/add_form');?>" class="btn btn-large btn-primary"><i class="icon-plus icon-blue"></i> Tambah Debit</a> 
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-tag"></i> Debit</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Debit</th>
								  <th>Jumlah Debit</th>
								  <th>Tanggal Debit</th>
								  <th>Actions</th>
							  </tr>
						  </thead>					  
						  <tbody>
						<?php foreach ($debit->result() as $key) {?>	
							<tr>
								<td><?php echo $key->id_debit ?></td>
								<td class="center"><?php echo $key->harga_paket ?></td>
								<td class="center"><?php echo $key->tgl_debit ?></td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo base_url("debit/update/".$key->id_debit); ?>/">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="<?php echo base_url("debit/delete_debit/".$key->id_debit); ?>">
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
