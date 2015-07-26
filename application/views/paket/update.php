<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('paket/');?>">Paket Katering</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('paket/update/');?>">Ubah Paket</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Ubah Paket</h2>
					</div>
					<div class="box-content">
						<?php $detail = $detail->row_array(); ?>
						<form class="form-horizontal" action="<?php echo base_url('paket/update_paket/');?>" method="post">
							<input name="id_paket" value="<?php echo $detail['id_paket'] ?>" type="hidden" >
						  <fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nama Paket</label>
								<div class="controls">
									<input class="input-xlarge focused" id="focusedInput" name="nama" type="text" value="<?php echo $detail['nama_paket'] ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Harga Paket</label>
								<div class="controls">
									<input class="input-xlarge focused" id="focusedInput" name="harga" type="text" value="<?php echo $detail['harga_paket'] ?>">
								</div>
							  </div>
							  <?php for($i=0; $i<6; $i++) { ?>	
								  	<div class="control-group">
										<label class="control-label" for="focusedInput">ID Menu</label>
										<div class="controls">
											<!-- <input class="input-xlarge focused" id="focusedInput" name="id_menu" type="text" value=""> -->
											<select name="id_menu[]" class="input-xlarge focused" id="focusedInput">
											<option value="--">Pilih Menu</option>
											<?php foreach($paket->result() as $key){ ?>
										  		<option value="<?php echo $key->id_menu ?>"><?php echo $key->id_menu . ' - ' . $key->nama_menu ?></option>
										  	<?php } ?>
											</select>
										</div>
									  </div>
							 <?php } ?>
							
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Reset</button>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


    
<?php include('footer.php'); ?>
