<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Secteur</th>
						<th>Categorie User</th>
						<th>Prenom</th>
						<th>Nom</th>
						<th>Email</th>
						<th>Date De Naissance</th>
						<th>Pays</th>
						<th>Ville</th>
						<th>Province</th>
						<th>Nom Societe</th>
						<th>Fonction</th>
						<th>Departement</th>
						<th>Role</th>
						<th>Num Tel</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($user as $u){ ?>
                    <tr>
						<td><?php echo $u['id']; ?></td>
						<td><?php echo $u['secteur']; ?></td>
						<td><?php echo $u['categorie_user']; ?></td>
						<td><?php echo $u['prenom']; ?></td>
						<td><?php echo $u['nom']; ?></td>
						<td><?php echo $u['email']; ?></td>
						<td><?php echo $u['date_de_naissance']; ?></td>
						<td><?php echo $u['pays']; ?></td>
						<td><?php echo $u['ville']; ?></td>
						<td><?php echo $u['province']; ?></td>
						<td><?php echo $u['nom_societe']; ?></td>
						<td><?php echo $u['fonction']; ?></td>
						<td><?php echo $u['departement']; ?></td>
						<td><?php echo $u['role']; ?></td>
						<td><?php echo $u['num_tel']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
