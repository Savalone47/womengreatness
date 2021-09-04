
<div class="content-wrapper clearfix">
	<!-- Main content -->
	<div class="col-md-12 form f-label">
		<!-- Profile Image -->
		<div class="box box-success pad-profile">
		<div class="box-header">
                <h3 class="box-title">Goupe Listing/ Organisation : <?= $nom ?></h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('goupe/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Nom Groupe</th>
                    </tr>
                    <?php foreach($goupe as $g){ ?>
                    <tr>
						<td><?php echo $g->nom_groupe; ?></td>
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




