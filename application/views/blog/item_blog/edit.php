
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
              	<h3 class="box-title">Item Blog Edit</h3>
            </div>
			<?php echo form_open('item_blog/edit/'.$item_blog['item_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="item_category_id" class="control-label">Category Blog</label>
						<div class="form-group">
							<select name="item_category_id" class="form-control">
								<option value="">select category_blog</option>
								<?php 
								foreach($all_category_blog as $category_blog)
								{
									$selected = ($category_blog['category_id'] == $item_blog['item_category_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$category_blog['category_id'].'" '.$selected.'>'.$category_blog['category_name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="item_title" class="control-label"><span class="text-danger">*</span>Item Title</label>
						<div class="form-group">
							<input type="text" name="item_title" value="<?php echo ($this->input->post('item_title') ? $this->input->post('item_title') : $item_blog['item_title']); ?>" class="form-control" id="item_title" />
							<span class="text-danger"><?php echo form_error('item_title');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="item_user_id" class="control-label">Item User Id</label>
						<div class="form-group">
							<input type="text" name="item_user_id" value="<?php echo ($this->input->post('item_user_id') ? $this->input->post('item_user_id') : $item_blog['item_user_id']); ?>" class="form-control" id="item_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="create_at" class="control-label">Create At</label>
						<div class="form-group">
							<input type="text" name="create_at" value="<?php echo ($this->input->post('create_at') ? $this->input->post('create_at') : $item_blog['create_at']); ?>" class="has-datepicker form-control" id="create_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="item_content" class="control-label"><span class="text-danger">*</span>Item Content</label>
						<div class="form-group">
							<textarea name="item_content" class="form-control" id="item_content"><?php echo ($this->input->post('item_content') ? $this->input->post('item_content') : $item_blog['item_content']); ?></textarea>
							<span class="text-danger"><?php echo form_error('item_content');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="item_picture" class="control-label"><span class="text-danger">*</span>Item Picture</label>
						<div class="form-group">
							<textarea name="item_picture" class="form-control" id="item_picture"><?php echo ($this->input->post('item_picture') ? $this->input->post('item_picture') : $item_blog['item_picture']); ?></textarea>
							<span class="text-danger"><?php echo form_error('item_picture');?></span>
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






