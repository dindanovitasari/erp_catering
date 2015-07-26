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
						<a href="<?php echo base_url('daftarbarang/add_form');?>">Tambah Barang</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Tambah Barang</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('daftarbarang/add_barang/');?>" method="post">
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="focusedInput">ID Jenis Barang</label>
								<div class="controls">
									<select name="id_jns_brg" class="input-xlarge focused" id="focusedInput">
									<option value="">Pilih Jenis Barang</option>
									<?php foreach($barang->result() as $key){ ?>
								  		<option value="<?php echo $key->id_jns_brg ?>"><?php echo $key->id_jns_brg . ' - ' . $key->ket_jns_brg ?></option>
								  	<?php } ?>
									</select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nama Barang</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="nama_brg" type="text" value="">
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Jumlah Barang</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="jumlah_brg" type="text" value="">
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
