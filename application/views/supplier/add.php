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
						<a href="<?php echo base_url('supplier/add_form');?>">Tambah Supplier</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<a href="<?php echo base_url('supplier/add_form');?>">Tambah Supplier</a>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('supplier/add_supplier/');?>" method="post">
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Nama Supplier</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="nama_supp" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Alamat Supplier</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="alamat_supp" type="text" value="">
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="focusedInput">Telepon Supplier</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="tlp_supp" value="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="focusedInput">Nama Barang</label>
							  <div class="controls">
								<select name="id_brg">
									<?php foreach($barang->result() as $key){ ?>
										<option value="<?php echo $key->id_brg?>"><?php echo $key->nama_brg?></option>
									<?php } ?>
								  </select>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="focusedInput">Harga Barang</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="harga_supp" value="">
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
