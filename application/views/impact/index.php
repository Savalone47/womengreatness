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
                <h3 class="box-title">Impact Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('impact/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Impact Id</th>
						<th>Impact Titlte</th>
						<th>Create At</th>
						<th>Impact Picture</th>
						<th>Impact Content</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($impact as $i){ ?>
                    <tr>
						<td><?php echo $i['impact_id']; ?></td>
						<td><?php echo $i['impact_titlte']; ?></td>
						<td><?php echo $i['create_at']; ?></td>
						<td><a href="<?php echo site_url($i['impact_picture']); ?>"><?php echo $i['impact_picture']; ?></a></td>
						<td><?php echo $i['impact_content']; ?></td>
						<td>
                            <a href="<?php echo site_url('impact/edit/'.$i['impact_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('impact/remove/'.$i['impact_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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






