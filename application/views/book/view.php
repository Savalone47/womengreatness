<div class="content-wrapper clearfix">
	<!-- Content Header (Page header) -->
	<!-- Main content -->
	<div class="row">
		<div class="col-md-3">
			<section class="content">
				<img src="<?php echo base_url();?>/assets/images/books/<?=$book[0]->bo_picture?>" width="100%">
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
					<h2>Title :</h2>
					<h4><?=$book[0]->bo_title?></h4>

					<h2>Description :</h2>
					<h4><?=$book[0]->bo_description?></h4>

					<h2>Author :</h2>
					<h4><?=$book[0]->bo_author?></h4>

					<h2>Publishing House :</h2>
					<h4><?=$book[0]->bo_pub_house?></h4>

					<h2>Price :</h2>
					<h4>USD <?=$book[0]->bo_price?></h4>
					<small class="post-date">Posted on: <?php echo $book[0]->bo_created_at?> In <b><?=$book[0]->bo_cat_name?></b> </small> <br>
					<small class="post-date">
						<?="Pulblication Date : <b>". $book[0]->bo_pub_date."</b>"?>
					</small>
					<br><br>
					<?=form_open()?>
						<a class="btn btn-default" href="<?= base_url() ?>Books/edit/<?= $book[0]->bo_id ?>">Edit</a>
						<input type="submit" class="btn btn-danger" value="Delete">
					</form>
				</div>
			</section>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>