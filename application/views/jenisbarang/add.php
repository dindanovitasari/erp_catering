<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('dashboard/');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('jenisbarang/');?>">Jenis Barang</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('jenisbarang/add_form');?>">Tambah Jenis Barang</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Jenis Barang</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('jenisbarang/add_jenis_barang/');?>" method="post">
						  <fieldset>
								<label class="control-label" for="focusedInput">Keterangan Jenis Barang</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="ket_jns_brg" type="text" value="">
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
