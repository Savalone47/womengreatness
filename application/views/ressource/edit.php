

<div class="content-wrapper clearfix">
	<!-- Main content -->
	<div class="col-md-12 form f-label">
		<?php if($this->session->flashdata("messagePr")){?>
			<div class="alert alert-info">
				<?php echo $this->session->flashdata("messagePr")?>
			</div>
		<?php } ?>
	
		<div class="box box-success pad-profile">
			
		<div class="box-header with-border">
              	<h3 class="box-title">Ressource edit</h3>
            </div>
			<form action='<?php echo site_url('ressource/edit/'.$ressource['ressource_id'])?>' method='POST'>
				<div class="box-body">
					<div class="row clearfix">
						<div class="col-md-6">
							<label for="ressource_title" class="control-label"><span class="text-danger">*</span>ressource Title</label>
							<div class="form-group">
								<input type="text" name="ressource_title" value="<?php echo ($this->input->post('ressource_title') ? $this->input->post('ressource_title') : $ressource['ressource_title']); ?>" class="form-control" id="ressource_title" />
								<span class="text-danger"><?php echo form_error('ressource_title');?></span>
							</div>
						</div>

						<div class="col-md-6">
							<label for="ressource_link" class="control-label"><span class="text-danger">*</span>ressource link</label>
							<div class="form-group">
								<input type="text" name="ressource_link" value="<?php echo ($this->input->post('ressource_link') ? $this->input->post('ressource_link') : $ressource['ressource_link']); ?>" class="form-control" id="ressource_link" />
								<span class="text-danger"><?php echo form_error('ressource_link');?></span>
							</div>
						</div>

						<div class="col-md-6">
							<label for="ressource_source" class="control-label"><span class="text-danger">*</span>ressource source</label>
							<div class="form-group">
								<input type="text" name="ressource_source" value="<?php echo ($this->input->post('ressource_source') ? $this->input->post('ressource_source') : $ressource['ressource_source']); ?>" class="form-control" id="ressource_source" />
								<span class="text-danger"><?php echo form_error('ressource_source');?></span>
							</div>
						</div>
						
						<div class="col-md-6">
							<label for="storie_content" class="control-label"><span class="text-danger">*</span>ressource Description</label>
							<div class="form-group">
								<textarea name="ressource_content" class="form-control" id="ressource_content"><?php echo ($this->input->post('ressource_resume') ? $this->input->post('ressource_resume') : $ressource['ressource_resume']); ?></textarea>
								<span class="text-danger"><?php echo form_error('ressource_content');?></span>
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






