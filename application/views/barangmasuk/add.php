<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('barangmasuk/');?>">Barang Masuk</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('barangmasuk/add_form');?>">Tambah Barang Masuk</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Tambah Barang Masuk</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('barangmasuk/add_barangmasuk/');?>" method="post">
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="focusedInput">ID Barang Masuk</label>
								<div class="controls">
									<!-- <input class="input-xlarge focused" id="focusedInput" name="id_brg" type="text" value=""> -->
									<select name="id_brg" class="input-xlarge focused" id="focusedInput">
									<option value="">Pilih Barang</option>
									<?php foreach($barang_masuk->result() as $key){ ?>
								  		<option value="<?php echo $key->id_brg ?>"><?php echo $key->id_brg . ' - ' . $key->nama_brg ?></option>
								  	<?php } ?>
									</select>
								</div>
							  </div>
							 <div class="control-group">
							  <label class="control-label" for="date01">Tanggal Barang Masuk</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="tgl_msk" placeholder="yyyy-mm-dd"value="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Jumlah Barang Masuk</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="jml_msk" type="text" value="">
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
