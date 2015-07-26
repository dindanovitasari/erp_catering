<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('supplier/');?>">Supplier</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('supplier/update');?>">Update Supplier</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Ubah Supplier</h2>
					</div>
					<?php foreach ($supplier->result() as $key) {?>	
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('supplier/update_supplier/');?>" method="post">
						  <fieldset>
							<div class="control-group">
								<label class="control-label">ID Supplier</label>
								<div class="controls">
									<input class="input-xlarge focused" id="focusedInput" name="id_supp" type="text" value="<?php echo $key->id_supp?>">
								</div>
							  </div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Nama Supplier</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="nama_supp" type="text" value="<?php echo $key->nama_supp?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Alamat Supplier</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="alamat_supp" type="text" value="<?php echo $key->alamat_supp?>">
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="focusedInput">Telepon Supplier</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="tlp_supp"value="<?php echo $key->tlp_supp?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="focusedInput">Nama Barang</label>
							  <div class="controls">
								<select name="id_brg">
									<?php foreach($barang->result() as $key2){ ?>
										<option value="<?php echo $key2->id_brg?>"><?php echo $key2->nama_brg?></option>
									<?php } ?>
								  </select>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="focusedInput">Harga Barang</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="harga_supp"value="<?php echo $key->harga_supp?>">
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
