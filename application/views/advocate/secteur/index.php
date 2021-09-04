

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
				<h3 class="box-title">Secteur Listing</h3>
				<div class="box-tools">
					<a href="<?php echo site_url('secteur/add'); ?>" class="btn btn-success btn-sm">Add</a>
				</div>
			</div>
			<div class="box-body">
				<table class="table table-striped">
					<tr>
						<th>ID</th>
						<th>Nom</th>
						<th>Actions</th>
					</tr>
					<?php foreach($secteur as $s){ ?>
						<tr>
							<td><?php echo $s['id']; ?></td>
							<td><?php echo $s['nom']; ?></td>
							<td>
								<a href="<?php echo site_url('secteur/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
								<a href="<?php echo site_url('secteur/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
							</td>
						</tr>
					<?php } ?>
				</table>
				<div class="pull-right">
					<?php echo $this->pagination->create_links(); ?>
				</div>
			</div>
			<!-- /.box -->
		</div>
		<!-- /.content -->
	</div>
</div>
<!-- /.content-wrapper -->

