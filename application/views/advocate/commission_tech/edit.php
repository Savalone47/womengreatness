<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Commission Tech Edit</h3>
            </div>
			<?php echo form_open('commission_tech/edit/'.$commission_tech['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nom_commission" class="control-label"><span class="text-danger">*</span>Nom Commission</label>
						<div class="form-group">
							<input type="text" name="nom_commission" value="<?php echo ($this->input->post('nom_commission') ? $this->input->post('nom_commission') : $commission_tech['nom_commission']); ?>" class="form-control" id="nom_commission" />
							<span class="text-danger"><?php echo form_error('nom_commission');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo ($this->input->post('description') ? $this->input->post('description') : $commission_tech['description']); ?></textarea>
							<span class="text-danger"><?php echo form_error('description');?></span>
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