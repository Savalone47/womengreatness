<div class="content-wrapper clearfix">
	<?php foreach ($stories as $story):?>
		<div class="row">
			<div class="col-md-3">
				<section class="content">
					<img src="<?php echo base_url();?>/assets/images/events/<?=$story->story_picture?>" width="100%">
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
						<h2><?=$story->stori_title?></h2>
						<small class="post-date">Posted on: <?php echo $story->stori_date?> In <b><?=$story->stori_cat_name?></b> </small> <br>
						<div class="post-body">
							<?= $story->stori_description?>
						</div>
						<br>
						<?=form_open()?>
						<a class="btn btn-default" href="<?= base_url() ?>Stories/edit/<?= $story->stori_id ?>">Edit</a>
						<a class="btn btn-danger" href="<?=site_url('Stories/delete/').$story->stori_id ?>">delete</a>
						</form>
					</div>
				</section>
			</div>
			<div class="col-md-1"></div>
		</div>
	<?php endforeach?>
</div>
