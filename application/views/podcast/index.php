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
                <h3 class="box-title">Podcast Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('podcast/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>podcast Id</th>
						<th>podcast Titlte</th>
						<th>podcast file</th>
						<th>podcast Content</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($podcasts as $podcast){ ?>
						<tr>
							<td><?php echo $podcast['podcast_id']; ?></td>
							<td><?php echo $podcast['podcast_title']; ?></td>
							<td>
								<audio controls src="<?php echo site_url($podcast['file'])?>">
									
								</audio>
							</td>
							<td><?php echo $podcast['podcast_info']; ?></td>
							<td> 
								<a href="<?php echo site_url('podcast/remove/'.$podcast['podcast_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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






