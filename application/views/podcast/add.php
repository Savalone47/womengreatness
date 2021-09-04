

<div class="content-wrapper clearfix">
	<!-- Main content -->
	<div class="col-md-12 form f-label">
		<div class="box box-success pad-profile">
			
		<div class="box-header with-border">
              	<h3 class="box-title">Podcast Add</h3>
            </div>
			<form action='<?php echo site_url('podcast/add')?>' method='POST' enctype="multipart/form-data">
				<div class="box-body">
					<div class="row clearfix">
						<?php if($this->session->error){?>
							<div class="alert alert-info">
								<?php echo $this->session->error?>
							</div>
						<?php } ?>
						<div class="col-md-6">
							<label for="podcast_title" class="control-label"><span class="text-danger">*</span>podcast Title</label>
							<div class="form-group">
								<input type="text" name="podcast_title" value="<?php echo $this->input->post('podcast_title'); ?>" class="form-control" id="ressource_title" />
								<span class="text-danger"><?php echo form_error('podcast_title');?></span>
							</div>
						</div>

						<div class="col-md-6">
							<label for="podcast_picture" class="control-label"><span class="text-danger">*</span>Picture podcast</label>
							<div class="form-group">
								<input type="file" name="podcast_picture" class="form-control" id="podcast_picture" />
								<span class="text-danger"><?php echo form_error('podcast_picture');?></span>
							</div>
						</div>
						
						<div class="col-md-6">
							<label for="podcast_info" class="control-label"><span class="text-danger">*</span>podcast Description</label>
							<div class="form-group">
								<textarea name="podcast_info" class="form-control" id="podcast_info"><?php echo $this->input->post('podcast_info'); ?></textarea>
								<span class="text-danger"><?php echo form_error('podcast_info');?></span>
							</div>
						</div>

						<div class="col-md-6">
							<label for="podcast_category" class="control-label"><span class="text-danger">*</span>Podcast category</label>
							<div class="form-group">
								<select class="form-control" name="podcast_category">
								<?php foreach($categories as $category){ ?>
									<option value="<?php echo $category['pod_cate_id']?>"><?php echo $category['pod_cate_nom']?></option>
								<?php } ?>
								</select>
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






