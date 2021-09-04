<div class="row">
	
</div>





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
			
		
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Categorie podcast Edit</h3>
            </div>
			<?php echo form_open('category_podcast/edit/'.$category_podcast['pod_cate_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-8">
						<label for="impact_titlte" class="control-label"><span class="text-danger">*</span>category name</label>
						<div class="form-group">
							<input type="text" name="category_name" value="<?php echo ($this->input->post('category_name') ? $this->input->post('category_name') : $category_podcast['pod_cate_nom']); ?>" class="form-control" id="impact_titlte" />
							<span class="text-danger"><?php echo form_error('category_name');?></span>
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






