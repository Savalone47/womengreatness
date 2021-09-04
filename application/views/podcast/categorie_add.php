

<div class="content-wrapper clearfix">
	<!-- Main content -->
	<div class="col-md-12 form f-label">
		<?php if($this->session->flashdata("messagePr")){?>
			<div class="alert alert-info">
				<?php echo $this->session->flashdata("messagePr")?>
			</div>
		<?php } ?>
		<!-- Profile Image -->
		<div class="box box-success pad-profile">
			
		<div class="box-header with-border">
              	<h3 class="box-title">category podcast Add</h3>
            </div>
            <form action='<?php echo site_url('category_podcast/add')?>' method='POST'>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="impact_titlte" class="control-label"><span class="text-danger">*</span>Categorie podcast</label>
						<div class="form-group">
							<input type="text" name="category_name" value="<?php echo $this->input->post('category_name'); ?>" class="form-control" id="category_name" />
							<span class="text-danger"><?php echo form_error('category_name');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
			</form>
		</div>
		<!-- /.content -->
	</div>
</div>






