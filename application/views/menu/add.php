<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard/');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('menu/');?>">Menu</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('menu/add_form');?>">Tambah Menu</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Tambah Menu</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('menu/add_menu/');?>" method="post">
						  <fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nama Menu</label>
								<div class="controls">
									<input class="input-xlarge focused" id="focusedInput" name="nama" type="text" value="">
								</div>
							  </div>
							  <?php for($i=0; $i<6; $i++) { ?>	
								  	<div class="control-group">
										<label class="control-label" for="focusedInput">ID Barang</label>
										<div class="controls">
											<!-- <input class="input-xlarge focused" id="focusedInput" name="id_brg" type="text" value=""> -->
											<select name="id_brg[]" class="input-xlarge focused" id="focusedInput">
											<option value="--">Pilih Barang</option>
											<?php foreach($menu->result() as $key){ ?>
										  		<option value="<?php echo $key->id_brg ?>"><?php echo $key->id_brg . ' - ' . $key->nama_brg ?></option>
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
