<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('order/');?>">Pemesanan</a>
					</li>
				</ul>
			</div>
			<a href="<?php echo base_url('order/add_form');?>" class="btn btn-large btn-primary"><i class="icon-plus icon-blue"></i> Tambah Pemesanan</a> 
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-tag"></i> Pemesanan</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Pemesanan</th>
								  <th>Nama Paket</th>
								  <th>Nama Pelanggan</th>
								  <th>Alamat Pelanggan</th>
								  <th>Telepon Pelanggan</th>
								  <th>Tanggal Pemesanan</th>
								  <th>Tanggal Acara</th>
								  <th>Actions</th>
							  </tr>
						  </thead>					  
						  <tbody>
						<?php foreach ($order->result() as $key) {?>	
							<tr>
								<td><?php echo $key->id_custom ?></td>
								<td class="center"><?php echo $key->nama_paket ?></td>
								<td class="center"><?php echo $key->nama_custom ?></td>
								<td class="center"><?php echo $key->alamat_custom ?></td>
								<td class="center"><?php echo $key->tlp_custom ?></td>
								<td class="center"><?php echo $key->tgl_psn_custom ?></td>
								<td class="center"><?php echo $key->tgl_acara_custom ?></td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo base_url("order/update/".$key->id_custom); ?>/">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="<?php echo base_url("order/delete_order/".$key->id_custom); ?>">
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
