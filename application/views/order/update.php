<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('order/');?>">Order Katering</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('order/update/')?>">Ubah Pemesanan</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Ubah Pemesanan</h2>
					</div>
					<?php foreach ($order->result() as $key) {?>	
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('order/update_order/');?>" method="post">
						  <fieldset>
							<div class="control-group">
								<label class="control-label">ID Pemesanan</label>
								<div class="controls">
									<input class="input-xlarge focused" id="focusedInput" name="id_custom" type="text" value="<?php echo $key->id_custom?>">
								</div>
							  </div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Nama Paket</label>
								<div class="controls">
								  <select name="id_paket">
									<?php foreach($paket->result() as $key2){ ?>
										<option value="<?php echo $key2->id_paket?>"><?php echo $key2->nama_paket?></option>
									<?php } ?>
								  </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Nama Pelanggan</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="nama_custom" value="<?php echo $key->nama_custom?>">
							  </div>
							</div> 
							<div class="control-group">
							  <label class="control-label" for="date01">Alamat Pelanggan</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="alamat_custom" value="<?php echo $key->alamat_custom?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Telepon Pelanggan</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="tlp_custom" value="<?php echo $key->tlp_custom?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal Pemesanan</label>
							  <div class="controls">
								<input type="date" class="input-xlarge focused" id="focusedInput" name="tgl_psn_custom" value="<?php echo $key->tgl_psn_custom?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal Acara</label>
							  <div class="controls">
								<input type="date" class="input-xlarge focused" id="focusedInput" name="tgl_acara_custom" value="<?php echo $key->tgl_acara_custom?>">
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
