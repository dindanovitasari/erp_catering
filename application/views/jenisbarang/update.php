<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard/');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('jenisbarang/');?>">Daftar Jenis Barang</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('jenisbarang/update');?>">Ubah Jenis Barang</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Ubah Jenis Barang</h2>
					</div>
					<?php foreach ($detail->result() as $key) {?>	
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('jenisbarang/update_jenis_barang/');?>" method="post">
						  <fieldset>
						  	<input name="id_jns_brg" value="<?php echo $key->id_jns_brg ?>" type="hidden" >
							
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Keterangan Jenis Barang</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="ket_jns_brg" type="text" value="<?php echo $key->ket_jns_brg ?> ">
								</div>
							  </div>
							
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Reset</button>
							<?php }?> 
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


    
<?php include('footer.php'); ?>
