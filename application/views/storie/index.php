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
                <h3 class="box-title">Storie Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('storie/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Storie Id</th>
						<th>Storie Title</th>
						<th>Create At</th>
						<th>Storie Picture</th>
						<th>Storie Content</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($storie as $s){ ?>
                    <tr>
						<td><?php echo $s['storie_id']; ?></td>
						<td><?php echo $s['storie_title']; ?></td>
						<td><?php echo $s['create_at']; ?></td>
						<td><a href="<?php echo site_url( $s['storie_picture']); ?>"><?php echo  $s['storie_picture']?></a></td>
						<td><?php echo $s['storie_content']; ?></td>
						<td>
                            <a href="<?php echo site_url('storie/edit/'.$s['storie_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('storie/remove/'.$s['storie_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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






