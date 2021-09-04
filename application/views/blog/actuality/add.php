

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
              	<h3 class="box-title">Actuality Add</h3>
            </div>
            <?php echo form_open('actuality_admin/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="category_id" class="control-label"><span class="text-danger">*</span>Category Actuality</label>
						<div class="form-group">
							<select name="category_id" class="form-control">
								<option value="">select category_actuality</option>
								<?php 
								foreach($all_category_actuality as $category_actuality)
								{
									$selected = ($category_actuality['category_id'] == $this->input->post('category_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$category_actuality['category_id'].'" '.$selected.'>'.$category_actuality['category_name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('category_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="actuality_title" class="control-label"><span class="text-danger">*</span>Actuality Title</label>
						<div class="form-group">
							<input type="text" name="actuality_title" value="<?php echo $this->input->post('actuality_title'); ?>" class="form-control" id="actuality_title" />
							<span class="text-danger"><?php echo form_error('actuality_title');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="actuality_picture" class="control-label"><span class="text-danger">*</span>Actuality Picture</label>
						<div class="form-group">
							<input type="text" name="actuality_picture" value="<?php echo $this->input->post('actuality_picture'); ?>" class="form-control" id="actuality_picture" />
							<span class="text-danger"><?php echo form_error('actuality_picture');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_id" class="control-label">User Id</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo $this->input->post('user_id'); ?>" class="form-control" id="user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_at" class="control-label">Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo $this->input->post('created_at'); ?>" class="has-datepicker form-control" id="created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="actuality_content" class="control-label"><span class="text-danger">*</span>Actuality Content</label>
						<div class="form-group">
							<textarea name="actuality_content" class="form-control" id="actuality_content"><?php echo $this->input->post('actuality_content'); ?></textarea>
							<span class="text-danger"><?php echo form_error('actuality_content');?></span>
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




