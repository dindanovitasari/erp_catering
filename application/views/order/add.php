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
						<a href="<?php echo base_url('order/add_form');?>">Tambah Pemesanan</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Tambah Pemesanan</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('order/add_order/');?>" method="post">
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Nama Paket</label>
								<div class="controls">
								  <select name="id_paket">
									<?php foreach($paket->result() as $key){ ?>
										<option value="<?php echo $key->id_paket?>"><?php echo $key->nama_paket?></option>
									<?php } ?>
								  </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Nama Pelanggan</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="nama_custom" value="">
							  </div>
							</div> 
							<div class="control-group">
							  <label class="control-label" for="date01">Alamat Pelanggan</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="alamat_custom" value="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Telepon Pelanggan</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="tlp_custom" value="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal Pemesanan</label>
							  <div class="controls">
								<input type="date" class="input-xlarge focused" id="focusedInput" name="tgl_psn_custom" value="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal Acara</label>
							  <div class="controls">
								<input type="date" class="input-xlarge focused" id="focusedInput" name="tgl_acara_custom" value="">
							  </div>
							</div>
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Reset</button>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


    
<?php include('footer.php'); ?>
