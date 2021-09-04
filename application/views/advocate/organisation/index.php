<div class="row">
    <div class="col-md-12">
        <div class="box">
            
        </div>
    </div>
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
			
        <div class="box-header">
                <h3 class="box-title">Organisation Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('organisation/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Id User</th>
						<th>Secteur</th>
						<th>Nom Organisation</th>
						<th>Numero Enregistrement</th>
						<th>Pays</th>
						<th>Ville</th>
						<th>Province</th>
						<th>Site Internet</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($organisation as $o){ ?>
                    <tr>
						<td><?php echo $o['id']; ?></td>
						<td><?php echo $o['id_user']; ?></td>
						<td><?php echo $o['secteur']; ?></td>
						<td><?php echo $o['nom_organisation']; ?></td>
						<td><?php echo $o['numero_enregistrement']; ?></td>
						<td><?php echo $o['pays']; ?></td>
						<td><?php echo $o['ville']; ?></td>
						<td><?php echo $o['province']; ?></td>
						<td><?php echo $o['site_internet']; ?></td>
						<td>
                            <a href="<?php echo site_url('organisation/edit/'.$o['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('organisation/remove/'.$o['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
		</div>
		<!-- /.content -->
	</div>
</div>






