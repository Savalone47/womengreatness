<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['id']); ?>
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
									$selected = ($secteur['id'] == $user['secteur']) ? ' selected="selected"' : "";

									echo '<option value="'.$secteur['id'].'" '.$selected.'>'.$secteur['nom'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="categorie_user" class="control-label">Categorie User</label>
						<div class="form-group">
							<select name="categorie_user" class="form-control">
								<option value="">select categorie_user</option>
								<?php 
								foreach($all_categorie_user as $categorie_user)
								{
									$selected = ($categorie_user['id'] == $user['categorie_user']) ? ' selected="selected"' : "";

									echo '<option value="'.$categorie_user['id'].'" '.$selected.'>'.$categorie_user['nom'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prenom" class="control-label">Prenom</label>
						<div class="form-group">
							<input type="text" name="prenom" value="<?php echo ($this->input->post('prenom') ? $this->input->post('prenom') : $user['prenom']); ?>" class="form-control" id="prenom" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom" class="control-label">Nom</label>
						<div class="form-group">
							<input type="text" name="nom" value="<?php echo ($this->input->post('nom') ? $this->input->post('nom') : $user['nom']); ?>" class="form-control" id="nom" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_de_naissance" class="control-label">Date De Naissance</label>
						<div class="form-group">
							<input type="text" name="date_de_naissance" value="<?php echo ($this->input->post('date_de_naissance') ? $this->input->post('date_de_naissance') : $user['date_de_naissance']); ?>" class="has-datepicker form-control" id="date_de_naissance" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pays" class="control-label">Pays</label>
						<div class="form-group">
							<input type="text" name="pays" value="<?php echo ($this->input->post('pays') ? $this->input->post('pays') : $user['pays']); ?>" class="form-control" id="pays" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ville" class="control-label">Ville</label>
						<div class="form-group">
							<input type="text" name="ville" value="<?php echo ($this->input->post('ville') ? $this->input->post('ville') : $user['ville']); ?>" class="form-control" id="ville" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="province" class="control-label">Province</label>
						<div class="form-group">
							<input type="text" name="province" value="<?php echo ($this->input->post('province') ? $this->input->post('province') : $user['province']); ?>" class="form-control" id="province" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_societe" class="control-label">Nom Societe</label>
						<div class="form-group">
							<input type="text" name="nom_societe" value="<?php echo ($this->input->post('nom_societe') ? $this->input->post('nom_societe') : $user['nom_societe']); ?>" class="form-control" id="nom_societe" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fonction" class="control-label">Fonction</label>
						<div class="form-group">
							<input type="text" name="fonction" value="<?php echo ($this->input->post('fonction') ? $this->input->post('fonction') : $user['fonction']); ?>" class="form-control" id="fonction" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="departement" class="control-label">Departement</label>
						<div class="form-group">
							<input type="text" name="departement" value="<?php echo ($this->input->post('departement') ? $this->input->post('departement') : $user['departement']); ?>" class="form-control" id="departement" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="role" class="control-label">Role</label>
						<div class="form-group">
							<input type="text" name="role" value="<?php echo ($this->input->post('role') ? $this->input->post('role') : $user['role']); ?>" class="form-control" id="role" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="num_tel" class="control-label">Num Tel</label>
						<div class="form-group">
							<input type="text" name="num_tel" value="<?php echo ($this->input->post('num_tel') ? $this->input->post('num_tel') : $user['num_tel']); ?>" class="form-control" id="num_tel" />
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