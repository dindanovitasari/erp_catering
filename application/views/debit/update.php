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
						<a href="<?php echo base_url('debit/update/');?>">Ubah Debit</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Ubah Debit</h2>
					</div>
					<?php foreach ($debit->result() as $key) {?>	
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('debit/update_debit/');?>" method="post">
						  <fieldset>
							<div class="control-group">
								<label class="control-label">ID Debit</label>
								<div class="controls">
									<input class="input-xlarge focused" id="focusedInput" name="id_debit" type="text" value="<?php echo $key->id_debit?>">
								</div>
							  </div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">ID Pelanggan</label>
								<div class="controls">
								  <select name="id_customer">
									<?php foreach($customer->result() as $key2){ ?>
										<option value="<?php echo $key2->id_custom . '|' . $key2->id_paket ?>"><?php echo $key2->nama_custom?></option>
									<?php } ?>
								  </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal Debit</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="tgl_debit"  value="<?php echo $key->tgl_debit?>">
							  </div>
							</div>
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							<?php }?> 
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


    
<?php include('footer.php'); ?>
