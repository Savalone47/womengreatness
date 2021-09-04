

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
              	<h3 class="box-title">Storie Add</h3>
            </div>
			<form action='<?php echo site_url('storie/add')?>' method='POST' enctype="multipart/form-data">
				<div class="box-body">
					<div class="row clearfix">
						<div class="col-md-6">
							<label for="storie_title" class="control-label"><span class="text-danger">*</span>Storie Title</label>
							<div class="form-group">
								<input type="text" name="storie_title" value="<?php echo $this->input->post('storie_title'); ?>" class="form-control" id="storie_title" />
								<span class="text-danger"><?php echo form_error('storie_title');?></span>
							</div>
						</div>
						
						<div class="col-md-6">
							<label for="storie_picture" class="control-label">Storie Picture</label>
							<div class="form-group">
								<input type='file' name="storie_picture" class="form-control" id="storie_picture">
							</div>
						</div>
						<div class="col-md-6">
							<label for="storie_content" class="control-label"><span class="text-danger">*</span>Storie Content</label>
							<div class="form-group">
								<textarea name="storie_content" class="form-control" id="storie_content"><?php echo $this->input->post('storie_content'); ?></textarea>
								<span class="text-danger"><?php echo form_error('storie_content');?></span>
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






