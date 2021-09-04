<div class="content-wrapper clearfix">
	<!-- Content Header (Page header) -->
	<!-- Main content -->
	<div class="row">
		<div class="col-md-3">
			<section class="content">
				<img src="<?php echo base_url();?>/assets/images/issues/<?=$issue['is_picture']?>" width="100%">
			</section>	
		</div>
		<div class="col-md-8">
			<section class="content">
				<?php if($this->session->flashdata("messagePr")){?>
					<div class="alert alert-info">
						<?php echo $this->session->flashdata("messagePr")?>
					</div>
				<?php } ?>
				<div class="row"> 
					<h2><?=$issue['is_title']?></h2>
					<small class="post-date">Posted on: <?php echo $issue['is_created_at']?></b> </small> <br>
					<div class="post-body">
						<?= $issue['is_description']?>
					</div>
					<br>
					<?=form_open()?>
						<a class="btn btn-default" href="<?= base_url() ?>Issues/vewEdit/<?= $issue['is_id'] ?>">Edit</a>
						<input type="submit" class="btn btn-danger" value="Delete">
					</form>
				</div>
			</section>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>