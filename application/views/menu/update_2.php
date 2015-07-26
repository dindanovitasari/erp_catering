<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Ubah Menu</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Ubah Menu</h2>
					</div>
					<?php foreach ($detail->result() as $key) {?>	
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('menu/update_menu/');?>" method="post">
						  <fieldset>
						  	<input name="id_menu" value="<?php echo $key->id_menu ?>" type="hidden" >
							<div class="control-group">
								<label class="control-label" for="focusedInput">ID Barang</label>
								<div class="controls">
									<input class="input-xlarge focused" id="focusedInput" name="" type="text" value="<?php echo $key->id_brg?>">
									<select name="id_brg" class="input-xlarge focused" id="focusedInput">
									
									<?php foreach($menu->result() as $key2){ ?>
								  		<option value="<?php echo $key2->id_brg ?>"><?php echo $key2->nama_brg ?></option>
								  	<?php } ?>
									</select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nama Menu</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="nama_menu" type="text" value="<?php echo $key->nama_menu ?> ">
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
