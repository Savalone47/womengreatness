<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Goupe Edit</h3>
            </div>
			<?php echo form_open('goupe/edit/'.$goupe['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_user" class="control-label">User</label>
						<div class="form-group">
							<select name="id_user" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_user as $user)
								{
									$selected = ($user['id'] == $goupe['id_user']) ? ' selected="selected"' : "";

									echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['nom'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_groupe" class="control-label">Nom Groupe</label>
						<div class="form-group">
							<input type="text" name="nom_groupe" value="<?php echo ($this->input->post('nom_groupe') ? $this->input->post('nom_groupe') : $goupe['nom_groupe']); ?>" class="form-control" id="nom_groupe" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="numero_enregistrement" class="control-label">Numero Enregistrement</label>
						<div class="form-group">
							<input type="text" name="numero_enregistrement" value="<?php echo ($this->input->post('numero_enregistrement') ? $this->input->post('numero_enregistrement') : $goupe['numero_enregistrement']); ?>" class="form-control" id="numero_enregistrement" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pays" class="control-label">Pays</label>
						<div class="form-group">
							<input type="text" name="pays" value="<?php echo ($this->input->post('pays') ? $this->input->post('pays') : $goupe['pays']); ?>" class="form-control" id="pays" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ville" class="control-label">Ville</label>
						<div class="form-group">
							<input type="text" name="ville" value="<?php echo ($this->input->post('ville') ? $this->input->post('ville') : $goupe['ville']); ?>" class="form-control" id="ville" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="province" class="control-label">Province</label>
						<div class="form-group">
							<input type="text" name="province" value="<?php echo ($this->input->post('province') ? $this->input->post('province') : $goupe['province']); ?>" class="form-control" id="province" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="site_internet" class="control-label">Site Internet</label>
						<div class="form-group">
							<input type="text" name="site_internet" value="<?php echo ($this->input->post('site_internet') ? $this->input->post('site_internet') : $goupe['site_internet']); ?>" class="form-control" id="site_internet" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="logo_groupe" class="control-label">Logo Groupe</label>
						<div class="form-group">
							<input type="text" name="logo_groupe" value="<?php echo ($this->input->post('logo_groupe') ? $this->input->post('logo_groupe') : $goupe['logo_groupe']); ?>" class="form-control" id="logo_groupe" />
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