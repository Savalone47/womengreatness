
<div class="content-wrapper clearfix">
	<!-- Main content -->
	<div class="col-md-12 form f-label">
		<!-- Profile Image -->
		<div class="box box-success pad-profile">
		<div class="box-header">
                <h3 class="box-title">Users Listing/ Group user : <?= $nom ?></h3>
            	<div class="box-tools">
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Username</th>
                        <th>Email</th>
                        <th>Nom Groupe</th>
                    </tr>
                    <?php foreach($advocates as $g){ ?>
                    <tr>
						<td><?php echo ucfirst($g->name); ?></td>
                        <td><?php echo $g->email; ?></td>
                        <td><?php echo ucfirst($g->nom_groupe); ?></td>
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
