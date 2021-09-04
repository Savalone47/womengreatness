<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Categorie User Add</h3>
            </div>
            <?php echo form_open('categorie_user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nom" class="control-label"><span class="text-danger">*</span>Nom</label>
						<div class="form-group">
							<input type="text" name="nom" value="<?php echo $this->input->post('nom'); ?>" class="form-control" id="nom" />
							<span class="text-danger"><?php echo form_error('nom');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prix" class="control-label"><span class="text-danger">*</span>Prix</label>
						<div class="form-group">
							<input type="text" name="prix" value="<?php echo $this->input->post('prix'); ?>" class="form-control" id="prix" />
							<span class="text-danger"><?php echo form_error('prix');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" name="description" value="<?php echo $this->input->post('description'); ?>" class="form-control" id="description" />
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