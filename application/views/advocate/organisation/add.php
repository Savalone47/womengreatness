
<div class="content-wrapper">

	<section class="content">
		<?php if($this->session->flashdata("messagePr")){?>
			<div class="alert alert-info">
				<?php echo $this->session->flashdata("messagePr")?>
			</div>
		<?php } ?>
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Organisation Add fghjk</h3>
					</div>
					<?php echo form_open('organisation/add'); ?>
					<div class="box-body">
						<div class="row clearfix">
							<div class="col-md-6">
								<label for="secteur" class="control-label">Secteur</label>
								<div class="form-group">
									<select name="secteur" class="form-control">
										<option value="">select secteur</option>
										<?php
										foreach($all_secteur as $secteur)
										{
											$selected = ($secteur['id'] == $this->input->post('secteur')) ? ' selected="selected"' : "";

											echo '<option value="'.$secteur['id'].'" '.$selected.'>'.$secteur['nom'].'</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<label for="nom_organisation" class="control-label">Nom Organisation</label>
								<div class="form-group">
									<input type="text" name="nom_organisation" value="<?php echo $this->input->post('nom_organisation'); ?>" class="form-control" id="nom_organisation" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="numero_enregistrement" class="control-label">Numero Enregistrement</label>
								<div class="form-group">
									<input type="text" name="numero_enregistrement" value="<?php echo $this->input->post('numero_enregistrement'); ?>" class="form-control" id="numero_enregistrement" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="pays" class="control-label">Pays</label>
								<div class="form-group">
									<input type="text" name="pays" value="<?php echo $this->input->post('pays'); ?>" class="form-control" id="pays" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="ville" class="control-label">Ville</label>
								<div class="form-group">
									<input type="text" name="ville" value="<?php echo $this->input->post('ville'); ?>" class="form-control" id="ville" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="province" class="control-label">Province</label>
								<div class="form-group">
									<input type="text" name="province" value="<?php echo $this->input->post('province'); ?>" class="form-control" id="province" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="site_internet" class="control-label">Site Internet</label>
								<div class="form-group">
									<input type="text" name="site_internet" value="<?php echo $this->input->post('site_internet'); ?>" class="form-control" id="site_internet" />
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<input type="submit" class="btn btn-success" value="Save">
							
					</div>
					<?php echo form_close(); ?>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
