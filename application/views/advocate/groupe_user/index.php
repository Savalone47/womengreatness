<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Groupe User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('groupe_user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Id User</th>
						<th>Id Group</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($groupe_user as $g){ ?>
                    <tr>
						<td><?php echo $g['id']; ?></td>
						<td><?php echo $g['id_user']; ?></td>
						<td><?php echo $g['id_group']; ?></td>
						<td>
                            <a href="<?php echo site_url('groupe_user/edit/'.$g['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('groupe_user/remove/'.$g['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
</div>
