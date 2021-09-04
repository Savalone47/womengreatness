<div class="row">
    <div class="col-md-12">
        <div class="box">
            
        </div>
    </div>
</div>




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
                <h3 class="box-title">categorie user Listing</h3>
            	<div class="box-tools">
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>user Id</th>
						<th>user name</th>
						<th>email</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($users as $user): ?>
                    <tr>
						<td><?php echo $user->users_id; ?></td>
						<td><?php echo $user->name; ?></td>
						<td><?php echo $user->email?></td>
						<td>
                            <a href="<?php echo site_url('user/remove/'.$user->users_id); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
		</div>
		<!-- /.content -->
	</div>
</div>






