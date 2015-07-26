<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('kredit/');?>">Kredit</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<a href="<?php echo base_url('kredit/update');?>">Ubah Kredit</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Ubah Kredit</h2>
					</div>
					<?php foreach ($kredit->result() as $key) {?>	
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('kredit/update_kredit/');?>" method="post">
						  <fieldset>
							<div class="control-group">
								<label class="control-label">ID Kredit</label>
								<div class="controls">
									<input class="input-xlarge focused" id="focusedInput" name="id_kredit" type="text" value="<?php echo $key->id_kredit?>">
								</div>
							  </div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">ID Pemesanan</label>
								<div class="controls">
								<select name="id_psn">
									<?php foreach($pemesanan->result() as $key2){ ?>
										<option value="<?php echo $key2->id_psn?>"><?php echo $key2->id_psn?></option>
									<?php } ?>
								  </select>
							  </div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal Kredit</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="tgl_kredit" placeholder="yyyy-mm-dd" value="<?php echo $key->tgl_kredit?>">
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
