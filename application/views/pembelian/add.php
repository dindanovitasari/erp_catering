<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('pembelian/');?>">Pembelian</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('pembelian/add_form');?>">Tambah Pembelian</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<a href="<?php echo base_url('pembelian/add_form');?>">Tambah Pembelian</a>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('pembelian/add_pembelian/');?>" method="post">
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="focusedInput">ID Permintaan</label>
								<div class="controls">
									<select name="id_pesan">
									<?php foreach($minta->result() as $key){ ?>
								  <option value="<?php echo $key->id_pesan . '|' . $key->jumlah_psn . '|' . $key->id_brg ?>"><?php echo $key->id_pesan?></option>
								  <?php } ?>
								  </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="focusedInput">Nama Supplier</label>
							  <div class="controls">
								<select name="id_supp">
									<?php foreach($supplier->result() as $key2){ ?>
										<option value="<?php echo $key2->id_supp . '|' . $key2->harga_supp?>"><?php echo $key2->nama_supp?></option>
									<?php } ?>
								  </select>
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Tanggal Pembelian</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="tgl_psn_brg" type="date" value="">
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
