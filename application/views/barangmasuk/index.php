<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="d<?php echo base_url('barangmasuk/');?>">Barang Masuk</a>
					</li>
				</ul>
			</div>
			<a href="<?php echo base_url('barangmasuk/add_form');?>" class="btn btn-large btn-primary"><i class="icon-plus icon-blue"></i> Tambah Barang Masuk</a> 
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-tag"></i> Barang Masuk</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Barang Masuk</th>
								  <th>Nama Barang</th>
								  <th>Tanggal Barang Masuk</th>
								  <th>Jumlah Barang Masuk</th>
								  
							  </tr>
						  </thead>					  
						  <tbody>
						<?php foreach ($barang_masuk->result() as $key) {?>	
							<tr>
								<td><?php echo $key->id ?></td>
								<td class="center"><?php echo $key->nama_brg ?></td>
								<td class="center"><?php echo $key->tgl_msk ?></td>
								<td class="center"><?php echo $key->jml_msk ?></td>
								
							</tr>
							<?php }?>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
    
<?php include('footer.php'); ?>
