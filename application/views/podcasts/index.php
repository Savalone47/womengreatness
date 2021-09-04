
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
				<h3 class="box-title">Podcast audio</h3>
				<div class="box-tools">
					<a href="<?php echo site_url('Podcasts/create'); ?>" class="btn btn-success btn-sm">New Podcast</a>
				</div>
			</div>
			<div class="box-body">
				<table class="table table-striped">
					<tr>
						<th>Podcast Id</th>
						<th>Category Id</th>
						<th>Title</th>
						<th>Autors</th>
						<th>Files</th>
						<th>Pictures</th>
						<th>Actions</th>
					</tr>
					<?php foreach($podcasts as $pod){ ?>
						<tr>
							<td><?php echo $pod['pod_id']; ?></td>
							<td><?php echo $pod['pod_cate_id']; ?></td>
							<td><?php echo $pod['pod_title']; ?></td>
							<td><?php echo $pod['pod_auteur']; ?></td>
							<td><?php echo $pod['pod_file']; ?></td>
							<td><?php echo $pod['pod_image']; ?></td>
							<td>
								<a href="<?php echo site_url('podcasts/edit/'.$pod['pod_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
								<a href="<?php echo site_url('podcasts/remove/'.$pod['pod_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
	<!-- /.content -->
</div>
</div>




