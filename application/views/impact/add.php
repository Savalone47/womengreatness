

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
              	<h3 class="box-title">Impact Add</h3>
            </div>
            <form action='<?php echo site_url('Impact/add')?>' method='POST' enctype="multipart/form-data">
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="impact_titlte" class="control-label"><span class="text-danger">*</span>Impact Titlte</label>
						<div class="form-group">
							<input type="text" name="impact_titlte" value="<?php echo $this->input->post('impact_titlte'); ?>" class="form-control" id="impact_titlte" />
							<span class="text-danger"><?php echo form_error('impact_titlte');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="impact_picture" class="control-label"><span class="text-danger">*</span>Impact Picture</label>
						<div class="form-group">
							<input type="file" name="impact_picture" class="form-control" id="impact_picture">
							<span class="text-danger"><?php echo form_error('impact_picture');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="impact_content" class="control-label"><span class="text-danger">*</span>Impact Content</label>
						<div class="form-group">
							<textarea name="impact_content" class="form-control" id="impact_content"><?php echo $this->input->post('impact_content'); ?></textarea>
							<span class="text-danger"><?php echo form_error('impact_content');?></span>
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






