<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Categorie User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('categorie_user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nom</th>
						<th>Prix</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($categorie_user as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['nom']; ?></td>
						<td><?php echo $c['prix']; ?></td>
						<td><?php echo $c['description']; ?></td>
						<td>
                            <a href="<?php echo site_url('categorie_user/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('categorie_user/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
