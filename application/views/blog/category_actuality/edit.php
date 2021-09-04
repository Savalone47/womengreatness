



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
              	<h3 class="box-title">Category Actuality Edit</h3>
            </div>
			<?php echo form_open('category_actuality/edit/'.$category_actuality['category_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="category_name" class="control-label"><span class="text-danger">*</span>Category Name</label>
						<div class="form-group">
							<input type="text" name="category_name" value="<?php echo ($this->input->post('category_name') ? $this->input->post('category_name') : $category_actuality['category_name']); ?>" class="form-control" id="category_name" />
							<span class="text-danger"><?php echo form_error('category_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_at" class="control-label">Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo ($this->input->post('created_at') ? $this->input->post('created_at') : $category_actuality['created_at']); ?>" class="has-datepicker form-control" id="created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="category_descriptionn" class="control-label"><span class="text-danger">*</span>Category Descriptionn</label>
						<div class="form-group">
							<textarea name="category_descriptionn" class="form-control" id="category_descriptionn"><?php echo ($this->input->post('category_descriptionn') ? $this->input->post('category_descriptionn') : $category_actuality['category_descriptionn']); ?></textarea>
							<span class="text-danger"><?php echo form_error('category_descriptionn');?></span>
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





