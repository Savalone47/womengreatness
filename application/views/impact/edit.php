<div class="row">
	
</div>





<div class="content-wrapper clearfix">
	<!-- Main content -->
	<div class="col-md-4">
		<div class="card card-body">
			<img src="<?php echo site_url($impact['impact_picture'])?>" width="100%">
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
			
		
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Impact Edit</h3>
            </div>
			<?php echo form_open('impact/edit/'.$impact['impact_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-12">
						<label for="impact_titlte" class="control-label"><span class="text-danger">*</span>Impact Titlte</label>
						<div class="form-group">
							<input type="text" name="impact_titlte" value="<?php echo ($this->input->post('impact_titlte') ? $this->input->post('impact_titlte') : $impact['impact_titlte']); ?>" class="form-control" id="impact_titlte" />
							<span class="text-danger"><?php echo form_error('impact_titlte');?></span>
						</div>
					</div>
					
					<div class="col-md-12">
						
						<div class="form-group">
							<input type="hidden" name="impact_picture" class="form-control" id="impact_picture" value="<?php echo $impact['impact_picture']?>">
							<span class="text-danger"><?php echo form_error('impact_picture');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="impact_content" class="control-label"><span class="text-danger">*</span>Impact Content</label>
						<div class="form-group">
							<textarea name="impact_content" class="form-control" id="impact_content"><?php echo ($this->input->post('impact_content') ? $this->input->post('impact_content') : $impact['impact_content']); ?></textarea>
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
			<?php echo form_close(); ?>
		</div>
    </div>
		</div>
		<!-- /.content -->
	</div>
</div>






