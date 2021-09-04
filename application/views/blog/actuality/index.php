

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
                <h3 class="box-title">Actuality Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('actuality_admin/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Actuality Id</th>
						<th>Category Id</th>
						<th>Actuality Title</th>
						<th>Actuality Picture</th>
						<th>User Id</th>
						<th>Created At</th>
						<th>Actuality Content</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($actuality as $a){ ?>
                    <tr>
						<td><?php echo $a['actuality_id']; ?></td>
						<td><?php echo $a['category_id']; ?></td>
						<td><?php echo $a['actuality_title']; ?></td>
						<td><?php echo $a['actuality_picture']; ?></td>
						<td><?php echo $a['user_id']; ?></td>
						<td><?php echo $a['created_at']; ?></td>
						<td><?php echo $a['actuality_content']; ?></td>
						<td>
                            <a href="<?php echo site_url('actuality_admin/edit/'.$a['actuality_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('actuality_admin/remove/'.$a['actuality_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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




