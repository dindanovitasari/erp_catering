<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard/');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('daftarbarang/');?>">Daftar Barang</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('daftarbarang/update');?>">Ubah Barang</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Ubah Barang</h2>
					</div>
					<?php foreach ($barang->result() as $key) {?>	
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('daftarbarang/update_barang/');?>" method="post">
						  <fieldset>
						  	<input name="id_brg" value="<?php echo $key->id_brg ?>" type="hidden" >
							<div class="control-group">
								<label class="control-label" for="focusedInput">ID Jenis Barang</label>
								<div class="controls">
									<select name="id_jns_brg" class="input-xlarge focused" id="focusedInput">
									<?php foreach($jenis->result() as $key2){ ?>
								  		<option value="<?php echo $key2->id_jns_brg ?>"><?php echo $key2->id_jns_brg . ' - ' . $key2->ket_jns_brg?></option>
								  	<?php } ?>
									</select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nama Barang</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="nama_brg" type="text" value="<?php echo $key->nama_brg ?> ">
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Jumlah Barang</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="jumlah_brg" type="text" value="<?php echo $key->jumlah_brg ?>">
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
