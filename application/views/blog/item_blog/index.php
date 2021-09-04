
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
                <h3 class="box-title">Item Blog Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('item_blog/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div> 
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Item Id</th>
						<th>Item Category Id</th>
						<th>Item Title</th>
						<th>Item User Id</th>
						<th>Create At</th>
						<th>Item Content</th>
						<th>Item Picture</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($item_blog as $i){ ?>
                    <tr>
						<td><?php echo $i['item_id']; ?></td>
						<td><?php echo $i['item_category_id']; ?></td>
						<td><?php echo $i['item_title']; ?></td>
						<td><?php echo $i['item_user_id']; ?></td>
						<td><?php echo $i['create_at']; ?></td>
						<td><?php echo $i['item_content']; ?></td>
						<td><?php echo $i['item_picture']; ?></td>
						<td>
                            <a href="<?php echo site_url('item_blog/edit/'.$i['item_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('item_blog/remove/'.$i['item_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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




