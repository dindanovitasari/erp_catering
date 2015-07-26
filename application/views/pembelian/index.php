<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('pembelian/');?>">Pembelian</a>
					</li>
				</ul>
			</div>
			<a href="<?php echo base_url('pembelian/add_form');?>" class="btn btn-large btn-primary"><i class="icon-plus icon-blue"></i> Tambah Pembelian</a> 
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-tag"></i>Pembelian</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Pembelian</th>
								  <th>ID Permintaan</th>
								  <th>Nama Barang</th>
								  <th>Jumlah Barang</th>
								  <th>Total Harga</th>
								  <th>Nama Supplier</th>
							  </tr>
						  </thead>					  
						  <tbody>
						<?php foreach ($pembelian->result() as $key) {?>	
							<tr>
								<td><?php echo $key->id_psn ?></td>
								<td><?php echo $key->id_pesan ?></td>
								<td class="center"><?php echo $key->nama_brg ?></td>
								<td class="center"><?php echo $key->jumlah_psn ?></td>
								<td class="center"><?php echo $key->total_harga ?></td>
								<td class="center"><?php echo $key->nama_supp ?></td>
							</tr>
							<?php }?>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
    
<?php include('footer.php'); ?>
