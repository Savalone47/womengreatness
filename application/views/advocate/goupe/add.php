
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
              	<h3 class="box-title">Goupe Add</h3>
            </div>
            <?php echo form_open('goupe/add'); ?>
          	<div class="box-body">
				  <?php if($this->session->success):?>
						<div class="alert alert-success">
							Super! your groupe is created with success
						</div>
					<?php endif?>
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nom_groupe" class="control-label">Nom Groupe</label>
						<div class="form-group">
							<input type="text" name="nom_groupe" value="<?php echo $this->input->post('nom_groupe'); ?>" class="form-control" id="nom_groupe" />
						</div>
					</div>

					<div class="col-md-6">
						<label for="nom_groupe" class="control-label">organisation</label>
						<div class="form-group">
							<select name="organisation" class="form-control">
								<?php foreach($organisations as $organisation):?>
									<option value="<?php echo $organisation->id?>"><?php echo $organisation->nom_organisation?></option>
								<?php endforeach?>
							</select>
							
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






