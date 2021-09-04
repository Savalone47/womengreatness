<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">View Blog Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('view_blog/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>View Id</th>
						<th>View Item Id</th>
						<th>Create At</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($view_blog as $v){ ?>
                    <tr>
						<td><?php echo $v['view_id']; ?></td>
						<td><?php echo $v['view_item_id']; ?></td>
						<td><?php echo $v['create_at']; ?></td>
						<td>
                            <a href="<?php echo site_url('view_blog/edit/'.$v['view_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('view_blog/remove/'.$v['view_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
