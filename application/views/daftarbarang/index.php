<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="d<?php echo base_url('daftarbarang/');?>">Barang</a>
					</li>
				</ul>
			</div>
			<a href="<?php echo base_url('daftarbarang/add_form');?>" class="btn btn-large btn-primary"><i class="icon-plus icon-blue"></i> Tambah Barang</a> 
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-tag"></i> Barang</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Barang</th>
								  <th>Jenis Barang</th>
								  <th>Nama Barang</th>
								  <th>Jumlah Barang</th>
								  <th>Action</th>
							  </tr>
						  </thead>					  
						  <tbody>
						<?php foreach ($barang->result() as $key) {?>	
							<tr>
								<td><?php echo $key->id_brg ?></td>
								<td class="center"><?php echo $key->ket_jns_brg ?></td>
								<td class="center"><?php echo $key->nama_brg ?></td>
								<td class="center"><?php echo $key->jumlah_brg ?></td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo base_url("daftarbarang/update/".$key->id_brg); ?>/">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="<?php echo base_url("daftarbarang/delete_barang/".$key->id_brg); ?>">
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
