
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
				<h3 class="box-title">Category blog <small></small></h3>
			</div>
			<?php echo form_open('category_blog/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="category_name" class="control-label"><span class="text-danger">*</span>Category Name</label>
						<div class="form-group">
							<input type="text" name="category_name" value="<?php echo $this->input->post('category_name'); ?>" class="form-control" id="category_name" />
							<span class="text-danger"><?php echo form_error('category_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_at" class="control-label">Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo $this->input->post('created_at'); ?>" class="has-datepicker form-control" id="created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="category_description" class="control-label"><span class="text-danger">*</span>Category Description</label>
						<div class="form-group">
							<textarea name="category_description" class="form-control" id="category_description"><?php echo $this->input->post('category_description'); ?></textarea>
							<span class="text-danger"><?php echo form_error('category_description');?></span>
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
			<!-- /.box -->
		</div>
		<!-- /.content -->
	</div>
</div>
