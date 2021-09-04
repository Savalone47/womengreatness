

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
                <h3 class="box-title">Category Blog Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('category_blog/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Category Id</th>
						<th>Category Name</th>
						<th>Created At</th>
						<th>Category Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($category_blog as $c){ ?>
                    <tr>
						<td><?php echo $c['category_id']; ?></td>
						<td><?php echo $c['category_name']; ?></td>
						<td><?php echo $c['created_at']; ?></td>
						<td><?php echo $c['category_description']; ?></td>
						<td>
                            <a href="<?php echo site_url('category_blog/edit/'.$c['category_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('category_blog/remove/'.$c['category_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
