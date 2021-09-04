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
                <h3 class="box-title">Categorie Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('category_podcast/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Category podcast Id</th>
						<th>Category podcast name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($category_podcasts as $category){ ?>
					<tr>
						<td><?php echo $category['pod_cate_id']?></td>
						<td><?php echo $category['pod_cate_nom']?></td>
						<td>
                            <a href="<?php echo site_url('category_podcast/edit/'.$category['pod_cate_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('category_podcast/remove/'.$category['pod_cate_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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






