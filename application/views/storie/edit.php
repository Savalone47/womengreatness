<div class="row">
	
    <div class="col-md-8">
      	<div class="box box-info">
            
		</div>
    </div>
</div>







<div class="content-wrapper clearfix">
	<!-- Main content -->
	<div class="col-md-4">
		<div class="card card-body form f-label">
			<img src="<?php echo site_url($storie['storie_picture'])?>" width="100%">
		</div>
	</div>
	<div class="col-md-8 form f-label">
		<?php if($this->session->flashdata("messagePr")){?>
			<div class="alert alert-info">
				<?php echo $this->session->flashdata("messagePr")?>
			</div>
		<?php } ?>
		<!-- Profile Image -->
		<div class="box box-success pad-profile">
			
		<div class="box-header with-border">
              	<h3 class="box-title">Storie Edit</h3>
            </div>
			<?php echo form_open('storie/edit/'.$storie['storie_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					
					<div class="col-md-12">
						<label for="storie_title" class="control-label"><span class="text-danger">*</span>Storie Title</label>
						<div class="form-group">
							<input type="text" name="storie_title" value="<?php echo ($this->input->post('storie_title') ? $this->input->post('storie_title') : $storie['storie_title']); ?>" class="form-control" id="storie_title" />
							<span class="text-danger"><?php echo form_error('storie_title');?></span>
						</div>
					</div>
					
					<div class="col-md-12">
					
						<div class="form-group">
							<input type="hidden" name="storie_picture" class="form-control" id="storie_picture" value="<?php echo $storie['storie_picture']?>">
						</div>
					</div>
					<div class="col-md-12">
						<label for="storie_content" class="control-label"><span class="text-danger">*</span>Storie Content</label>
						<div class="form-group">
							<textarea name="storie_content" class="form-control" id="storie_content"><?php echo ($this->input->post('storie_content') ? $this->input->post('storie_content') : $storie['storie_content']); ?></textarea>
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
			<?php echo form_close(); ?>
			
		</div>
		<!-- /.content -->
	</div>
</div>






