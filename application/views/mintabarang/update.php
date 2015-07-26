<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('mintabarang/');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('mintabarang/update/')?>">Ubah Permintaan Barang</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Ubah Permintaan Barang</h2>
					</div>
					<?php foreach ($permintaan_barang->result() as $key) {?>	
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('mintabarang/update_barang/');?>" method="post">
						  <fieldset>
							<div class="control-group">
								<label class="control-label">ID Barang</label>
								<div class="controls">
									<select name="id_brg" class="input-xlarge focused" id="focusedInput">
										<?php foreach($permintaan_barang_all->result() as $key2){ ?>
								  		<option value="<?php echo $key2->id_brg ?>"><?php echo $key2->id_brg . ' - ' . $key2->nama_brg ?></option>
										<?php } ?>
									</select>
								</div>
							  </div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Jumlah Pesan</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="jumlah_psn" type="text" value="<?php echo $key->jumlah_psn?>">
								</div>
							  </div>
							  
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal Pesan Barang</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="tgl_psn_brg" placeholder="yyyy-mm-dd" value="<?php echo $key->tgl_psn_brg?>">
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
