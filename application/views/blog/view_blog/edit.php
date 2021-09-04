<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">View Blog Edit</h3>
            </div>
			<?php echo form_open('view_blog/edit/'.$view_blog['view_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="view_item_id" class="control-label">Item Blog</label>
						<div class="form-group">
							<select name="view_item_id" class="form-control">
								<option value="">select item_blog</option>
								<?php 
								foreach($all_item_blog as $item_blog)
								{
									$selected = ($item_blog['item_id'] == $view_blog['view_item_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$item_blog['item_id'].'" '.$selected.'>'.$item_blog['item_title'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="create_at" class="control-label">Create At</label>
						<div class="form-group">
							<input type="text" name="create_at" value="<?php echo ($this->input->post('create_at') ? $this->input->post('create_at') : $view_blog['create_at']); ?>" class="has-datepicker form-control" id="create_at" />
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