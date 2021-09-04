<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Add</h3>
            </div>
            <?php echo form_open('user/add'); ?>
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
						<label for="categorie_user" class="control-label">Categorie User</label>
						<div class="form-group">
							<select name="categorie_user" class="form-control">
								<option value="">select categorie_user</option>
								<?php 
								foreach($all_categorie_user as $categorie_user)
								{
									$selected = ($categorie_user['id'] == $this->input->post('categorie_user')) ? ' selected="selected"' : "";

									echo '<option value="'.$categorie_user['id'].'" '.$selected.'>'.$categorie_user['nom'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prenom" class="control-label">Prenom</label>
						<div class="form-group">
							<input type="text" name="prenom" value="<?php echo $this->input->post('prenom'); ?>" class="form-control" id="prenom" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom" class="control-label">Nom</label>
						<div class="form-group">
							<input type="text" name="nom" value="<?php echo $this->input->post('nom'); ?>" class="form-control" id="nom" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_de_naissance" class="control-label">Date De Naissance</label>
						<div class="form-group">
							<input type="text" name="date_de_naissance" value="<?php echo $this->input->post('date_de_naissance'); ?>" class="has-datepicker form-control" id="date_de_naissance" />
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
						<label for="nom_societe" class="control-label">Nom Societe</label>
						<div class="form-group">
							<input type="text" name="nom_societe" value="<?php echo $this->input->post('nom_societe'); ?>" class="form-control" id="nom_societe" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fonction" class="control-label">Fonction</label>
						<div class="form-group">
							<input type="text" name="fonction" value="<?php echo $this->input->post('fonction'); ?>" class="form-control" id="fonction" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="departement" class="control-label">Departement</label>
						<div class="form-group">
							<input type="text" name="departement" value="<?php echo $this->input->post('departement'); ?>" class="form-control" id="departement" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="role" class="control-label">Role</label>
						<div class="form-group">
							<input type="text" name="role" value="<?php echo $this->input->post('role'); ?>" class="form-control" id="role" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="num_tel" class="control-label">Num Tel</label>
						<div class="form-group">
							<input type="text" name="num_tel" value="<?php echo $this->input->post('num_tel'); ?>" class="form-control" id="num_tel" />
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