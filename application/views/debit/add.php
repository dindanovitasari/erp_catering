<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard/');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('debit/');?>">Debit</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('debit/add_form');?>">Tambah Debit</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Tambah Debit</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('debit/add_debit/');?>" method="post">
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="focusedInput">ID Pelanggan</label>
								<div class="controls">
								  <select name="id_customer">
									<?php foreach($customer->result() as $key){ ?>
										<option value="<?php echo $key->id_custom . '|' . $key->id_paket ?>"><?php echo $key->nama_custom?></option>
									<?php } ?>
								  </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal Debit</label>
							  <div class="controls">
								<input type="date" class="input-xlarge focused" id="focusedInput" name="tgl_debit" placeholder="yyyy-mm-dd"value="">
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
