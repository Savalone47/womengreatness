<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Comment Edit</h3>
            </div>
			<?php echo form_open('comment_admin/edit/'.$comment['comment_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="comment_item_id" class="control-label">Item Blog</label>
						<div class="form-group">
							<select name="comment_item_id" class="form-control">
								<option value="">select item_blog</option>
								<?php 
								foreach($all_item_blog as $item_blog)
								{
									$selected = ($item_blog['item_id'] == $comment['comment_item_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$item_blog['item_id'].'" '.$selected.'>'.$item_blog['item_title'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="comment_name_user" class="control-label"><span class="text-danger">*</span>Comment Name User</label>
						<div class="form-group">
							<input type="text" name="comment_name_user" value="<?php echo ($this->input->post('comment_name_user') ? $this->input->post('comment_name_user') : $comment['comment_name_user']); ?>" class="form-control" id="comment_name_user" />
							<span class="text-danger"><?php echo form_error('comment_name_user');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_at" class="control-label">Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo ($this->input->post('created_at') ? $this->input->post('created_at') : $comment['created_at']); ?>" class="has-datepicker form-control" id="created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="comment_content" class="control-label"><span class="text-danger">*</span>Comment Content</label>
						<div class="form-group">
							<textarea name="comment_content" class="form-control" id="comment_content"><?php echo ($this->input->post('comment_content') ? $this->input->post('comment_content') : $comment['comment_content']); ?></textarea>
							<span class="text-danger"><?php echo form_error('comment_content');?></span>
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