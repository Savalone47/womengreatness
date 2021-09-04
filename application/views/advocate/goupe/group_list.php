

<div class="content-wrapper clearfix">
	<!-- Main content -->
	<div class="col-md-12 form f-label">
		<!-- Profile Image -->
		<div class="box box-success pad-profile">
		<div class="box-header">
                <h3 class="box-title">Goupe Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('goupe/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Group Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($goupe as $g){ ?>
                    <tr>
						<td><?= ucfirst($g->nom_groupe); ?></td>
						<td> 
                            <a href="<?php echo site_url('goupe/advocateListByGroup/'.$g->id); ?>" class="btn btn-primary btn-xs"><span class="ml-1 fa fa-eye"></span> View complete list of Advocates</a>
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




